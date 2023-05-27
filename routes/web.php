<?php

use App\Http\Controllers\Chamado;
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

route::get('/home',[Chamado::class,'index']);
route::get('/adicionar',[Chamado::class,'create']);
route::get('/adicionar_setor',[Chamado::class,'setor']);
