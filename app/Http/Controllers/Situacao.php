<?php

namespace App\Http\Controllers;

use App\Models\Situacao as ModelsSituacao;
use Illuminate\Http\Request;

class Situacao extends Controller
{
    
    public function index()
    {
        $situacao = ModelsSituacao::all();
        return view('pages.situacao.tabela_situacao', compact('situacao'));
    }

    public function create()
    {
        return view('pages.situacao.adicionar_situacao');
    }

    public function store(Request $request)
    {
        $itens = $request->all();
        ModelsSituacao::create($itens);
        return redirect('/situacao/listar_situacao');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $situacao = ModelsSituacao::find($id);
        return view('pages.situacao.editar_situacao',compact('situacao'));
    }

    
    public function update(Request $request, $id)
    {
        $queryId = ModelsSituacao::find($id);
        $queryId->update($request->all());

        return redirect("/situacao/listar_situacao");
    }

    public function destroy($id)
    {
        $queryId = ModelsSituacao::find($id);
        $queryId->delete($id);

        return redirect("/situacao/listar_situacao");
    }

}
