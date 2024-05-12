<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogTag;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(Request $request)
    {
        $pageSize = 6;
        $query = Blog::query()->with('blogCategory');

        if ($request->pagesize) {
            $pageSize = $request->pagesize;
        }
        $find = $query->paginate($pageSize);
        $tags = BlogTag::all();
        $categories = BlogCategory::all();

        // Initialize an array to store one blog per category
        $blogsByCategory = [];

        // Loop through each category and fetch the first 6 blogs
        foreach ($categories as $category) {
            $blogs = Blog::where('blog_categories_id', $category->id)
                ->limit(6)
                ->get();

            // Add the blogs to the array, along with their category
            if ($blogs->isNotEmpty()) {
                $blogsByCategory[] = [
                    'category' => $category,
                    'blogs' => $blogs
                ];
            }
        }

        return view('frontEnd.pages.index', ['datas' => $find, 'tags' => $tags, 'blogsByCategory' => $blogsByCategory]);
    }

    public function blogDetail(Request $request, $url)
    {
        $blog = Blog::with('user', 'blogCategory', 'multipleBlogTag.blogTag')->where('url', $url)->firstOrFail();

        return view('frontEnd.pages.blog-detail', compact('blog'));
    }
    public function blogList(Request $request,)
    {
        $pageSize = 6;
        $query = Blog::query()->with('blogCategory');
        if ($request->category_id) {
            $category_id = $request->category_id;
            $query->where('blog_categories_id', $category_id);
        }
        if ($request->pagesize) {
            $pageSize = $request->pagesize;
        }
        
        $recentPosts = Blog::orderBy('created_at', 'desc')->take(4)->get();

        $find = $query->paginate($pageSize);

        $tags = BlogTag::all();
        $categories = BlogCategory::withCount('blogs')->get();
        return view('frontEnd.pages.blog-list', ['datas' => $find, 'tags' => $tags, 'blogsByCategory' => $categories,'recentPosts'=>$recentPosts]);
    }
}
