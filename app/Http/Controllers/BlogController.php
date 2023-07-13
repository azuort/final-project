<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\User;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $blogs = Blog::all();
        return $blogs;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $blog = Blog::create($request->all());
        return response()->json($blog,201);
    }

    /**
     * Display the specified resource.
     */
    public function showAll() {
        $blogs = User::with('blog')->get();
        return $blogs;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) {
        $blog = Blog::findOrFail($id);
        $blog->update($request->all());
        return response()->json($blog);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) {
        $blog = Blog::destroy($id);
        return "Post successfully deleted.";
    }
}
