@extends('layout.principal')

@section('conteudo')

    <h1>Novo produto</h1>

    <form action="/produtos/adiciona" method="post">

        <input type="hidden" name="_token" value=" {{ csrf_token() }} " />

        <div class="form-group">
            <label>Nome</label>
            <input name="nome" class="form-control" type="text"/>
        </div>
        <div class="form-group">
            <label>Valor</label>
            <input name="valor" class="form-control" type="number"/>
        </div>
        <div class="form-group">
            <label>Quantidade</label>
            <input type="number" name="quantidade" class="form-control"/>
        </div>
        <div class="form-group">
            <label>Dimensões</label>
            <input type="text" name="tamanho" class="form-control"/>
        </div>
        <div class="form-group">
            <label>Descrição</label>
            <textarea name="descricao" class="form-control" type="text"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Adiciona</button>
    </form>

@stop