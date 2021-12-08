@extends('layouts.admin-profile')

@section('page-name')
    Novo curso
@endsection

@section('formulario')
<form action="{{route('course.store')}}" method="POST" class=" offset-md-3 my-4">
    @csrf
    <div class="form-group col-sm-8 my-3">
      <label for="exampleFormControlInput1">Nome do curso</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="name">
    </div>
    
    <div class="form-group col-sm-8 my-3">
        <label for="exampleFormControlTextarea1">Descrição</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
    </div>
  
    <div class="form-group col-sm-8 my-3">
      <div class="row">
        <div class="col">
          <label class="exampleFormControlInput1" for="inlineFormInputName2">Preço</label>
          <input type="number" class="form-control" placeholder="R$" name="price">
        </div>
      <div class="col">
        <label class="exampleFormControlInput1" for="inlineFormInputName2">Duração</label>
        <input type="text" class="form-control" name="duration">
      </div>
    </div>
    
    <div class="form-group col-sm-15 my-3">
      <label for="exampleFormControlInput1">Link do curso</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="link">
    </div>
    

    <button type="submit" class="btn btn-secondary my-4">Publicar</button>

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