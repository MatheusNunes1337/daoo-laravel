<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Grupos</title>
</head>
<body>
    <h1>Grupos</h1>
    @if ($grupos->count()>0)
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Descricao</th>
                <th>disciplina</th>
                <th>Nº máximo de membros</th>
                <th>Público</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($grupos as $grupo)
            <tr>
                <td><a href="/grupos/{{$grupo->id}}">{{$grupo->id}}</a></td>
                <td>{{$grupo->nome}}</td>
                <td>{{$grupo->descricao}}</td>
                <td>{{$grupo->disciplina}}</td>
                <td>{{$grupo->max_membros}}</td>
                <td>{{($grupo->eh_publico)?'Sim':'Não'}}</td>
                <td>
                    <a href="{{route('edit', $grupo->id)}}">Editar </a>
                    <a href="{{route('delete', $grupo->id)}}">Deletar </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>Grupos não encontrados! </p>
    @endif
</body>
</html>
