<?php

namespace App\Http\Controllers;

use App\Models\Chamado as ModelsChamado;
use Illuminate\Http\Request;

class Chamado extends Controller
{
    
    public function index()
    {
        return view('pages.chamado.tabela_chamado');
    }

    public function create()
    {
        return view('pages.chamado.adicionar_chamado');
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
