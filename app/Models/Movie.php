<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'movies';  // 'movies' ime tabele u sql-u

    protected $fillable =  [
        'title',
        'genre',
        'director',
        'year'
    ];

    // public static function published() {    //published je ime metode, mogli smo ih nazvati konj() ili kobila()

    // return self::where('published', true)->get();  // self je za staticku metodu gde nad tom klasom znaci self je u ovom slucaju naziv klase definisane ovde Post izvrsi nad bazom query where kolona 'published' je true, ->get() znaci izvuci sve napolje, potrebno da je return-uje na kraju
    //}
}
