<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Blog;
use App\Models\BlogTag;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use App\Models\MultipleBlogTag;
use App\Http\Requests\BlogRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\MultipleBlogCategory;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $find = '';
        $pageSize = 10;
        $query = Blog::query()->with('user', 'blogCategory','multipleBlogTag.blogTag');
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
        return view('admin.blog', ['datas' => $find]);
    }

    function addBlogView()
    {
        $tag = BlogTag::get();
        $category = BlogCategory::where('status', 1)->get();
        return view('admin.add-blog', ['tags' => $tag, 'categories' => $category]);
    }

    public function saveBlog(BlogRequest $request)
    {
        // dd($request);
        try {
            DB::beginTransaction();
            $currentUserId = auth()->id();
            $file = $request->file('image');
            $uuid = Str::uuid()->toString();
            $filename = $uuid . '.' . $file->extension();
            $file->storeAs('public/temp/', $filename);
            $blog = Blog::updateOrCreate(
                ['id' => $request->id],
                [
                    'user_id' =>  $currentUserId,
                    'title' => $request->title,
                    'url' => $request->url,
                    'page_title' => $request->page_title,
                    'description' => $request->description,
                    'image' => $filename,
                    'blog_categories_id' => $request->blogCategory,
                ]
            );

            // Save blog tags
            MultipleBlogTag::where('blog_id', $blog->id)->delete(); // Clear existing tags
            foreach ($request->tag as $tagId) {
                MultipleBlogTag::create([
                    'blog_id' => $blog->id,
                    'blog_tag_id' => $tagId,
                ]);
            }

            DB::commit();

            return redirect()->route('blog')->withSuccess($request->id ? 'Form updated successfully' : 'Form submitted successfully');
        } catch (Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['Something went wrong: ' . $e->getMessage()]);
        }
    }
}
