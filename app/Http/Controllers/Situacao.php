<?php

namespace App\Http\Controllers;

use App\Models\Chamado as ModelsChamado;
use Illuminate\Http\Request;

class Situacao extends Controller
{
    
    public function index()
    {
        return view('pages.situacao.tabela_situacao');
    }

    public function create()
    {
        return view('pages.situacao.adicionar_situacao');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

}
