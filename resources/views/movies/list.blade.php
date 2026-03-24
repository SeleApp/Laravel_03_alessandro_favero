<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista film</title>
</head>
<body>
    <h1>Lista film</h1>

    <ul>
        @foreach ($movies as $movie)
            <li>
                {{ $movie['title'] }} ({{ $movie['year'] }})
                <a href="/movies/{{ $movie['id'] }}">Dettaglio</a>
            </li>
        @endforeach
    </ul>

    <a href="/">Torna alla home</a>
</body>
</html>
