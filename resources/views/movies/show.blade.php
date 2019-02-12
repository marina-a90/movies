@extends('layouts.master')

@section('title', '{{ $movie->title }}')

@section('body')
    <h1>Movie:</h1>
    <h2>{{ $movie->title }}</h2>
    <div>Year: {{ $movie->year }}, Director: {{ $movie->storyline }}</div>
    <div>{{ $movie->genre }}</div>
    <p>{{ $movie->storyline }}</p>
@endsection