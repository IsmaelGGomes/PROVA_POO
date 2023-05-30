@extends('components.formulario')

@section('nome_form','Adicionar Chamado')

@section('form')
<form action="" method="post" class="">
    <div class="form-group">
        <label for="">Título</label>
        <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Insira o titulo">
    </div>
    <div class="form-group">
        <label for="">Setor</label>
        <select class="form-select" aria-label="Default select example">
            <option selected disabled >Selecione o setor</option>
            @foreach($filter as $items)
                <option name="setor" value="{{$items}}">{{$items}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Prazo término</label>
        <input type="date" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-floating mt-2">
        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
        <label for="floatingTextarea">Descreva seu chamado</label>
    </div>
    <button type="submit" class="btn btn-primary mt-4">Enviar</button>
    <a href="/chamado/listar_chamado" class="btn btn-secondary mt-4">Voltar</a>
</form>
@endsection