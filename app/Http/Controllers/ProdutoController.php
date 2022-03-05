<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    private $produto;

    public function index() {
        $this->produto = new Produto();
        //return response()->json($this->produto->all());
        return view('produtos', ['produtos'=>$this->produto->all()]);
    }
}
