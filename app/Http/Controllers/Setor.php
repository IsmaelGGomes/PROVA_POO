<?php

namespace App\Http\Controllers;

use App\Models\Setor as ModelsSetor;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Unique;

class Setor extends Controller
{
    
    public function index()
    {   
        $setores = ModelsSetor::all();
        return view('pages.setor.tabela_setor', compact('setores'));
    }

    public function create()
    {
        return view('pages.setor.adicionar_setor');
    }

    public function store(Request $request)
    {
        $data = $request->validate(
            [
            'setor' => 'required|unique:setors',
            'descricao' => 'nullable|string'
            ],
            [
            'setor.unique' => 'Setor já cadastrado !',
            ]
        );
        ModelsSetor::create($data);
        
        return redirect('/setor/listar_setor');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $setores = ModelsSetor::find($id);
        return view('pages.setor.editar_setor',compact('setores'));
    }

    
    public function update(Request $request, $id)
    {
        $queryId = ModelsSetor::find($id);
        $queryId->update($request->all());

        return redirect("/setor/listar_setor");
    }

    public function destroy($id)
    {
        $queryId = ModelsSetor::find($id);
        $queryId->delete($id);

        return redirect("/setor/listar_setor");
    }

}
