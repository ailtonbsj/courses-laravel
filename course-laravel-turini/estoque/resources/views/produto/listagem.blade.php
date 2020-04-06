@extends('layout.principal')

@section('conteudo')

<h1>Lista de produtos</h1>

@if (empty($produtos))
<div class="alert alert-info">Você não tem nenhum produto cadastrado!</div>
@else
<table class="table table-striped table-hover">
    @foreach ($produtos as $p)
    <tr class="{{ $p->quantidade <= 1 ? 'bg-danger' : '' }}">
        <td>{{ $p->id }}</td>
        <td>{{ $p->nome }}</td>
        <td>{{ $p->valor }}</td>
        <td>{{ $p->descricao }}</td>
        <td>{{ $p->quantidade }}</td>
        <td>
            <a href="/produtos/mostra/{{ $p->id }}">
                <span class="glyphicon glyphicon-search"></span>
            </a>
        </td>
    </tr>
    @endforeach
</table>
@endif

<h4>
    <span class="badge badge-danger float-right">
        Um ou menos itens no estoque
    </span>
</h4>

@endsection
