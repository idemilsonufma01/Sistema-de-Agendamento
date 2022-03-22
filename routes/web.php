<?php

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

//
Route::get('/', [\App\Http\Controllers\HomeController::class,'principal'])->name('home.index');
Route::get('/login', [\App\Http\Controllers\LoginAdminController::class,'login'])->name('admin.login');
Route::get('/evento', [\App\Http\Controllers\EventoController::class,'evento'])->name('home.evento');
Route::get('/dados_evento', [\App\Http\Controllers\DadosEventoController::class,'dados_evento'])->name('user.dados_evento');
Route::post('/dados_evento', [\App\Http\Controllers\DadosEventoController::class,'dados_evento'])->name('user.dados_evento');
Route::get('/registro_presenca', [\App\Http\Controllers\RegistroPresencaController::class,'registro_presenca'])->name('home.registro_presenca');

Route::prefix('/admin')->group(function(){
    Route::get('/relatorio_evento', [\App\Http\Controllers\RelatorioEventoController::class,'relatorio_evento'])->name('admin.relatorio_evento');
    Route::get('/relatorio_presenca', [\App\Http\Controllers\RelatorioPresencaController::class,'relatorio_presenca'])->name('admin.relatorio_presenca');
    Route::get('/homologacao', [\App\Http\Controllers\HomologacaoController::class,'homologacao'])->name('admin.homologacao');
});
