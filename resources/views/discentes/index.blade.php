<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Discentes</title>
</head>
<body>
    <h1>Lista de Discentes</h1>
    <ul>
        @foreach($discentes as $discente)
            <li>{{ $discente->nome }}</li>
        @endforeach
    </ul>
</body>
</html>
