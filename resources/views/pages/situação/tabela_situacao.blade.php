@extends('components.tabela')

@section('titulo_tabela','Listagem Situações')

@section('adicionar_novo')
<a href="/situacao/adicionar_situacao" class="btn btn-primary"><span class="bi-plus-square-fill"></span>Adicionar novo</a>
@endsection

@section('item_header')
    <th>ID</th>
    <th>Descrição</th>
@endsection

@section('item_body')
    <td>INSERIR FOREACH</td>
    <td>
        <button type="button" class="btn btn-danger"><span class="bi-trash"></span>Delete</button>
        <button type="button" class="btn btn-info"><span class="bi bi-pencil-square"></span>Editar</button>
    </td>
@endsection