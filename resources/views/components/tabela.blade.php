@extends('layout.main')
@section('content')
<div class="row py-5">
    <div class="col-lg-10 mx-auto d-flex align-items-center justify-content-center">
        
        <div style="width: auto; justify-content: center"  class="rounded shadow border-0">
            <div class="p-5 bg-white rounded">
                <div class="d-flex justify-content-between mb-4">
                    <h3 class=" mb-4">@yield('titulo_tabela')</h3>
                    @yield('adicionar_novo')
                </div>
                    <table id="" style="width:auto" class="table table-striped table-bordered">
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
@endsection