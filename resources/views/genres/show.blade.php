@extends('layouts.master')

@section('title', 'All movies')

@section('content')
    <div>
        <br>
        All movies with Genre:
        <p href="{{ route('singleGenre', ['id' => $genre->id]) }}">
        <h5>{{ $genre->name }}</h5>
        </p>
    </div>
    <div>
        @foreach ($genre->movies as $movie)
            <div>
                <a href="{{ route('singleMovie', ['id' => $movie->id]) }}">
                    {{ $movie->title }} ({{ $movie->year }})
                </a>
            </div>
            <div>
                <p class="card-text">{{ $movie->storyline }}</p>
            </div>
        @endforeach
    </div>
@endsection
