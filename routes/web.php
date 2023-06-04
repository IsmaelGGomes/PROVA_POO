<?php

use App\Http\Controllers\Chamado;
use App\Http\Controllers\Situacao;
use App\Http\Controllers\Setor;
use Illuminate\Support\Facades\Route;
use App\Models\Chamado as ModelsChamado;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data = ModelsChamado::all();
    return view('pages.chamado.tabela_chamado', compact('data'));
});

/* CRUD CHAMADO */
route::get('/chamado/listar_chamado',[Chamado::class,'index']);
route::get('/chamado/adicionar_chamado',[Chamado::class,'create']);
route::post('/chamado/adicionar_chamado',[Chamado::class,'store']);
route::get('/chamado/editar_chamado/{id}',[Chamado::class,'edit']);
route::put('/chamado/editar_chamado/{id}',[Chamado::class,'update']);
route::delete('/chamado/deletar_chamado/{id}',[Chamado::class,'destroy']);

/* CRUD SETOR */
route::get('/setor/listar_setor',[Setor::class,'index']);
route::get('/setor/adicionar_setor',[Setor::class,'create']);
route::post('/setor/adicionar_setor',[Setor::class,'store']);
route::get('/setor/editar_setor/{id}',[Setor::class,'edit']);
route::put('/setor/editar_setor/{id}',[Setor::class,'update']);
route::delete('/setor/deletar_setor/{id}',[Setor::class,'destroy']);

/* CRUD SITUACAO */
route::get('/situacao/listar_situacao',[Situacao::class,'index']);
route::get('/situacao/adicionar_situacao',[Situacao::class,'create']);
route::post('/situacao/adicionar_situacao',[Situacao::class,'store']);
route::get('/situacao/editar_situacao/{id}',[Situacao::class,'edit']);
route::put('/situacao/editar_situacao/{id}',[Situacao::class,'update']);
route::delete('/situacao/deletar_situacao/{id}',[Situacao::class,'destroy']);