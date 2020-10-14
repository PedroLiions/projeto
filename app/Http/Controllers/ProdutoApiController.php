<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;

class ProdutoApiController extends Controller
{
    public $produto;

    public function __construct(
        Produto $produto
    )
    {
        $this->produto = $produto;
    }

    public function all()
    {
        $produtos = Produto::all();

        return response()->json(['produtos' => $produtos], 200);
    }

    public function create()
    {
        $req = request()->all();

        $produto = new Produto();
        $produto->name = $req['name'];
        $produto->save();

        return response($produto);
    }

    public function edit()
    {
        $req = request()->all();

        $produto = Produto::find($req['id']);

        $produto->name = $req['name'];

        $produto->save();

        return response($produto);
    }

    public function delete($id)
    {
        $produto = Produto::find($id);
        $produto->delete();

        return response()->json([
            'message' => 'Produto deletado com sucesso'
        ], 200);
    }
}
