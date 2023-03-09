@extends('layouts.master')

@section('title', 'Add new movie')

@section('content')
    <form method="POST" action="/movies">
        @csrf

        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" />
        </div>

        @error('title')
            @include('partials.error')
        @enderror

        <div class="mb-3">
            <label class="form-label">Director</label>
            <textarea type="text" name="director" class="form-control"></textarea>
        </div>

        @error('director')
            @include('partials.error')
        @enderror

        <div class="mb-3">
            <label class="form-label">Year</label>
            <textarea type="text" name="year" class="form-control"></textarea>
        </div>

        @error('year')
            @include('partials.error')
        @enderror

        <div class="mb-3">
            <label class="form-label">Storyline</label>
            <textarea type="text" name="storyline" class="form-control"></textarea>
        </div>

        @error('storyline')
            @include('partials.error')
        @enderror

        <div>
            @foreach ($genre as $genres)
                <div class="form-group form-check">
                    <input type="checkbox" value="{{ $genres->id }}" class="form-check-input" name="genre_ids[]"
                        id="genre_{{ $genres->id }}" />
                    <label for="genre_{{ $genres->id }}" class="form-check-label">{{ $genres->name }}</label>
                </div>
            @endforeach
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
