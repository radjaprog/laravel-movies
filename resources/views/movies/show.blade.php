@extends('layouts.master') {{-- prekopiraj sve iz master.blade.php    --}}

@section('title', 'Blog - all movies') {{-- 'title' koji section je u pitanju, a drugi argument je text. @section znaci da ubacujemo ovde ono sto je @yield title('title') --}}

@section('content') {{-- ono sto je definisano u @yield('content') u master.blade.php ce biti ovde --}}
    <div>
        <h3>
            {{ $movie->title }}
        </h3>
        <p>
            {{ $movie->storyline }}
        </p>
    </div>
@endsection
