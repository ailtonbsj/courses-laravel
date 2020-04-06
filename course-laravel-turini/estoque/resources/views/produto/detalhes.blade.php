@extends('layout.principal')

@section('conteudo')

<h1>Detalhes do produto: <?= $p->nome ?></h1>
<ul>
    <li>Id: {{ $p->id }}</li>
    <li>Valor: {{ $p->valor }}</li>
    <li>Descrição: {{ $p->descricao }}</li>
    <li>Quantidade: {{ $p->quantidade }}</li>
</ul>

@endsection
