<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Projetos</title>
</head>
<body>
    <h1>Lista de Projetos</h1>
    <ul>
        @foreach($projetos as $projeto)
            <li>{{ $projeto->tema }}</li>
        @endforeach
    </ul>
</body>
</html>
