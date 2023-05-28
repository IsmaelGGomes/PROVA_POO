@extends('components.formulario')
@section('nome_form', 'Adicionar Setor')
@section('form')
<form action="/setor/adicionar_setor" method="post">
    @csrf
    <div class="form-group">
        <label for="">Setor</label>
        <input name="setor" type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Insira um setor">
    </div>
    <div class="form-group">
        <label for="">Descrição</label>
        <input name="descricao" type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Descreva sobre o setor">
    </div>
    <button type="submit" class="btn btn-primary mt-4">Enviar</button>
    <a href="/setor/listar_setor" class="btn btn-secondary mt-4">Voltar</a>
</form>
@endsection