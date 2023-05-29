<?php

namespace App\Http\Controllers;

use App\Models\Chamado as ModelsChamado;
use App\Models\Situacao as MoldesSituacao;
use Illuminate\Http\Request;

class Situacao extends Controller
{
    
    public function index()
    {
        $situacao = MoldesSituacao::all();
        return view('pages.situacao.tabela_situacao', compact('situacao'));
    }

    public function create()
    {
        return view('pages.situacao.adicionar_situacao');
    }

    public function store(Request $request)
    {
        $itens = $request->all();
        MoldesSituacao::create($itens);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $setores = MoldesSituacao::find($id);
        return view('pages.situacao.situacao',compact('situacoes'));
    }

    
    public function update(Request $request, $id)
    {
        $queryId = MoldesSituacao::find($id);
        $queryId->update($request->all());

        return redirect("/situacao/listar_situacao");
    }

    public function destroy($id)
    {
        $queryId = MoldesSituacao::find($id);
        $queryId->delete($id);

        return redirect("/situacao/listar_situacao");
    }

}
