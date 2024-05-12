<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogCategoryController extends Controller
{
    public function index(Request $request)
    {
        $pageSize = 10;
        $query = BlogCategory::query();
        if ($request->search) {
            $search = $request->search;
            $query->where('name', 'LIKE', "%$search%")->orwhere('description', 'LIKE', "%$search%");
        }
        if ($request->sort) {
            $query->sortable();
        }
        if ($request->pagesize) {
            $pageSize = $request->pagesize;
        }
        $find = $query->paginate($pageSize);
        return view('admin.blog-category', ['datas' => $find]);
    }
    public function addBlogCategoryView(Request $request)
    {
        return view('admin.add-blog-category');
    }
    public function saveCategory(Request $request)
    {
        if ($request->isMethod('POST')) {
            $this->validate(
                $request,
                [
                    'name' => 'required'
                ]
            );
            try {
                DB::beginTransaction();
                BlogCategory::updateOrCreate(
                    [
                        'id' => $request->id
                    ],
                    [
                        'name' => $request->name,
                        'description' => $request->description,
                    ]
                );
                DB::commit();
                return redirect()->route('blog-category')->withSuccess($request->id ? 'Form updated successfully' : 'Form submitted successfully');
            } catch (Exception $e) {
                DB::rollback();
                return redirect()->back()->withErrors(['Something went wrong'.' ' .$e->getMessage()]);
            }
        }
    }

    public function destroy($id)
    {
        if ($id) {
            try {
                DB::beginTransaction();
                $data = BlogCategory::find($id);
                if ($data) {
                    $data->delete();
                    DB::commit();
                    return redirect()->back()->withSuccess('Record deleted successfully');
                } else {
                    return redirect()->back()->withErrors(['Record not found']);
                }
            } catch (Exception $e) {
                DB::rollback();
                return redirect()->back()->withErrors(['Something went wrong']);
            }
        }
    }

    public function edit(Request $request, $id)
    {
        if ($id) {
            $category = BlogCategory::where('id', $id)->firstOrFail();
            return view('admin.add-blog-category', ['data' => $category]);
        }
        abort(404);
    }
}
