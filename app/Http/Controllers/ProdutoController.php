<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mockery\Exception;

class ProdutoController extends Controller
{
    public function criar()
    {
        $req = request()->all();

        $produto = new Produto();

        $produto->name = $req['name'];
        $produto->save();

        return back();
    }

    public function listaProdutos()
    {
        $produtos = Produto::all();

        return view('lista-produtos', [ 'produtos' => $produtos ]);
    }

    public function pegarUnicoProduto($id)
    {
        $produto = Produto::find($id);

        return view('editar-produto', ['produto' => $produto]);
    }

    public function saveEditacaoProduto()
    {
        $req = request()->all();

        $produto = Produto::find($req['id']);
        $produto->name = $req['name'];
        $produto->save();

        return $this->listaProdutos();
    }

    public function delete($id)
    {
        $produto = Produto::find($id);

        $produto->delete();

        return back();
    }
}
