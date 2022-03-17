<?php

namespace App\Http\Services;

use App\Models\Movie;
use Illuminate\Support\Facades\Route;

class Service
{
    public function get_movies()
    {
        $moviesQuery = Movie::with('genres:id,title')
            ->select('id', 'title', 'status', 'images', 'file', 'created_at');
        $moviesQuery = Route::is('movies.index')
            ? $moviesQuery->where('status', Movie::ACTIVE)
            : $moviesQuery;
        $movies = Route::is('movies.index')
            ? $moviesQuery->paginate(9)
            : $moviesQuery->get();
        return $movies;
    }


}
