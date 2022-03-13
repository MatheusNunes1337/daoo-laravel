<?php

namespace App\Http\Controllers;

use App\Models\Grupo;
use Illuminate\Http\Request;

class GrupoController extends Controller
{

    private $grupo;

    public function index() {
        return view('grupos', ['grupos'=>Grupo::all()]);
    }

    public function show(Request $request, $id) {
        $this->grupo = new Grupo();
        return view('grupo', ['grupo'=>Grupo::find($id)]);
    }

    public function create() {
        return view('grupo_create');
    }

    public function edit($id) {
        return view('grupo_edit', ['grupo'=>Grupo::find($id)]);
    }

    public function store(Request $request) {
        $newGrupo = $request->all();
        $newGrupo['eh_publico']=($request->eh_publico)?true:false;
        if(Grupo::create($newGrupo))
            redirect('/grupos');
        else
            dd('Erro ao cadastrar grupo');
    }

    public function update(Request $request, $id) {
        $updateGrupo = $request->all();
        $updateGrupo['eh_publico'] = ($request->eh_publico)?true:false;
        if(Grupo::find($id)->update($updateGrupo))
            return redirect('/grupos');
        else
            dd('Erro ao atualizar grupo');
    }

    public function delete($id) {
        if(Grupo::find($id)->delete())
            return redirect('/grupos');
        else
            dd('Erro ao deletar grupo');
    }
}
