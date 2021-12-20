@extends('layouts.shop-template')

@section('styles')
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{asset('assets/shop-template/css/title.css')}}">
@endsection

@section('title-banner')
spitech
@endsection

@section('subtitle-banner')
    Uma nova plataforma para se especializar no mundo da informática
@endsection

@section('content')
    {{-- <div class="container my-5" style="font-family: Roboto Slab; font-size: 1.5rem">

        <div class="text" style="text-align: center">

            <p class = "py-3">
                Está querendo se aprofundar ou iniciar a jornada no universo da programação?
            </p>
            <p style="text-align: start">
                A <strong>spitech</strong> tem tudo o que você está procurando!!
                Diversos cursos com professores qualificados, preço super acessível e o melhor:
                acesso ilimitado após a compra!! <br>
    
                Fala sério, é ou não é a melhor plataforma de estudos?! 
            </p>
        </div>
        
        <div class="image">
            <img src="{{asset('assets/img/programmers.png')}}" class="img-fluid float-end" style="width: 420px" alt="...">
        </div>

        <div class="languages">
            <img src="{{asset('assets/img/lprogramming.png')}}" class="img-fluid" style="width: 750px" alt="...">

        </div>

    </div> --}}

    <div class="container">
        <div class="row my-5" style="font-size: 1.2rem"">
            <p style="text-align: center; font-size: 1.5rem"> Está querendo se aprofundar ou iniciar a jornada no universo da programação?</p>
             <div class="col-md-4">
             <div class="imgAbt">
                <img  width="350px" height="300px" src="{{asset('assets/img/programmers.png')}}">
             </div>
             </div>
            <div class="col-md-8 mt-6"><p> A <strong>spitech</strong> tem todos os benefícios que você está procurando.
                Cursos de diversas linguagens de programação lecionados por professores qualificados, preços accesíveis
                e o melhor: acesso ilimitado após a compra!! Possibilitando assistir as aulas de onde você estiver.<br>
    
                Fala sério, é ou não é a melhor plataforma de estudos?! </p>
            </div>

            <h1 class="my-4" style="text-align: center">Venha fazer parte da nossa história!</h1>
        </div>
        <div class="languages my-5">
            <img src="{{asset('assets/img/lprogramming.png')}}" class="rounded mx-auto d-block" style="width: 750px" alt="...">

        </div>
    </div>
@endsection
