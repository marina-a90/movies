<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie</title>
</head>
<body>
    <h1>Movie:</h1>
    <h2>{{ $movie->title }}</h2>
    <div>Year: {{ $movie->year }}, Director: {{ $movie->storyline }}</div>
    <div>{{ $movie->genre }}</div>
    <p>{{ $movie->storyline }}</p>
</body>
</html>