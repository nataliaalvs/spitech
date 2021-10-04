<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar post</title>
</head>
<body>
    <h1>Crie sua publicação</h1>
    <form action="{{ route('post.store') }}" method="post">
        @csrf
        <label for="title">Título</label>
        <input type="text" name="title" id="title"> <br><br>
        <textarea name="content" id="content" cols="30" rows="10" placeholder="Seu texto vai aqui"></textarea>
        <br><br>
        <button type="submit">Publicar</button>
    </form>
</body>
</html>