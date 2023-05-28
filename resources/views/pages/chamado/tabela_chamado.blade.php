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
    <td>INSERIR FOREACH</td>
    <td>
        <button type="button" class="btn btn-danger"><span class="bi-trash"></span>Delete</button>
        <button type="button" class="btn btn-info"><span class="bi bi-pencil-square"></span>Editar</button>
    </td>
@endsection