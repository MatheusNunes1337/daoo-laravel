<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Editar uma postagem</h1>
    <form action="{{route('update', $postagem->id)}}" method="POST">
        @csrf
        {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"/> --}}
        <table>
            <tr>
                <td>Descricao:</td>
                <td><textarea name="content" id="" cols="30" rows="10">{{$postagem->content}}</textarea></td>
            </tr>
            <tr align="center">
                <td colspan="2"><input type="submit" value="Editar"/></td>
            </tr>
            <tr align="center">
                <td colspan="2"><a href="/postagens" style="display: inline">&#9664;&nbsp;Voltar</a></td>
            </tr>
        </table>
    </form>
</body>

</html>
