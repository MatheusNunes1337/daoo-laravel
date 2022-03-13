<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
</head>
<body>
    <h1>Usuários</h1>
    @if ($usuarios->count()>0)
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome de usuário</th>
                <th>email</th>
                <th>tipo</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
            <tr>
                <td><a href="/usuarios/{{$usuario->id}}">{{$usuario->id}}</a></td>
                <td>{{$usuario->username}}</td>
                <td>{{$usuario->email}}</td>
                <td>{{$usuario->tipo}}</td>
                <td>
                    <a href="{{route('edit', $usuario->id)}}">Editar</a>
                    <a href="{{route('delete', $usuario->id)}}">Deletar </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>Usuários não encontrados! </p>
    @endif
</body>
</html>
