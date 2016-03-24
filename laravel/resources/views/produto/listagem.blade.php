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
            <th>Dimensões</th>
            <th>Detalhes</th>
            <th>Remover</th>
        </tr>
        @foreach ($produtos as $p)
        <tr class="{{$p->quantidade <= 1 ? 'danger' : '' }}">
            <td>{{ $p->nome }}</td>
            <td>{{ $p->valor  }}</td>
            <td>{{ $p->descricao  }}</td>
            <td>{{ $p->quantidade  }}</td>
            <td>{{ $p->tamanho  }}</td>
            <td>
                <a href="/produtos/mostra/{{ $p->id  }}">
                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                </a>
            </td>
            <td>
                <a href="/produtos/remove/{{ $p->id  }}">
                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                </a>
            </td>
        </tr>
        @endforeach
    </table>

    @endif

</div>


@stop