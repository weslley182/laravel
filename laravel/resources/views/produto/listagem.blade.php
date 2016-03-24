@extends('layout.principal')

@section('conteudo')

<div class="container">
    <h1>Listagem de produtos</h1>

    @if(empty($produtos))

        <div>Você não tem nenhum produto cadastrado.</div>

    @else

    <table class="table table-striped table-bordered table-hover">
        <tr>
            <th>Nome</th>
            <th>Valor</th>
            <th>Descricao</th>
            <th>Quantidade</th>
            <th>Detalhes</th>
        </tr>
        @foreach ($produtos as $p)
        <tr class="{{$p->quantidade <= 1 ? 'danger' : '' }}">
            <td>{{ $p->nome }}</td>
            <td>{{ $p->valor  }}</td>
            <td>{{ $p->descricao  }}</td>
            <td>{{ $p->quantidade  }}</td>
            <td>
                <a href="/produtos/mostra/{{ $p->id  }}">
                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                </a>
            </td>
        </tr>
        @endforeach
    </table>
</div>

    @endif
@stop