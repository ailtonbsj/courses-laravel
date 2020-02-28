<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;

class ContatoController extends Controller
{
    public function index($id = 0) {
        //return "Index do ContatoController de id = $id";
        $contatos = [
            (object) ["nome"=>"Maria", "tel"=>"6564644"],
            (object) ["nome"=>"Pedro", "tel"=>"6564444"]
        ];

        $contato = new Contato();
        dd($contato->lista());

        return view('contato.index', compact('contatos'));
    }

    public function criar(Request $req) {
        dd($req->all());
        return "Criar do ContatoController";
    }

    public function editar() {
        return "Editar do ContatoController";
    }
}
