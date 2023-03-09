@extends('layouts.master')

@section('title', 'All movies')

@section('content')

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @if ($movies)
            @foreach ($movies as $movie)
                <div class="col">
                    <div class="card shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <rect width="100%" height="100%" fill="#55595c" />
                            <text class="d-flex align-items-center" x="50%" y="50%" fill="#eceeef"
                                dy=".3em"><a href="{{ route('singleMovie', ['id' => $movie->id]) }}">
                                    {{ $movie->title }} ({{ $movie->year }})
                                </a></text>
                        </svg>
                        <div class="card-body">
                            <p class="card-text">{{ $movie->storyline }}</p>
                            <div class="align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            nema
        @endif
    </div>

@endsection
