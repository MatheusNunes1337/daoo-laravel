<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Grupos</title>
</head>
<body>
    <h1>Postagens</h1>
    @if ($postagens->count()>0)
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>conteúdo</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($postagens as $postagem)
            <tr>
                <td><a href="/postagem/{{$postagem->id}}">{{$postagem->id}}</a></td>
                <td>{{$postagem->content}}</td>
                <td>
                    <a href="{{route('edit', $postagem->id)}}">Editar </a>
                    <a href="{{route('delete', $postagem->id)}}">Deletar </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>Postagens não encontradas! </p>
    @endif
</body>
</html>
