@extends('components.formulario')
@section('nome_form', 'Adicionar Situação')
@section('form')
<form action="/situacao/adicionar_situacao" method="post">
    @csrf
    <div class="form-group">
        <label for="">Descrição da situação</label>
        <input type="text" name="descricao" class="form-control" id="" aria-describedby="emailHelp" placeholder="Descrição">
    </div>
    <label class="mt-2" for="">Essa situação é primária ?</label>
    <div class="form-group">
        
        <div class="form-check form-check-inline">
            <input class="form-check-input" name="primario" value="1" type="radio" id="inlineRadio1">
            <label class="form-check-label" for="inlineRadio1">Sim</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" name="primario" value="2" type="radio" id="inlineRadio2">
            <label class="form-check-label" for="inlineRadio2">Não</label>
        </div>
    </div>
    <button type="submit" class="btn btn-primary mt-4">Enviar</button>
    <a href="/situacao/listar_situacao" class="btn btn-secondary mt-4">Voltar</a>
</form>
@endsection