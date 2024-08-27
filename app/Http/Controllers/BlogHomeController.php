<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Blog';
        $blogs = Blog::paginate(6);
        return view('guest.blog.blog', compact('title', 'blogs'));
    }
    
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $title = 'Blog';
        $blog = Blog::findOrFail($id);
        $blog_recent = Blog::paginate(3);
        return view('guest.blog.detail-blog', compact('title', 'blog', 'blog_recent'));
    }
}
