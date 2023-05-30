@extends('components.formulario')
@section('nome_form', 'Adicionar Situação')
@section('form')
<form action="/situacao/adicionar_situacao" method="post">
    @csrf
    <div class="form-group">
        <label for="">Descrição da situação</label>
        <input type="text" name="descricao" class="form-control" id="" aria-describedby="emailHelp" placeholder="Descrição">
    </div>
    <button type="submit" class="btn btn-primary mt-4">Enviar</button>
    <a href="/situacao/listar_situacao" class="btn btn-secondary mt-4">Voltar</a>
</form>
@endsection