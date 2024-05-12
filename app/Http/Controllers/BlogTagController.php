<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\BlogTag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogTagController extends Controller
{
    public function index(Request $request)
    {
        $pageSize = 10;
        $query = BlogTag::query();
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
        return view('admin.blog-tags', ['datas' => $find]);
    }

    public function addBlogTagView(Request $request)
    {
        return view('admin.add-blog-tag');
    }
    public function saveTag(Request $request)
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
                BlogTag::updateOrCreate(
                    [
                        'id' => $request->id
                    ],
                    [
                        'name' => $request->name,
                        'description' => $request->description,
                    ]
                );
                DB::commit();
                return redirect()->route('blog-tag')->withSuccess($request->id ? 'Form updated successfully' : 'Form submitted successfully');
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
                $data = BlogTag::find($id);
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
            $tag = BlogTag::where('id', $id)->firstOrFail();
            return view('admin.add-blog-tag', ['data' => $tag]);
        }
        abort(404);
    }
}
