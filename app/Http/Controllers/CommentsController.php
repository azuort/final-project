<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\User;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $comments = Comment::all();
        return $comments;
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
        $comment = Comment::create($request->all());
        return response()->json($comment,201);
    }

    /**
     * Display the specified resource.
     */
    public function showAllComments() {
        $comments = Blog::with('commentBlog')->get();
        return $comments;
    }

    public function showAllUserComments() {
        $comments = User::with('commentUser')->get();
        return $comments;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) {
        $comment = Comment::findOrFail($id);
        return view('',['data' => $comment]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) {
        $comment = Comment::findOrFail($id);
        $comment->update($request->all());
        return response()->json($comment);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) {
        $comment = Comment::findOrFail($id);
        $comment->status = 'inactive';
        $comment->save();
        return redirect('');
    }
}
