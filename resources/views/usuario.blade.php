<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
</head>
<body>
    <h1>Usuario</h1>
    @if ($usuario->count()>0)
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
            <tr>
                <td>{{$usuario->id}}</td>
                <td>{{$usuario->username}}</td>
                <td>{{$usuario->email}}</td>
                <td>{{$usuario->tipo}}</td>
                <td>
                    <a href="{{ route('edit', $usuario->id) }}">Editar</a>
                    <a href="{{ route('delete', $usuario->id) }}">Deletar</a>
                </td>
            </tr>
        </tbody>
    </table>
    @else
    <p>Usuário não encontrado! </p>
    @endif
    <a href="/usuarios">voltar</a>
</body>
</html>
