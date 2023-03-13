@extends('layouts.master')

@section('title', 'Add new comment')

@section('content')
    <form action='/movies/{{ $movie->id }}/comments' method='POST'>
        @csrf
        <label for="content">Add content</label>
        <textarea name="content" id="content" cols="30" rows="10"></textarea>
        <button type="submit" class="btn btn-sm btn-outline-secondary">Submit Comment:</button>
    </form>
@endsection
