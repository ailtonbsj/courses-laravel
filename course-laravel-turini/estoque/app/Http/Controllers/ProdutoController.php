<?php

namespace estoque\Http\Controllers;

use Illuminate\Http\Request;
use estoque\Http\Requests\ProdutosRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use estoque\Produto;

class ProdutoController extends Controller
{
    public function lista()
    {
        $produtos = Produto::all();
        // return view('listagem')->winProdutos($produtos);
        // return view('listagem', ['produtos' => $produtos]);
        return view('produto.listagem')->with('produtos', $produtos);
    }

    public function mostra($id)
    {
        $produto = Produto::find($id);
        if (empty($produto)) return "Este produto não existe!";
        return view('produto.detalhes')->with('p', $produto);
    }

    public function novo()
    {
        return view('produto.formulario');
    }

    public function adiciona(ProdutosRequest $req)
    {
        // $validator = Validator::make(
        //     $req->all(),
        //     [
        //         'nome' => 'required|min:5',
        //         'descricao' => 'required|max:255',
        //         'valor' => 'required|numeric',
        //         'quantidade' => 'required|numeric'
        //     ]
        // );
        // if($validator->fails())
        //     return redirect()->action('ProdutoController@novo');

        // $produto = new Produto();
        // $produto->nome = $req->input('nome');
        // $produto->descricao = $req->input('descricao');
        // $produto->valor = $req->input('valor');
        // $produto->quantidade = $req->input('quantidade');

        // $produto = new Produto($req->all());
        // $produto->save();

        Produto::create($req->all());

        //return redirect('produtos')->with('status', 'Sucesso');
        return redirect('produtos')->withInput($req->only('nome'));
    }

    public function remove($id)
    {
        $produto = Produto::find($id);
        $produto->delete();
        return redirect('produtos');
    }

    public function preenche($id)
    {
        $produto = Produto::find($id);
        return view('produto.formulario')->with('p',$produto)
                                        ->with('action','/produtos/atualiza');
    }

    public function atualiza(Request $req)
    {
        $produto = Produto::find($req->input('id'));
        $produto->nome = $req->input('nome');
        $produto->descricao = $req->input('descricao');
        $produto->valor = $req->input('valor');
        $produto->quantidade = $req->input('quantidade');
        $produto->save();
        return redirect('produtos');
    }

    public function listaJson()
    {
        $produtos = Produto::all();
        return $produtos;
    }
}
