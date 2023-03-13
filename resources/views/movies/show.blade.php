@extends('layouts.master')
@section('title', 'Single movie')

@section('content')

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
            <div class="card-body">
                <h4 class="card-text">{{ $movie->title }} ({{ $movie->year }})</h4>
                <div class="align-items-center">
                    {{-- <div class="btn-group"> --}}
                    <br>
                    <p>
                        Director: {{ $movie->director }}
                    </p>
                    <p>
                        {{ $movie->storyline }}
                    </p>
                    <div>
                        @foreach ($movie->genres as $genre)
                            <div>
                                {{ $genre->name }}
                            </div>
                        @endforeach
                    </div>
                    <br>
                    <div>
                        <h6>
                            Comments:
                        </h6>
                        <ul>
                            @foreach ($movie->comments as $comment)
                                <li>
                                    {{ $comment->content }} ({{ $comment->created_at }})
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <a href="/comments/createComment" class="btn btn-sm btn-outline-secondary">Add Comment</a>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    {{-- </div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
