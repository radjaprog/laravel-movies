<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use App\Models\Movie;
use App\Http\Requests\CreatMovieRequest;
use Illuminate\Support\Facades\Log;


class MoviesController extends Controller
{
    public function index()
    {
        $movies = Movie::all();

        return view('movies.index', compact('movies'));
    }

    public function show($id)
    {
        $movie = Movie::with('genres')->findOrFail($id);

        return view('movies.show', compact('movie'));
    }

    public function create()
    {
        $genre = Genre::all();

        return view('movies.create', ['genre' => $genre]);
    }

    public function store(CreatMovieRequest $request)
    {
        // dd($request->all());
        $validated = $request->validated();

        $movie = Movie::create([
            'title' => request('title'),
            'director' => request('director'),
            'year' => request('year'),
            'storyline' => request('storyline')
        ]);

        $genre_ids = request('genre_ids');

        foreach ($genre_ids as $genre_id) {
            $movie->genres()->attach($genre_id);
        }

        return redirect("/");
    }
}
