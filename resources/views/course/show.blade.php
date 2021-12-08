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
    <pre style="text-align: center">
{{ $course->description }}
    </pre>
</div>
@endsection
