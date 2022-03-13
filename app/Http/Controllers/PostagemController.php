<?php

namespace App\Http\Controllers;

use App\Models\Postagem;
use Illuminate\Http\Request;

class PostagemController extends Controller
{
    public function index() {
        return view('postagens', ['postagens'=>Postagem::all()]);
    }

    public function show($id) {
        return view('postagem', ['postagem'=>Postagem::find($id)]);
    }

    public function create() {
        return view('post_create');
    }

    public function edit($id) {
        return view('post_edit', ['postagem'=>Postagem::find($id)]);
    }

    public function store(Request $request) {
        $newPost = $request->all();
        if(Postagem::create($newPost))
            redirect('/postagens');
        else
            dd('Erro ao criar postagem');
    }

    public function update(Request $request, $id) {
        $updatePost = $request->all();
        if(Postagem::find($id)->update($updatePost))
            return redirect('/postagens');
        else
            dd('Erro ao atualizar postagem');
    }

    public function delete($id) {
        if(Postagem::find($id)->delete())
            return redirect('/postagens');
        else
            dd('Erro ao deletar postagem');
    }
}
