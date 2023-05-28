@extends('layout.main')

@section('nome_form','Editar Chamado')

@section('form')
<form action="" method="post">
    <div class="form-group">
        <label for="">Título</label>
        <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="">Descrição</label>
        <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="">Setor</label>
        <select class="form-select" aria-label="Default select example">
            <option selected>Setor</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
    </div>
    <div class="form-group">
        <label for="">Situação</label>
        <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="">Prazo término</label>
        <input type="date" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <button type="submit" class="btn btn-primary mt-4">Enviar</button>
</form>
@endsection