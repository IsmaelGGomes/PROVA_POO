@extends('layout.main')
@section('content')
<div class="row py-5">
    <div class="col-lg-6 mx-auto">
        <div class="card rounded shadow border-0">

            <div class="card-body p-5 bg-white rounded">
                <h3 class="mb-4">Adicionar chamado</h3>
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
                        <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="">Prazo término</label>
                        <input type="date" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection