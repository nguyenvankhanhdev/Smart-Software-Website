<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\BlogTours;
use App\Models\BlogTypes;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog()
    {
        $blogs = BlogTours::with('blogtypes')->where('status', 1)->orderBy('id', 'DESC')->paginate(12);
        $moreBlogs = BlogTours::where('status', 1)
            ->orderBy('id', 'DESC')->take(5)->get();

        $recentBlogs = BlogTours::where('status', 1)
            ->orderBy('id', 'DESC')->take(12)->get();
        $blogcategories = BlogTypes::all();
        return view('frontend.blog.blog', compact('blogs', 'moreBlogs', 'recentBlogs', 'blogcategories'));
    }
    public function blogDetail(string $slug)
    {
        $blog = BlogTours::where('slug', $slug)
            ->where('status', 1)
            ->firstOrFail();

        $moreBlogs = BlogTours::where('slug', '!=', $slug)
            ->where('status', 1)
            ->orderBy('id', 'DESC')->take(5)->get();

        $recentBlogs = BlogTours::where('slug', '!=', $slug)
            ->where('status', 1)
            ->where('id', $blog->id)
            ->orderBy('id', 'DESC')->take(12)->get();

        $blogcategories = BlogTypes::all();
        return view('frontend.blog.blog-detail', compact('blog', 'moreBlogs', 'recentBlogs', 'blogcategories'));
    }

    public function search(Request $request)
    {
        if ($request->has('search_query')) {
            $blogs = BlogTours::with('blogtypes')
                ->where('title', 'like', '%' . $request->search_query . '%')
                ->where('status', 1)
                ->orderBy('id', 'DESC')
                ->paginate(12);

            $moreBlogs = BlogTours::where('status', 1)
                ->orderBy('id', 'DESC')->take(5)->get();

            $blogcategories = BlogTypes::take(5)->get();

            $query = $request->search_query;
        } elseif ($request->has('category')) {
            $category = BlogTypes::where('name', $request->category)->firstOrFail();

            $blogs = BlogTours::with('blogtypes')->where('id', $category->id)
                ->where('status', 1)->orderBy('id', 'DESC')
                ->paginate(12);

            $moreBlogs = BlogTours::where('status', 1)
                ->orderBy('id', 'DESC')->take(5)->get();
            $blogcategories = BlogTypes::take(5)->get();
            $query = $request->category;
        } else {
            // $blogs = BlogTour::with('loaiblog')->where('trangthaiblog', 1)->orderBy('mablogtour', 'DESC')->paginate(3);
        }

        $count = $blogs->count();

        return view('frontend.blog.blogSearch', compact('blogs', 'moreBlogs', 'blogcategories', 'query', 'count'));
    }
}
