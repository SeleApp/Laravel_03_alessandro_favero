<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dettaglio film</title>
</head>
<body>
    <h1>Dettaglio film</h1>

    <p>Titolo: {{ $movie['title'] }}</p>
    <p>Anno: {{ $movie['year'] }}</p>

    <a href="/movies">Torna alla lista film</a>
</body>
</html>
