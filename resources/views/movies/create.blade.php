@extends('layouts.master')

@section('title', 'Create a new movie')

@section('body')
    <h1>Create a new movie</h1>

    <form method="POST" action="/movies.index">
        @csrf

        <div class="form-group row">
            <label for="text" class="col-4 col-form-label">Title</label>
            <div class="col-8">
                <input id="text" name="title" type="text" placeholder="Movie title" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label for="text" class="col-4 col-form-label">Year</label>
            <div class="col-8">
                <input id="text" name="year" type="text" placeholder="Movie year" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label for="text" class="col-4 col-form-label">Genre</label>
            <div class="col-8">
                <input id="text" name="genre" type="text" placeholder="Movie genre" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label for="text" class="col-4 col-form-label">Director</label>
            <div class="col-8">
                <input id="text" name="director" type="text" placeholder="Movie director" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label for="textarea" class="col-4 col-form-label">Storyline</label>
            <div class="col-8">
                <textarea id="textarea" name="storyline" placeholder="Storyline" cols="40" rows="5"></textarea>
            </div>
        </div>

        <div class="form-group row">
            <div class="offset-4 col-8">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection