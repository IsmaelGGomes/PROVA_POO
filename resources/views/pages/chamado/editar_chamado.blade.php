@extends('components.formulario')
@section('nome_form', 'Editar Chamado')
@section('form')
<form action="/chamado/editar_chamado/{{$chamados->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="">Título</label>
        <input type="text" value="{{$chamados->titulo}}" name="titulo" class="form-control" aria-describedby="emailHelp" placeholder="Insira o titulo">
    </div>
    <div class="form-group">
        <label for="">Setor</label>
        <select name="setors_id" class="form-select" aria-label="Default select example">
            <option disabled >Selecione o setor</option>
            @foreach($setores as $indice => $item)
                <option 
                    @if ($chamados->setor->setor == $item)
                        selected
                    @endif
                    value="{{$indice}}"
                >
                    {{$item}}
                </option>
            @endforeach   
        </select>
    </div>
    <div class="form-group">
        <label for="">Situação</label>
        <select name="situacaos_id" class="form-select" aria-label="Default select example">
            <option disabled>Selecione a situação</option>
            @foreach($situacaos as $indice => $item)
                <option 
                    @if ($chamados->situacao->descricao == $item)
                        selected
                    @endif
                    value="{{$indice}}"
                >
                    {{$item}}
                </option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Prazo término</label>
        <input type="date" value="{{$chamados->prazo_termino}}" name="prazo_termino" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-floating mt-2">
        <textarea class="form-control" value="" name="descricao" placeholder="Leave a comment here" id="floatingTextarea">{{$chamados->descricao}}</textarea>
        <label for="floatingTextarea">Descreva seu chamado</label>
    </div>
    <button type="submit" class="btn btn-primary mt-4">Enviar</button>
    <a href="/chamado/listar_chamado" class="btn btn-secondary mt-4">Voltar</a>
</form>
@endsection