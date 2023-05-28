@extends('layout.main')
@section('content')
<div class="row py-5">
    <div class="col-lg-6 mx-auto">
        <div class="card rounded shadow border-0">

            <div class="card-body p-5 bg-white rounded">
                <h3 class="mb-4">@yield('nome_form')</h3>
                @yield('form')
            </div>
        </div>
    </div>
</div>
@endsection