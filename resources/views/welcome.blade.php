@extends('layouts.shop-template')
@section('title-banner')
    Spitech
@endsection
@section('subtitle-banner')
    Uma nova plataforma para se aprofundar no mundo da informática
@endsection
@section('content')
<div class="container">
    <a href="{{ url('/dashboard') }}">Ir para o Dashboard!</a>
</div>
@endsection