@extends('layouts.master')

@section('title', $movie->title)

@section('body')
    <div>

        <div>
            <h1>Movie:</h1>
            <h2>{{ $movie->title }}</h2>
            <div>Year: {{ $movie->year }}, Director: {{ $movie->director }}</div>
            <div>{{ $movie->genre }}</div>
            <p>{{ $movie->storyline }}</p>
        </div>

        <div>
            <h4>Comments:</h4>
            <ul>
                @foreach ($movie->comments as $comment)
                    <li>
                        <div style="opacity: 0.5">Created at: {{ $comment->created_at }}</div>
                        <p>{{ $comment->content }}</p>
                        <hr>
                    </li>
                @endforeach
            </ul>
        </div>

    </div>
@endsection