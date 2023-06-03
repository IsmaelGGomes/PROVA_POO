@extends('components.tabela')

@section('titulo_tabela','Listagem Setores')

@section('adicionar_novo')
<a href="/setor/adicionar_setor" style="height: 40px;" class="btn btn-primary"><span class="bi-plus-square-fill"></span>  Adicionar novo</a>
@endsection

@section('item_header')
    <th>Id</th>
    <th>Setor</th>
    <th>Descrição</th>
    <th  style="width: 13em">Opções</th>
@endsection

@section('item_body')
    @forelse($setores as $items)
    <tr>
        <td>{{$items->id}}</td>
        <td>{{$items->setor}}</td>
        <td>{{$items->descricao}}</td>
        <td class="d-flex flex-row justify-content-center">
            <form action="/setor/deletar_setor/{{$items->id}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><span class="bi-trash"></span>Delete</button>                
            </form>
            <a href="/setor/editar_setor/{{$items->id}}" class="btn btn-info"><span class="bi bi-pencil-square"></span>Editar</a>
        </td>
    </tr>
    @empty
    <tr>
        <td colspan="7" style="width: 100%" class="text-center">Nenhum registro cadastrado !</td>
    </tr>
    @endforelse
@endsection