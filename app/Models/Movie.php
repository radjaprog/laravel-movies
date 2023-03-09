<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'movies';

    protected $fillable =  [
        'title',
        'director',
        'year',
        'storyline'
    ];


    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'genres_movies');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
