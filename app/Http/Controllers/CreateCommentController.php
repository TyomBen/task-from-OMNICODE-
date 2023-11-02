<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCommentRequest;
use App\Models\Comment;
class CreateCommentController extends Controller
{
    public function create (CreateCommentRequest $request)
    {
        Comment::create([
            'content' => $request->content,
            'number_of_child_comments' => 0
        ]);
        return redirect()->back()->with('success', 'Comment successfully created!');
    }
}
