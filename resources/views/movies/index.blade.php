<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>
</head>
<body>
    @foreach($movies as $movie)
        <h3>
            <a href="{{ route('movies.show', ['id' => $movie->id]) }}">
                {{ $movie->title }}
            </a>
        </h3>
        <p>{{ str_limit( $movie->storyline, 100, '...') }}</p>
        <br><hr>
    @endforeach
</body>
</html>