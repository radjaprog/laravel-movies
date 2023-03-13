<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function show($id)
    {
        $genre = Genre::with('movies')->findOrFail($id);

        return view('genres.show', compact('genre'));
    }
}
