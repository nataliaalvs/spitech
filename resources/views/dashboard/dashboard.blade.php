@extends('layouts.admin-template')
@section('page-name')
    
@endsection

@section('main')
<section class="py-2">
    <div class="container px-4 px-lg-5 mt-5">
        <h1 class="mb-4">Cursos feitos por mim</h1>            
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            @foreach ($courses as $course)
                <div class="col mb-5">
                    <div class="card h-100">
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

    <div class="container px-4 px-lg-5 mt-3">
        <h1 class="mb-4">Publicações feitas por mim</h1>            
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            @foreach ($posts as $post)
                <div class="col mb-5">
                    <div class="card h-100">
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
