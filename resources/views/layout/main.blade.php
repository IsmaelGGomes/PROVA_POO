<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('assets/app.css') }}" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="module" src="{{asset('assets/app.js')}}"></script>
    <script type="module" src="{{asset('assets/bootstrap.js') }}"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <div style="width: 100%; height: 100%; display: flex;" class="" id="wrapper">
        <!-- Sidebar-->
        <div style="width: 16em;" class="border-end bg-white flex h-100" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom bg-light d-flex justify-content-center py-4">Start Bootstrap</div>
            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#">Home</a>
                <button type="button" onclick="chamadoDetalhes()" class="list-group-item list-group-item-action list-group-item-light p-3">Chamados</button>
                <div id="filhochamado" style="padding: 10px;" class="list-group visually-hidden">
                   <a style="padding-left: 16px;" class="text-decoration-none" href="/chamado/listar_chamado">Listagem</a>
                   <a style="padding-left: 16px;" class="mt-4 text-decoration-none" href="/chamado/adicionar_chamado">Adicionar</a>
                </div>
                <button type="button" onclick="setorDetalhes()" class="list-group-item list-group-item-action list-group-item-light p-3">Setores</button>
                <div id="filhosetor" style="padding: 10px;" class="list-group visually-hidden">
                   <a style="padding-left: 16px;" class="text-decoration-none" href="/setor/listar_setor">Listagem</a>
                   <a style="padding-left: 16px;" class="mt-4 text-decoration-none" href="/setor/adicionar_setor">Adicionar</a>
                </div>
                <button type="button" onclick="situacaoDetalhes()" class="list-group-item list-group-item-action list-group-item-light p-3">Situações</button>
                <div id="filhosituacao" style="padding: 10px;" class="list-group visually-hidden">
                   <a style="padding-left: 16px;" class="text-decoration-none" href="/situacao/listar_situacao">Listagem</a>
                   <a style="padding-left: 16px;" class="mt-4 text-decoration-none" href="/situacao/adicionar_situacao">Adicionar</a>
                </div>
            </div>
        </div>
        <!-- Page content wrapper-->
        <div id="" class="w-100">
            <!-- Top navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                            <li class="nav-item active"><a class="nav-link" href="#!">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="#!">Link</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#!">Action</a>
                                    <a class="dropdown-item" href="#!">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#!">Something else here</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Page content-->
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>

<script>
    function chamadoDetalhes() {
        document.getElementById("filhochamado").classList.toggle("visually-hidden");
    }
    function setorDetalhes() {
        document.getElementById("filhosetor").classList.toggle("visually-hidden");
    }
    function situacaoDetalhes() {
        document.getElementById("filhosituacao").classList.toggle("visually-hidden");
    }
</script>