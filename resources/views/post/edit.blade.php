{{-- <!DOCTYPE html>
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
</html> --}}

@extends('layouts.admin-template')

@section('page-name')
    Editar publicação
@endsection

@section('formulario')
<form action="{{ route('post.update', ['post'=>$post])}}" method="POST" class=" offset-md-3 my-4">
    @method('PUT')
    @csrf
    <div class="form-group col-sm-8 my-3">
      <label for="exampleFormControlInput1">Título</label>
      <input type="text" class="form-control" id="title" name="title" required value="{{$post->title}}" autocomplete="off">
    </div>
    <div class="form-group col-sm-8 my-3">
        <label for="exampleFormControlTextarea1">Artigo/Post</label>
        <textarea class="form-control" id="content" rows="12" cols="30" name="content" required maxlength="300" style="white-space:normal">{{$post->content}}</textarea>
    </div>
    <button type="submit" class="btn btn-secondary my-4">Atualizar</button>

</form>
@endsection