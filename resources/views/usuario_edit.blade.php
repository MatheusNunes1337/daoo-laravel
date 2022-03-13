<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Editar um Usuário</h1>
    <form action="{{route('update', $usuario->id)}}" method="POST">
        @csrf
        {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"/> --}}
        <table>
            <tr>
                <td>Nome de usuário:</td>
                <td><input type="text" name="username" value="{{$usuario->username}}"/></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email" value="{{$usuario->email}}"/></td>
            </tr>
            <tr>
                <td>Senha:</td>
                <td><input type="password" name="senha" value="{{$usuario->senha}}"/></td>
            </tr>
            <tr>
                <td>Tipo (student ou teacher):</td>
                <td><input type="text" name="tipo" value="{{$usuario->tipo}}"/></td>
            </tr>
            <tr align="center">
                <td colspan="2"><input type="submit" value="Editar"/></td>
            </tr>
            <tr align="center">
                <td colspan="2"><a href="/produtos" style="display: inline">&#9664;&nbsp;Voltar</a></td>
            </tr>
        </table>
    </form>
</body>

</html>
