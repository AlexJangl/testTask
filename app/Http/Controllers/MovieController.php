<?php

namespace App\Http\Controllers;

use App\Http\Services\Service;
use App\Models\Genre;
use App\Models\GenreMovie;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


class MovieController extends Controller
{
    public $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $movies = $this->service->get_movies();

        $route = Route::is('movies.index') ? 'pages' : 'admin';

        return view($route . '.movies.index', compact('movies'));

    }

    public function create()
    {
        $genres = Genre::select('id', 'title')->get();
        return view('admin.movies.credit', compact('genres'));
    }

    public function store(Request $request)
    {
        $movie = Movie::add($request->all());
        $movie->uploadImages($request->images);
        $movie->upload_file($request->file);
        $movie->save();
        $movie->setGenres($request->genres);
        return redirect()->route('admin.movies.index')->with('massage', 'it is Ok');
    }

    public function show(Movie $movie)
    {
        //
    }

    public function edit(Movie $movie)
    {
        $item = $movie;
        $genres = Genre::select('id', 'title')->get();
        return view('admin.movies.credit', compact('item', 'genres'));
    }

    public function update(Request $request, Movie $movie)
    {
        $movie-> edit($request->all());
        $movie->uploadImages($request->images);
        $movie->upload_file($request->file);
        $movie->setGenres($request->genres);
        $movie->save();
        return back()->with('massage', 'it is Ok');
    }

    public function destroy(Movie $movie)
    {
        $items = GenreMovie::where('movie_id', $movie->id)->delete();
        $movie->delete();
        return redirect()->route('admin.movies.index')->with('massage', 'it is Delete');
    }
}
