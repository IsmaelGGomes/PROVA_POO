@extends('layout.main')
@section('content')
<div class="row py-5">
    <div class="col-lg-10 mx-auto">
        <h3 class=" mb-4">@yield('titulo_tabela')</h3>
        <div class="card rounded shadow border-0">
            <div class="card-body p-5 bg-white rounded">
                <div class="w-100 d-flex justify-content-end mb-4">
                    @yield('adicionar_novo')
                </div>
                <div class="table-responsive rounded">
                    <table id="" style="width:100%" class="table table-striped table-bordered col-6">
                        <thead>
                            <tr>
                                @yield('item_header')
                            </tr>
                        </thead>
                        <tbody>
                            @yield('item_body')
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection