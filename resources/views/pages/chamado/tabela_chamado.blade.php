@extends('components.tabela')

@section('titulo_tabela','Listagem Chamados')

@section('adicionar_novo')
<a href="/chamado/adicionar_chamado" style="height: 40px;" class="btn btn-primary"><span class="bi-plus-square-fill"></span>  Adicionar novo</a>
@endsection

@section('item_header')
    <th>Id</th>
    <th>Título</th>
    <th>Setor</th>
    <th>Situação</th>
    <th>Descrição</th>
    <th>Previsão término</th>
    <th style="width: 13em">Opções</th>
@endsection

@section('item_body')

    @forelse($data as $items)
        <tr>
            <td>{{$items->id}}</td>
            <td>{{$items->titulo}}</td>
            <td>{{$items->setor->setor}}</td>
            <td>{{$items->situacao->descricao}}</td>
            <td>{{$items->descricao}}</td>
            <td>{{$items->prazo_termino}}</td>
            <td class="d-flex gap-2 flex-row justify-content-center">
                <form action="/chamado/deletar_chamado/{{$items->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"><span class="bi-trash"></span>Delete</button>                
                </form>
                <a href="/chamado/editar_chamado/{{$items->id}}" class="btn btn-info"><span class="bi bi-pencil-square"></span>Editar</a>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="7" style="width: 100%" class="text-center">Nenhum registro cadastrado !</td>
        </tr>
    @endforelse
@endsection