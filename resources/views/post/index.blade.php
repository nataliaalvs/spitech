@extends('layouts.shop-template')
@section('title-page')
    Bem-vindo! - Spitech
@endsection
@section('title-banner')
    Publicações
@endsection
@section('subtitle-banner')
    Navegue pelas publicações
    <a href="{{ route('post.create') }}">Criar novo</a>

@endsection
@section('content')

        {{-- Para isso (em forma de cards) --}}
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    @foreach ($posts as $post)
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Product image -->
                                <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                                <!-- Product details -->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Post title -->
                                        <h5 class="fw-bolder">{{ $post->title }}</h5>
                                        <!-- Post content -->
                                        {{ $post->content }}
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto mb-2" href="#" onclick="document.querySelector('#edit_{{ $post->id }}').submit();">Atualizar</a></div>
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#" onclick="document.querySelector('#show_{{ $post->id }}').submit();">Mostrar</a></div>
                                </div>
                                <form id="edit_{{ $post->id }}" action="{{ route('post.edit', ['post' => $post->id]) }}"
                                    method="GET"></form>
                                <form id="show_{{ $post->id }}" action="{{ route('post.show', ['post' => $post->id]) }}"
                                    method="GET"></form>
                            </div>
                        </div>                        
                    @endforeach
                </div>
            </div>
        </section>

@endsection
