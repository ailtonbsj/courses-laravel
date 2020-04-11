@extends('layout.principal')

@section('conteudo')

<h1>Novo Produto</h1>

@if (count($errors) > 0)
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ $action ?? '/produtos/adiciona' }}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $p->id ?? old('id') }}">
    <div class="form-group">
        <label for="nome">Nome</label>
        <input class="form-control" type="text" name="nome" id="nome" value="{{ $p->nome ?? old('nome') }}">
    </div>

    <div class="form-group">
        <label for="descricao">Descrição</label>
        <input class="form-control" type="text" name="descricao" id="descricao" value="{{ $p->descricao ?? old('descricao') }}">
    </div>

    <div class="form-group">
        <label for="valor">Valor</label>
        <input class="form-control" type="text" name="valor" id="valor" value="{{ $p->valor ?? old('valor') }}">
    </div>

    <div class="form-group">
        <label for="quantidade">Quantidade</label>
        <input class="form-control" type="number" name="quantidade" id="quantidade" value="{{ $p->quantidade ?? old('quantidade') }}">
    </div>
    <button class="btn btn-primary btn-block" type="submit">Submit</button>
</form>
@endsection
