<?php

namespace App\Http\Controllers;

use App\Models\Grupo;
use Illuminate\Http\Request;

class GrupoController extends Controller
{
    /**
     * Update the specified user.
     *
     * @param  Request  $request
     * @param  string  $id
     * @return Response
     */


    private $grupo;

    public function index() {
        $this->grupo = new Grupo();
        return view('grupos', ['grupos'=>$this->grupo->all()]);
    }

    public function show(Request $request, $id) {
        $this->grupo = new Grupo();
        return view('grupo', ['grupo'=>$this->grupo->find($id)]);
    }
}
