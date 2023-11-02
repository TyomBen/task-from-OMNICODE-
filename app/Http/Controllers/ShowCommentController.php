<?php

namespace App\Http\Controllers;
use App\Models\Comment;
class ShowCommentController extends Controller
{
    public function index()
    {
        $comments = Comment::with('childComment')->paginate(10);
        return view('comments.index', compact('comments'));
    }
}
