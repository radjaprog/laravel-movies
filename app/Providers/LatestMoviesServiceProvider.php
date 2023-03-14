<?php

namespace App\Providers;

use App\Models\Movie;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class LatestMoviesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $latestMovies = Movie::latest()->take(5)->get();

        View::share('latestMovies', $latestMovies);
    }
}
