@extends('layouts.shop-template')
@section('title-page')
{{ $post->name }} - Spitech
@endsection
@section('title-banner')
{{ $post->title }}

@endsection
@section('subtitle-banner')
    <a href="{{ route('post.index') }}">Voltar para Publicações</a>

@endsection
@section('content')
<div class="my-4">
    <pre style="text-align: center; font-size: 1.5rem">
{{ $post->description }}
    </pre>
</div>
<div class="container text-secondary my-4" style="text-align: end">
    Criado por {{ $nameUser }}
</div>
<div id="posts" class="container">

</div>
@endsection
