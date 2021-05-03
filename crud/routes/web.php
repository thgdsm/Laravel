<?php

use App\Http\Controllers\PessoasController;
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

//Route::get('/', function () {
//    return view('welcome');});
Route::get('/pessoa/cadastro',[PessoasCrontroller::class,'create']);
Route::post('/pessoa/cadastro',[PessoasController::class,'store'])->name('salvar_pessoa');
Route::get('/pessoa/ver',[PessoasController::class,'show']);