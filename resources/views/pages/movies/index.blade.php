@extends('_layout')
@section('content')
    <div class="header-title">
        <div class="container">
            <h3>Movies</h3>
        </div>
    </div>
    <div class="blog section bg-grey">
        <div class="container">
            <div class="row w-100">
                @foreach($movies as $movie)
                    @include('pages.movies._movie_card')
                @endforeach
            </div>
        </div>
        @include('admin._include._paginate',['pagination'=>$movies])

    </div>
@endsection
