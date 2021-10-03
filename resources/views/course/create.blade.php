<!DOCTYPE html>
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
</body>
</html>