@extends('components.tabela')

@section('titulo_tabela','Listagem Chamados')

@section('adicionar_novo')
<a href="/chamado/adicionar_chamado" class="btn btn-primary"><span class="bi-plus-square-fill"></span>Adicionar novo</a>
@endsection

@section('item_header')
    <th>Id</th>
    <th>Setor</th>
    <th>Situação</th>
    <th>Título</th>
    <th>Descrição</th>
    <th>Opções</th>
@endsection

@section('item_body')

    @foreach($data as $items)
        <tr>
            <td>{{$items->id}}</td>
            <td>{{$items->setor->setor}}</td>
            <td>{{$items->situacao->descricao}}</td>
            <td>{{$items->titulo}}</td>
            <td>{{$items->descricao}}</td>
            <td class="d-flex flex-row">
                <form action="/chamado/deletar_chamado/{{$items->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"><span class="bi-trash"></span>Delete</button>                
                </form>
                <a href="/chamado/editar_chamado/{{$items->id}}" class="btn btn-info"><span class="bi bi-pencil-square"></span>Editar</a>
            </td>
        </tr>
    @endforeach
@endsection