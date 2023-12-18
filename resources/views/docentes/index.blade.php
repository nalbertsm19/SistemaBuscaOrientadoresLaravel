<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Docentes</title>
</head>
<body>
    <h1>Lista de Docentes</h1>
    <ul>
        @foreach($docentes as $docente)
            <li>{{ $docente->nome }}</li>
        @endforeach
    </ul>
</body>
</html>
