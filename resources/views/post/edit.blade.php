<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <h1>Editar</h1>
    <form action="{{ route('post.update', ['post' => $post]) }}" method="POST">
        @method('PUT')
        @csrf
        <label for="title">Título</label>
        <input type="text" name="title" id="title" value="{{ $post->title }}"> <br><br>
        <textarea name="content" id="content" cols="30" rows="10" placeholder="Seu texto vai aqui" value="{{ $post->content }}">{{ $post->content }}</textarea>
        <br><br>

        <button type="submit">Send</button>
    </form>
    <p>Template admin</p>

</body>
</html>