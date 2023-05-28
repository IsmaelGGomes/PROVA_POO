<?php

use App\Http\Controllers\Chamado;
use App\Http\Controllers\Situacao;
use App\Http\Controllers\Setor;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

/* CRUD CHAMADO */
route::get('/chamado/listar_chamado',[Chamado::class,'index']);
route::get('/chamado/adicionar_chamado',[Chamado::class,'create']);

/* CRUD SETOR */
route::get('/setor/listar_setor',[Setor::class,'index']);
route::get('/setor/adicionar_setor',[Setor::class,'create']);
route::post('/setor/adicionar_setor',[Setor::class,'store']);
route::get('/setor/editar_setor/{id}',[Setor::class,'edit']);
route::put('/setor/editar_setor/{id}',[Setor::class,'update']);
route::delete('/setor/editar_setor/{id}',[Setor::class,'destroy']);

/* CRUD SITUACAO */
route::get('/adicionar_setor',[Situacao::class,'setor']);