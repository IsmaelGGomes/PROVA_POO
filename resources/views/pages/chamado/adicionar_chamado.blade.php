@extends('components.formulario')

@section('nome_form','Adicionar Chamado')

@section('form')
<form action="/chamado/adicionar_chamado" method="post">
    @csrf
    <div class="form-group">
        <label for="">Título</label>
        <input type="text" required name="titulo" class="form-control" id="" aria-describedby="emailHelp" placeholder="Insira o titulo">
    </div>
    <div class="form-group">
        <label for="">Setor</label>
        <select required name="setors_id" class="form-select" aria-label="Default select example">
            <option selected disabled >Selecione o setor</option>
            @foreach($filter as $items)
                <option value="{{$items->id}}">{{$items->setor}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Prazo término</label>
        <input type="date" required name="prazo_termino" class="form-control" id="" aria-describedby="emailHelp" placeholder="">
    </div>
    <div class="form-floating mt-2">
        <textarea class="form-control" required name="descricao" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
        <label for="floatingTextarea">Descreva seu chamado</label>
    </div>
    <button type="submit" class="btn btn-primary mt-4">Enviar</button>
    <a href="/chamado/listar_chamado" class="btn btn-secondary mt-4">Voltar</a>
</form>
@endsection