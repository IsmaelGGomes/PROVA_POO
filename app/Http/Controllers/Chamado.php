<?php

namespace App\Http\Controllers;

use App\Models\Chamado as ModelsChamado;
use App\Models\Setor;
use Illuminate\Http\Request;

class Chamado extends Controller
{
    
    public function index()
    {
        return view('pages.chamado.tabela_chamado');
    }

    public function create()
    {
        $filter = Setor::pluck('setor')->unique();
        return view('pages.chamado.adicionar_chamado', compact('filter'));
    }

    public function store(Request $request)
    {
        $itens = $request->all();
        $situacao = 'Pendente';
        /* ModelsChamado::create(array_merge($this->data, [
            'situacao' => $situacao
        ])); */
        $itens['situacao'] = $situacao;
        
        ModelsChamado::create($itens);
        
        return redirect('/chamado/listar_chamado');
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
