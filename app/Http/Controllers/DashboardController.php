<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogTag;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show()
    {
        $blog = Blog::count();
        $blogTag = BlogTag::count();
        $blogCategory = BlogCategory::count();
        $userCount = User::count();
        return view(
            'admin.index',
            compact('blog', 'blogTag', 'blogCategory', 'userCount')
        );
    }
}
