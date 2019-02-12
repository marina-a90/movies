@extends('layouts.master')

@section('title', 'Movies')

@section('body')
    <div class="container">
        <h1>Movies</h1>
        <h4 style="opacity:0.5">(in alphabetical order)</h4>
        <br>
        <ul class="container">
            @foreach($movies as $movie) 
                <h3>
                    <a href="{{ route('movies.show', ['id' => $movie->id]) }}">
                        {{ $movie->title }}
                    </a>
                </h3>
                <p>{{ str_limit( $movie->storyline, 100, '...') }}</p>
                <br><hr>
            @endforeach
        </ul>
    </div>
@endsection