@extends('layouts.shop-template')
@section('title-page')
    Publicações - Spitech
@endsection
@section('title-banner')
{{ $post->title }}

@endsection
@section('subtitle-banner')
    <a href="{{ route('post.index') }}">Voltar para Publicações</a>

@endsection
@section('content')
<div class="my-4">
    <pre style="text-align: center">
{{ $post->content }}
    </pre>
</div>
@endsection
