@extends('layouts.master')
@section('title', 'Single movie')

@section('content')

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
            <div class="card-body">
                <p class="card-text">{{ $movie->title }} ({{ $movie->year }})</p>
                <div class="align-items-center">
                    <div class="btn-group">
                        <br>
                        <p>
                            Director: {{ $movie->director }}
                        </p>
                        <p>
                            {{ $movie->storyline }}
                        </p>
                        <br>
                        @foreach ($movie->genres as $genre)
                            <div>
                                {{ $genre->name }}
                            </div>
                        @endforeach
                        <br>
                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
