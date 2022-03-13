<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grupo</title>
</head>
<body>
    <h1>Grupo</h1>
    @if ($grupo->count()>0)
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
            <tr>
                <td>{{$grupo->id}}</td>
                <td>{{$grupo->nome}}</td>
                <td>{{$grupo->descricao}}</td>
                <td>{{$grupo->disciplina}}</td>
                <td>{{$grupo->max_membros}}</td>
                <td>{{($grupo->eh_publico)?'Sim':'Não'}}</td>
                <td>
                    <a href="{{ route('edit', $grupo->id) }}">Editar</a>
                    <a href="{{ route('delete', $grupo->id) }}">Deletar</a>
                </td>
            </tr>
        </tbody>
    </table>
    @else
    <p>Grupo não encontrado! </p>
    @endif
    <a href="/grupos">voltar</a>
</body>
</html>
