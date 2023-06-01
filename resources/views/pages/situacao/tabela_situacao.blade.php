@extends('components.tabela')

@section('titulo_tabela','Listagem Situações')

@section('adicionar_novo')
<a href="/situacao/adicionar_situacao" class="btn btn-primary"><span class="bi-plus-square-fill"></span>Adicionar novo</a>
@endsection

@section('item_header')
    <th>Id</th>
    <th>Descrição</th>
    <th>É primário ?</th>
@endsection

@section('item_body')
    @foreach($situacao as $items)
    <tr>
        <td>{{$items->id}}</td>
        <td>{{$items->descricao}}</td>
        <td> 
            @if($items->primario == 1)
                <svg xmlns="http://www.w3.org/2000/svg"  color="green" width="28" height="28" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                </svg>
            @else
                <svg xmlns="http://www.w3.org/2000/svg"  color="red" width="24" height="24" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
              </svg>
            @endif
        </td>
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