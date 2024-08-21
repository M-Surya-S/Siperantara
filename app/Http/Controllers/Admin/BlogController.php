<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Blog';
        $blogs = Blog::all();
        return view('admin.blog.my-blog', compact('title', 'blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Add Blog';
        return view('admin.blog.add-blog', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Handle image upload
        $filepath = $request->file('image')->store('public/blog/image');

        Blog::create([
            'image' => $filepath,
            'blog_title' => $request->blog_title,
            'writter' => $request->writter,
            'blog_content' => $request->blog_content,
        ]);

        return redirect(url('dashboard/my-blog'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = 'Edit Blog';
        $blog = Blog::findOrFail($id);
        return view('admin.blog.edit-blog', compact('title', 'blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $blog = Blog::findOrFail($id);

        $existingImage = $blog->image;

        if ($request->has('image')) {
            // Handle image upload
            $filepath = $request->file('image')->store('public/blog/image');
            $blog->update([
                'image' => $filepath,
            ]);

        } else {
            $blog->update([
                'image' => $existingImage,
            ]);
        }

        $blog->update([
            'blog_title' => $request->blog_title,
            'writter' => $request->writter,
            'blog_content' => $request->blog_content,
        ]);

        return redirect(url('dashboard/my-blog'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Blog::findOrfail($id);

        // Hapus file gambar dari storage
        Storage::delete($blog->image);

        $blog->delete();
        return redirect(url('dashboard/my-blog'));
    }
}
