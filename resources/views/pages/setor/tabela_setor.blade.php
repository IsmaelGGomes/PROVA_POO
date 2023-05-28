@extends('components.tabela')

@section('titulo_tabela','Listagem Setores')

@section('adicionar_novo')
<a href="/setor/adicionar_setor" class="btn btn-primary"><span class="bi-plus-square-fill"></span>Adicionar novo</a>
@endsection

@section('item_header')
    <th>Id</th>
    <th>Setor</th>
    <th>Descrição</th>
    <th>Opções</th>
@endsection

@section('item_body')
    @foreach($setores as $items)
    <tr>
        <td>{{$items->id}}</td>
        <td>{{$items->setor}}</td>
        <td>{{$items->descricao}}</td>
        <td class="d-flex flex-row">
            <form action="/setor/editar_setor/{{$items->id}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><span class="bi-trash"></span>Delete</button>                
            </form>
            <a href="/setor/editar_setor/{{$items->id}}" class="btn btn-info"><span class="bi bi-pencil-square"></span>Editar</a>
        </td>
    </tr>
    @endforeach
@endsection