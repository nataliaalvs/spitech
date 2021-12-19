@extends('layouts.shop-template')
@section('styles')
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
@endsection
@section('title-banner')
    Spitech
@endsection
@section('subtitle-banner')
    Uma nova plataforma para se especializar no mundo da informática
@endsection
@section('content')
    <div class="container my-5" style="font-family: Roboto Slab; font-size: 1.5rem; text-align: center">
        <p class = "py-2">
            Está querendo se aprofundar ou iniciar a jornada no universo da programação?
        </p>
        <p>
            A <strong>spitech</strong> tem tudo o que você está procurando!!
            Diversos cursos com professores qualificados, preço super acessível e o melhor:
            acesso ilimitado após a compra!!

            <p> Fala sério, é ou não é a melhor plataforma de estudos?!  </p>
        </p>
        <img src="{{ asset('assets/img/images.png') }}" alt="Imagem de algumas linguagens disponíveis na plataforma" width="1000x" style="margin: 5rem">

    </div>
    <script src="{{asset('js/scripts.js')}}"></script>
@endsection
