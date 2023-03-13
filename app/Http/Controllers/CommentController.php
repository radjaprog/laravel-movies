<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Movie;
use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;

class CommentController extends Controller
{
    public function index()
    {
        // $movieName = $request->query('movie');
        $comment = Comment::orderBy('id', 'desc')->simplePaginate(10);
        return view('comments.index', compact('comment'));
    }

    public function create()
    {

        return view('comments.create');
    }

    public function store(CommentRequest $request, $id)
    {
        // dd($request->all());
        $validated = $request->validated();

        $movie = Movie::findOrFail($id);
        $comment = Comment::create(array_merge($validated, [
            'movie_id' => $id
        ]));

        //return redirect()->route('singleMovie', ['id' => ]);
        return redirect("/movies/{$movie->id}");
    }
}
