<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCommentRequest;
use App\Models\ChildComment;
use App\Models\Comment;
class CreateChildCommentController extends Controller
{
    public function create (int $id)
    {
        return view("comments.create", compact("id"));
    }
    public function store (CreateCommentRequest $request , int $id)
    {
        $parentComment = Comment::find($id);

        $parentComment->update([
            'number_of_child_comments' => $parentComment->childComment->count() + 1
        ]);
        ChildComment::create([
            'parent_comment_id' => $id,
            'content' => $request->content
        ]);
        return redirect()->route('comments')->with('success', "you replied to another message!");
    }
}
