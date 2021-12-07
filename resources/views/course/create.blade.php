@extends('layouts.admin-profile')

@section('page-name')
    Novo curso
@endsection

@section('formulario')
<form action="{{route('course.store')}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="exampleFormControlInput1">Nome do curso</label>
      <input type="text" class="form-control" id="exampleFormControlInput1">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Descrição</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <div class="form-group">
      <label class="exampleFormControlInput1" for="inlineFormInputName2">Preço</label>
      <input type="number" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Jane Doe">
      </div>
      <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
      <div class="input-group mb-2 mr-sm-2">
        <div class="input-group-prepend">
          {{-- <div class="input-group-text">@</div> --}}
        </div>
        <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Username">
      </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Example select</label>
      <select class="form-control" id="exampleFormControlSelect1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect2">Example multiple select</label>
      <select multiple class="form-control" id="exampleFormControlSelect2">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Example textarea</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
  </form>
@endsection
{{-- <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar curso</title>
</head>
<body>
    <h1>Adicione um novo curso</h1>
    
    <form action="{{route('course.store')}}" method="POST">
        @csrf
    <label for="name">Nome</label> <br>
    <input name="name" id="name" type="text" autocomplete="off"> <br> <br>

    <label for="description">Descrição</label> <br>
    <textarea name="description" id="description" cols="30" rows="10"></textarea> <br><br>

    <label for="price">Valor</label> <br>
    <input type="number" name="price" id="price" min="0"> <br><br>

    <label for="duration">Duração</label> <br>
    <input type="number" name="duration" id="duration" min="0"> <br><br>

    <button type="submit">Send</button>
    </form>
    <p>Template admin</p>

</body>
</html> --}}