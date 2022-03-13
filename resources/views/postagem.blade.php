<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postagem</title>
</head>
<body>
    <h1>Postagem</h1>
    @if ($postagem->count()>0)
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Conteúdo</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$postagem->id}}</td>
                <td>{{$postagem->content}}</td>
                <td>
                    <a href="{{ route('edit', $postagem->id) }}">Editar</a>
                    <a href="{{ route('delete', $postagem->id) }}">Deletar</a>
                </td>
            </tr>
        </tbody>
    </table>
    @else
    <p>Postagem não encontrada! </p>
    @endif
    <a href="/postagens">voltar</a>
</body>
</html>
