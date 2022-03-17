<div class="col col-sm-12 col-12 col-md-4 w-100">
    <div class="content">
        <img src="{{ asset($movie->getImages(0,'images','/admin/img/png/no-logo.png')) }}" alt="" class="w-100">
        <div class="content-text">
            <h5><a href="">{{ $movie->title}}</a></h5>
            <p>
            @foreach($movie->genres as $genre)
                {{ $genre->title . (!$loop->last ? ', ' : '') }}
            @endforeach
            </p>
        </div>
    </div>
</div>


