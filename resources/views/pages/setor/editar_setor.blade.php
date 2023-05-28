@extends('components.formulario')
@section('nome_form', 'Editar Setor')
@section('form')
<form action="/setor/editar_setor/{{$setores->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="">Setor</label>
        <input type="text" name="setor" value="{{$setores->setor}}" class="form-control" aria-describedby="emailHelp" placeholder="Insira um setor">
    </div>
    <div class="form-group">
        <label for="">Descrição</label>
        <input type="text" name="descricao" value="{{$setores->descricao}}" class="form-control" aria-describedby="emailHelp" placeholder="Descreva sobre o setor">
    </div>
    <button type="submit" class="btn btn-primary mt-4">Enviar</button>
    <a href="/setor/listar_setor" class="btn btn-secondary mt-4">Voltar</a>
</form>
@endsection