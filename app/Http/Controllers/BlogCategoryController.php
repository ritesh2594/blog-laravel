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

    // public function softDeleteCategory(Request $request, $id)
    // {
    //     $category = BlogCategory::find($id);
    //     $response = [];

    //     try {
    //         if ($category) {
    //             $category->delete();
    //             $response['success'] = true;
    //             $response['message'] = "Category moved to trash successfully";
    //         } else {
    //             $response['error'] = true;
    //             $response['message'] = "Category not found";
    //         }
    //     } catch (\Exception $e) {
    //         $response['error'] = true;
    //         $response['message'] = "Something went wrong: " . $e->getMessage();
    //     }
    //     return response()->json($response);
    // }

    public function deleteCategory(Request $request, $id)
    {
        $category = BlogCategory::find($id);
        $response = [];

        try {
            if ($category) {
                $category->forceDelete();
                $response['success'] = true;
                $response['message'] = "Category deleted successfully";
            } else {
                $response['error'] = true;
                $response['message'] = "Category not found";
            }
        } catch (\Exception $e) {
            $response['error'] = true;
            $response['message'] = "Something went wrong: " . $e->getMessage();
        }
        return response()->json($response);
    }

    // public function getSoftDeletedCategories()
    // {
    //     try {
    //         $deletedCategories = BlogCategory::onlyTrashed()->get();
    //         if ($deletedCategories->isEmpty()) {
    //             return response()->json(['error' => 'No soft-deleted categories found'], 404);
    //         }
    //         return response()->json($deletedCategories);
    //     } catch (\Exception $e) {
    //         return response()->json(['error' => 'Failed to fetch soft-deleted categories'], 500);
    //     }
    // }
    // public function restoreDeleteCategory(Request $request, $id)
    // {
    //     $category = BlogCategory::find($id);
    //     $response = [];

    //     try {
    //         if ($category) {
    //             $category->restore();
    //             $response['success'] = true;
    //             $response['message'] = "Category restore successfully";
    //         } else {
    //             $response['error'] = true;
    //             $response['message'] = "Category not found";
    //         }
    //     } catch (\Exception $e) {
    //         $response['error'] = true;
    //         $response['message'] = "Something went wrong: " . $e->getMessage();
    //     }
    //     return response()->json($response);
    // }
}
