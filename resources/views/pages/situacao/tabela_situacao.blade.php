@extends('components.tabela')

@section('titulo_tabela','Listagem Situações')

@section('adicionar_novo')
<a href="/situacao/adicionar_situacao" class="btn btn-primary"><span class="bi-plus-square-fill"></span>Adicionar novo</a>
@endsection

@section('item_header')
    <th>Id</th>
    <th>Descrição</th>
@endsection

@section('item_body')
    @foreach($situacao as $items)
    <tr>
        <td>{{$items->id}}</td>
        <td>{{$items->descricao}}</td>
        <td class="d-flex flex-row">
            <form action="/situacao/deletar_situacao/{{$items->id}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><span class="bi-trash"></span>Delete</button>                
            </form>
            <a href="/situacao/editar_situacao/{{$items->id}}" class="btn btn-info"><span class="bi bi-pencil-square"></span>Editar</a>
        </td>
    </tr>
    @endforeach
@endsection