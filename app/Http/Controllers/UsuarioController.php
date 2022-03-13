<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;


class UsuarioController extends Controller
{
    public function index() {
        return view('usuarios', ['usuarios'=>Usuario::all()]);
    }

    public function show($id) {
        return view('usuario', ['usuario'=>Usuario::find($id)]);
    }

    public function create() {
        return view('usuario_create');
    }

    public function edit($id) {
        return view('usuario_edit', ['usuario'=>Usuario::find($id)]);
    }

    public function store(Request $request) {
        $newUsuario = $request->all();
        if(Usuario::create($newUsuario))
            return redirect('/usuarios');
        else
            dd('Erro ao cadastrar usuário');
    }

    public function update(Request $request, $id) {
        $updateUsuario = $request->all();
        if(Usuario::find($id)->update($updateUsuario))
            return redirect('/usuarios');
        else
            dd('Erro ao atualizar usuário');
    }

    public function delete($id) {
        if(Usuario::find($id)->delete())
            return redirect('/usuarios');
        else
            dd('Erro ao deletar usuário');
    }
}
