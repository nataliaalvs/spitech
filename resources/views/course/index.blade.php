@extends('layouts.shop-template')
@section('title-page')
    Publicações - Spitech
@endsection
@section('title-banner')
    Cursos
@endsection
@section('subtitle-banner')
    Navegue pelos cursos
    <p><a href="{{ route('course.create') }}">Criar novo</a></p>

@endsection
@section('content')

        {{-- Para isso (em forma de cards) --}}
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    @foreach ($courses as $course)
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Product image -->
                                <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                                <!-- Product details -->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- course name -->
                                        <h5 class="fw-bolder">{{ $course->name }}</h5>
                                        <p>{{$course->duration}}h por R$ {{$course->price}}</P>
                                        <!-- course content -->
                                        {{ $course->description }}
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto mb-2" href="#" onclick="document.querySelector('#edit_{{ $course->id }}').submit();">Atualizar</a></div>
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#" onclick="document.querySelector('#show_{{ $course->id }}').submit();">Mostrar</a></div>
                                </div>
                                <form id="edit_{{ $course->id }}" action="{{ route('course.edit', ['course' => $course->id]) }}"
                                    method="GET"></form>
                                <form id="show_{{ $course->id }}" action="{{ route('course.show', ['course' => $course->id]) }}"
                                    method="GET"></form>
                            </div>
                        </div>                        
                    @endforeach
                </div>
            </div>
        </section>

@endsection

