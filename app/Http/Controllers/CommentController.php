<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Notifications\CommentNotification;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        $validatedRequest = $this->validate($request, [
            'post_id' => ['required', 'numeric', 'exists:posts,id'],
            'comment' => ['required', 'string'],
        ]);

        $validatedRequest['user_id'] = $request->user()->id;

        $comment = Comment::create($validatedRequest);

        $author = $comment->post->user;

        $author->notify(new CommentNotification($comment));

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();

        return redirect()->back();
    }
}
