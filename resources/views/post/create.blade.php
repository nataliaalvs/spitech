@extends('layouts.admin-template')

@section('page-name')
    Criar post
@endsection

@section('formulario')
<form action="{{ route('post.store') }}" method="POST" class=" offset-md-3 my-4">
    @csrf
    <div class="form-group col-sm-8 my-3">
      <label for="exampleFormControlInput1">Título</label>
      <input type="text" class="form-control" id="title" name="title" required value="{{old('title')}}" autocomplete="off">
    </div>
    @error('title')      
      <div class="alert alert-danger">{{ $errors->first('title') }}</div> 
    @enderror
    
    <div class="form-group col-sm-8 my-3">
        <label for="exampleFormControlTextarea1">Artigo/Post</label>
        <textarea class="form-control" id="content" rows="20" cols="30" name="content" required maxlength="300">{{old('description')}}</textarea>
    </div>
    @error('content')      
      <div class="alert alert-danger">{{ $errors->first('content') }}</div> 
    @enderror
  
    <button type="submit" class="btn btn-secondary my-4">Publicar</button>

</form>
@endsection