@extends('components.formulario')
@section('nome_form', 'Editar Situação')
@section('form')
<form action="/situacao/editar_situacao/{{$situacao->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="">Descrição da situação</label>
        <input type="text"  name="descricao" value="{{$situacao->descricao}}" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <button type="submit" class="btn btn-primary mt-4">Enviar</button>
    <a href="/situacao/listar_situacao" class="btn btn-secondary mt-4">Voltar</a>
</form>
@endsection