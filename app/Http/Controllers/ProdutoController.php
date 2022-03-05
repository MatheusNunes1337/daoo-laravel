<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Update the specified user.
     *
     * @param  Request  $request
     * @param  string  $id
     * @return Response
     */


    private $produto;

    public function index() {
        $this->produto = new Produto();
        //return response()->json($this->produto->all());
        return view('produtos', ['produtos'=>$this->produto->all()]);
    }

    public function show(Request $request, $id) {
        $this->produto = new Produto();
        //$this->id = $request->id;
        return view('produto', ['produto'=>$this->produto->find($id)]);
    }
}
