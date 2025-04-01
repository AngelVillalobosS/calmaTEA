<?php

use App\Http\Controllers\registroController;
use App\Http\Controllers\viewController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Logueo
Route::get('login', [viewController::class, 'loginView']) -> name('logueo');

// Principales
Route::get('/formularioregistro', [registroController::class, 'formularioregistro'])->name('formularioregistro');
Route::post('/guardaregistro', [registroController::class, 'guardaregistro'])->name('guardaregistro');
Route::get('/formulariologin', [registroController::class, 'formulariologin'])->name('formulariologin');
Route::post('/guardalogin', [registroController::class, 'guardalogin'])->name('guardalogin');

Route::get('homepage', [viewController::class, 'homepageView'])->name('hpView');

Route::get('calendar', [viewController::class, 'calendarView'])->name('calendario');
Route::get('diario', [viewController::class, 'diarioView'])->name('diario');
Route::get('calmaestres', [viewController::class, 'calmaEstresView'])->name('calmaestres');
Route::get('ejercicios', [viewController::class, 'ejerciciosView'])->name('ejercicios');

//Route::get('formularioregistro', [viewController::class, 'formularioregistro'])->name('formularioregistro');
Route::post('guardaregistro', [viewController::class, 'guardaregistro'])->name('guardaregistro');
//Route::get('formulariologin', [viewController::class, 'formulariologin'])->name('formulariologin');
Route::post('guardalogin', [viewController::class, 'guardalogin'])->name('guardalogin');

// Emociones
Route::get('/emocion/{emocion}', [viewController::class, 'mostrarEmocion'])->name('emocion');

Route::get('selecEmociones', [viewController::class, 'selecEmocionesView'])->name('selecEmociones');
Route::get('emociones/selecNervioso', [viewController::class, 'selecNerviosoView'])->name('selecNervioso');
Route::get('emociones/selecAburrido', [viewController::class, 'selecAburridoView'])->name('selecAburrido');
Route::get('emociones/selecTravieso', [viewController::class, 'selecTraviesoView'])->name('selecTravieso');
Route::get('emociones/selecContento', [viewController::class, 'selecContentoView'])->name('selecContento');
Route::get('emociones/selecMiedoso', [viewController::class, 'selecMiedosoView'])->name('selecMiedoso');
Route::get('emociones/selecTriste', [viewController::class, 'selecTristeView'])->name('selecTriste');
Route::get('emociones/selecShokeado', [viewController::class, 'selecShokeadoView'])->name('selecShokeado');
Route::get('emociones/selecAmado', [viewController::class, 'selecAmadoView'])->name('selecAmado');
Route::get('emociones/selecEnojado', [viewController::class, 'selecEnojadoView'])->name('selecEnojado');