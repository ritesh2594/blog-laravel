<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;

class UserController extends Controller
{
    function show()
    {
        return view('frontEnd.auth.login');
    }
    public function login(LoginRequest $request)
    {
        $credentials = $request->only(["email", "password"]);
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->is_admin) {
                return response()->json([
                    "status" => true,
                    "redirect" => url("/admin/dashboard"),
                    'message' => 'Admin Login Successful'
                ]);
            } else {
                return response()->json([
                    "status" => true,
                    "redirect" => url("/"),
                    'message' => 'Login Successful'
                ]);
            }
        } else {
            return response()->json([
                "status" => false,
                "errors" => ["Invalid credentials"]
            ]);
        }
    }
    public function register_view()
    {
        return view('frontEnd.auth.register');
    }

    public function register(RegisterRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);

        if ($request->ajax() && $user) {
            $status = true;
            $message = 'You have Successfully Registered';
        } else {
            $status = false;
            $message = 'Something Went Wrong!';
        }
        return response()->json(['status' => $status, 'message' => $message]);
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
