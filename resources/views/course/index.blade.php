<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
</head>
<body>
    <h1>Todos os cursos</h1>

    <table border='2'>
        <thead>
            <tr> 
                <th> Nome</th>
                <th>Descrição</th>
                <th>Preço
                </th>
                <th>Duração</th>
            </tr>
        </thead>
        <tbody>
            @foreach($courses as $attribute)
        <tr>
            <td>{{$attribute->name}}</td>
            <td>{{$attribute->description}}</td>
            <td>R$ {{$attribute->price}}
            </td>
            <td>
                {{$attribute->duration}}h
            </td>
            <td>
            <a href="#" onclick="document.querySelector('#edit_{{ $attribute->id }}').submit();">Atualizar</a>

            </td>

        </tr>
<form id="edit_{{ $attribute->id }}" action="{{ route('course.edit', ['course'=>$attribute->id]) }}" method="GET"></form>


        @endforeach
        </tbody>
        </table>
</body>
</html>