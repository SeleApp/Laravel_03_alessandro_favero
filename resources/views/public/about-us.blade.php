<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi siamo</title>
</head>
<body>
    <h1>Chi siamo</h1>

    <ul>
        @foreach ($users as $user)
            <li>
                {{ $user['name'] }} - {{ $user['role'] }}
                <a href="/chi-siamo/{{ $user['id'] }}">Dettaglio</a>
            </li>
        @endforeach
    </ul>

    <a href="/">Torna alla home</a>
</body>
</html>
