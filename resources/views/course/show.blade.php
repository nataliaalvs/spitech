@extends('layouts.shop-template')
@section('title-page')
{{ $course->name }} - Spitech
@endsection
@section('title-banner')
{{ $course->name }}

@endsection
@section('subtitle-banner')
    <a href="{{ route('course.index') }}">Voltar para Cursos</a>

@endsection
@section('content')
<div class="my-4">
    <pre style="text-align: center; font-size: 1.5rem">
    {{$course->description }}
    </pre>
</div>
<div class="link px-5" style="text-align: end">
    <a href="{{$course->link}}">{{$course->link}}</a>
</div>
<div class="container text-secondary my-4" style="text-align: end">
    Criado por {{ $nameUser }}
</div>
<div id="posts" class="container">

</div>
@endsection
