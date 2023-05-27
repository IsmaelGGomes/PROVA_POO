@extends('layout.main')
@section('content')
<div class="row py-5">
    <div class="col-lg-10 mx-auto">
        <div class="card rounded shadow border-0">

            <div class="card-body p-5 bg-white rounded">
                <div class="w-100 d-flex justify-content-end mb-4">
                    <a href="/adicionar" class="btn btn-primary"><span class="bi-plus-square-fill"></span>Adicionar novo </a>
                </div>
                <div class="table-responsive rounded">
                    <table id="" style="width:100%" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Setor</th>
                                <th>Situação</th>
                                <th>Título</th>
                                <th>Descrição</th>
                                <th>Editar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>
                                <button type="button" class="btn btn-danger"><span class="bi-trash"></span>Delete</button>
                                <button type="button" class="btn btn-info"><span class="bi bi-pencil-square"></span>Editar</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>63</td>
                                <td>2011/07/25</td>
                                <td>
                                <button type="button" class="btn btn-danger"><span class="bi-trash"></span>Delete</button>
                                <button type="button" class="btn btn-info"><span class="bi bi-pencil-square"></span>Editar</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection