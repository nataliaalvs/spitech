<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
</head>

<body>
    <h1>Todos as publicações</h1>
    <a href="{{ route('post.create') }}">Criar novo</a>
    <table border='2'>
        <thead>
            <tr>
                <th>Título</th>
                <th>Texto</th>

                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->content }}</td>
                    
                    <td>
                        <a href="#"
                            onclick="document.querySelector('#edit_{{ $post->id }}').submit();">Atualizar</a>
                        <a href="#" onclick="document.querySelector('#show_{{ $post->id }}').submit();">Mostrar</a>

                    </td>

                </tr>
                <form id="edit_{{ $post->id }}" action="{{ route('post.edit', ['post' => $post->id]) }}"
                    method="GET"></form>
                <form id="show_{{ $post->id }}" action="{{ route('post.show', ['post' => $post->id]) }}"
                    method="GET"></form>
            @endforeach
        </tbody>
    </table>
    <p>Template shop</p>

</body>

</html>
