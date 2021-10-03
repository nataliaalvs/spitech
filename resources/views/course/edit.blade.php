<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <h1>EDITE</h1>
    <form action="{{route('course.update', ['course' =>$course->id])}}" method="POST">
        @method('PUT')
        @csrf
    <label for="name">Nome</label> <br>
    <input name="name" id="name" type="text" autocomplete="off" value="{{$course->name}}"> <br> <br>

    <label for="description">Descrição</label> <br>
    <textarea name="description" id="description" cols="30" rows="10" value="{{$course->description}}"></textarea> <br><br>

    <label for="price">Valor</label> <br>
    <input type="number" name="price" id="price" min="0" value="{{$course->price}}"> <br><br>

    <label for="duration">Duração</label> <br>
    <input type="number" name="duration" id="duration" min="0" value="{{$course->duration}}"> <br><br>

    <button type="submit">Send</button>
    </form>
</body>
</html>