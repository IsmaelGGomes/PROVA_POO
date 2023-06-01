<?php

namespace App\Http\Controllers;

use App\Models\Chamado as ModelsChamado;
use App\Models\Setor;
use App\Models\Situacao;
use Illuminate\Http\Request;

class Chamado extends Controller
{
    
    public function index()
    {
        $data = ModelsChamado::all();
        return view('pages.chamado.tabela_chamado', compact('data'));
    }

    public function create()
    {
        $filter = Setor::all();
        return view('pages.chamado.adicionar_chamado', compact('filter'));
    }

    public function store(Request $request)
    {
        $filterSituacao = Situacao::where('primario',1)->value('id');
        $itens = $request->all();
        $itens['situacaos_id'] = $filterSituacao;
        
        ModelsChamado::create($itens);
        
        return redirect('/chamado/listar_chamado');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $chamados = ModelsChamado::find($id);
       /*  $setores = Setor::pluck('setor');
        foreach ($setores as $key => $value) {
            if ($value['setor'] == $chamados['setor'].value('setor')) {
                unset($setores[$key]);
            };
        } */
        
        /* $resultadoFiltro = $setores->map(function ($item, $key) {
            if ( $item->setor == $chamados) {
                # code...
            }
           ;
        });  */
        /* $setores = Setor::distinct()->pluck('setor'); */
        $setores = Setor::select('id', 'setor')->distinct()->pluck('setor', 'id');
        
        return view('pages.chamado.editar_chamado',compact('chamados', 'setores'));
    }

    
    public function update(Request $request, $id)
    {
        $queryId = ModelsChamado::find($id);
        $queryId->update($request->all());

        return redirect("/chamado/listar_chamado");
    }

    public function destroy($id)
    {
        $queryId = ModelsChamado::find($id);
        $queryId->delete($id);

        return redirect("/chamado/listar_chamado");
    }
}
