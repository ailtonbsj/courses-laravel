@extends('layout.principal')

@section('conteudo')
<form action="/produtos/adiciona" method="POST">
    @csrf
    <div class="form-group">
        <label for="nome">Nome</label>
        <input class="form-control" type="text" name="nome" id="nome">
    </div>

    <div class="form-group">
        <label for="descricao">Descrição</label>
        <input class="form-control" type="text" name="descricao" id="descricao">
    </div>

    <div class="form-group">
        <label for="valor">Valor</label>
        <input class="form-control" type="text" name="valor" id="valor">
    </div>

    <div class="form-group">
        <label for="quantidade">Quantidade</label>
        <input class="form-control" type="number" name="quantidade" id="quantidade">
    </div>
    <button class="btn btn-primary btn-block" type="submit">Submit</button>
</form>
@endsection
