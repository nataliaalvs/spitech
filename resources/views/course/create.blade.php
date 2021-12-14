@extends('layouts.admin-template')

@section('page-name')
    Novo curso
@endsection

@section('formulario')
<form action="{{route('course.store')}}" method="POST" class=" offset-md-3 my-4">
    @csrf
    <div class="form-group col-sm-8 my-3">
      <label for="exampleFormControlInput1">Nome do curso</label>
      <input type="text" class="form-control" id="name" name="name" required value="{{old('name')}}">
    </div>
    
    <div class="form-group col-sm-8 my-3">
      <label for="exampleFormControlTextarea1">Descrição</label>
      <textarea class="form-control" id="description" rows="3" name="description" required value="{{old('description')}}"></textarea>
    </div>
    
    <div class="form-group col-sm-8 my-3">
      <div class="row">
        <div class="col">
          <label class="exampleFormControlInput1" for="inlineFormInputName2">Preço</label>
          <input type="text" class="form-control" min="0" placeholder="R$" name="price" id="price" required value="{{old('price')}}">
        </div>
        <div class="col">
          <label class="exampleFormControlInput1" for="inlineFormInputName2">Duração</label>
          <input type="text" class="form-control" min="0" name="duration" id="duration" required value="{{old('duration')}}">
        </div>
    </div>
    
    <div class="form-group col-sm-15 my-3">
      <label for="exampleFormControlInput1">Link do curso</label>
      <input type="text" class="form-control" id="link" name="link" required value="{{old('link')}}">
    </div>
    

    <button type="submit" class="btn btn-secondary my-4">Publicar</button>

  </form>

  
@endsection