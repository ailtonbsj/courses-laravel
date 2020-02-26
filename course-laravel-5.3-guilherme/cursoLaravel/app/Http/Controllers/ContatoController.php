<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index($id = 0) {
        return "Index do ContatoController de id = $id";
    }

    public function criar(Request $req) {
        dd($req->all());
        return "Criar do ContatoController";
    }

    public function editar() {
        return "Editar do ContatoController";
    }
}
