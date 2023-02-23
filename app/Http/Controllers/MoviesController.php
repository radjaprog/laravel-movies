<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;


class MoviesController extends Controller
{
    public function index()
    {       // naziv metode index koja prikazuje sve postove
        $movies = Movie::all();

        return view('movies.index', compact('movies')); // znaci ovde moram da u view preimenujem blade allposts.blade.php u index.blade.php da bi 'index' radio, i ubacujem posts.index zato sto smo napravili novi folder posts gde smo ubacili index.blade.php
    }

    public function show($id)
    {
        $movie = Movie::findOrFail($id);

        return view('movies.show', compact('movie'));
    }
}
