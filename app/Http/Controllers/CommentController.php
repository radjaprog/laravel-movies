<?php

namespace App\Http\Controllers;

use App\Models\Comment;
// use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        // $movieName = $request->query('movie');
        $comment = Comment::orderBy('id', 'desc')->simplePaginate(10);
        return view('comments.index', compact('comment'));
    }
}
