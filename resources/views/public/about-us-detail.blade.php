<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dettaglio utente</title>
</head>
<body>
    <h1>Dettaglio utente</h1>

    <p>Nome: {{ $user['name'] }}</p>
    <p>Ruolo: {{ $user['role'] }}</p>

    <a href="/chi-siamo">Torna a chi siamo</a>
</body>
</html>
