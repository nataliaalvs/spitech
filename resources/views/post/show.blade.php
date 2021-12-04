<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $post->title }}</title>
</head>
<body>
    <h1 style="text-align: center">{{ $post->title }}</h1>
    <pre style="text-align: center">
{{ $post->content }}
    </pre>
    <p>Template shop</p>

</body>

</html>