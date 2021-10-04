<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver curso</title>
</head>
<body>
    <h1>Curso {{ $course->name }}</h1>
    <p>{{ $course->description }}</p>
    <a href="{{ route('post.create') }}">Criar post sobre o curso</a>
</body>
</html>