<?php

namespace estoque\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    public function lista()
    {
        $produtos = DB::select('select * from produtos');
        // return view('listagem')->winProdutos($produtos);
        // return view('listagem', ['produtos' => $produtos]);
        return view('produto.listagem')->with('produtos', $produtos);
    }

    public function mostra($id)
    {
        $resposta = DB::select('select * from produtos where id = ?', [$id]);
        if (empty($resposta)) return "Este produto não existe!";
        return view('produto.detalhes')->with('p', $resposta[0]);
    }

    public function novo()
    {
        return view('produto.formulario');
    }

    public function adiciona(Request $req)
    {
        $fields = $req->only('nome', 'descricao', 'valor', 'quantidade');
        // DB::insert('insert into produtos (nome, descricao, valor, quantidade)
        //             values (?, ?, ?, ?)', array_values($fields));
        DB::table('produtos')->insert(
            [
                'nome' => $fields['nome'],
                'valor' => $fields['valor'],
                'descricao' => $fields['descricao'],
                'quantidade' => $fields['quantidade']
            ]
        );
        return redirect('produtos')->with('status', 'Sucesso');
    }
}
