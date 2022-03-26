<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProdutoRequest;
use App\Models\Produto;
use Exception;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->query('per_page');
        $produtosPaginated = Produto::paginate($perPage);
        $produtosPaginated->appends([
            'per_page'=>$perPage
        ]);
        return response()->json($produtosPaginated);
    }

    public function show($id)
    {
        try {
            return response()->json(Produto::findOrFail($id));
        } catch (Exception $error) {
            $message = "O produto não encontrado com id:$id!";
            return $this->errorMessage($error, $message, 404,true);
        }
    }

    public function store(ProdutoRequest $request)
    {
        try {
            $newProduto = $request->post();
            $newProduto['importado'] = ($request->importado) ? true : false;
            $storedProtudo = Produto::create($newProduto);
            return response()->json([
                'message' => 'Produto criado com sucesso!',
                'produto' => $storedProtudo
            ]);
        } catch (Exception $error) {
            $message = 'Erro ao criar um novo Produto!';
            return $this->errorMessage($error, $message, 500, false);
        }
    }

    public function update(Request $request, $id)
    {
        try{
            $newProduto = Produto::findOrFail($id);
            $newProduto->update($request->all());
            return response()->json([
                "Message"=>"Informações do produto atualizadas com sucesso!",
                "Produto"=>$newProduto
            ]);
        }catch(Exception $error){
            $message = 'Erro ao atualizar o novo Produto!';
            return $this->errorMessage($error, $message, 500, true);
        }
    }

    public function delete($id)
    {
        try {
            if(Produto::findOrFail($id)->delete())
                return response()->json([
                    "Message"=>"Produto id:$id removido com sucesso!"
                ]);
            throw new Exception("Não foi possível deletar o produto!");
        } catch (Exception $error) {
            $message = "Não foi encontrado produto com id:$id!";
            return $this->errorMessage($error, $message, 404);
        }
    }

    private function errorMessage($error, $message, $statusHttp, $trace = false)
    {
        $messageError = [
            'Erro' => $message,
            'Exception' => $error->getMessage(),
            'Debug'=> $error
        ];
        //$statusHttp = $error->status? $error->status : ($statusHttp?$statusHttp:500);
        $statusHttp = $error->status ?? $statusHttp ?? 500;
        $trace && $messageError['Trace'] = $error->getTrace();
        return response($messageError, $statusHttp);
    }
}
