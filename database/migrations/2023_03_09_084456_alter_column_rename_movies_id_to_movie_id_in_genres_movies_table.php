<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('genres_movies', function (Blueprint $table) {
            $table->renameColumn('movies_id', 'movie_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('genres_movies', function (Blueprint $table) {
            $table->renameColumn('movies_id', 'movie_id');
        });
    }
};
