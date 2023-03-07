@extends('layouts.master') {{-- prekopiraj sve iz master.blade.php    --}}

@section('title', 'Blog - all movies') {{-- 'title' koji section je u pitanju, a drugi argument je text. @section znaci da ubacujemo ovde ono sto je @yield title('title') --}}

@section('content') {{-- ono sto je definisano u @yield('content') u master.blade.php ce biti ovde --}}

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
            <div class="card-body">
                <p class="card-text">{{ $movie->title }} ({{ $movie->year }})</p>
                <div class="align-items-center">
                    <div class="btn-group">
                        <p> Genre: {{ $movie->genre }}</p>
                        <p>
                            Director: {{ $movie->director }}
                        </p>
                        <p>
                            {{ $movie->storyline }}
                        </p>
                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
