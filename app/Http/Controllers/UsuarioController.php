<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Update the specified user.
     *
     * @param  Request  $request
     * @param  string  $id
     * @return Response
     */


    private $usuario;

    public function index() {
        $this->usuario = new Usuario();
        return view('usuarios', ['usuarios'=>$this->usuario->all()]);
    }

    public function show(Request $request, $id) {
        $this->usuario = new Usuario();
        return view('usuario', ['usuario'=>$this->usuario->find($id)]);
    }
}
