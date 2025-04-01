<?php

use App\Http\Controllers\registroController;
use App\Http\Controllers\viewController;
use App\Http\Controllers\registroEmocionController;
use App\Http\Controllers\usuarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Logueo
Route::get('login', [viewController::class, 'loginView']) -> name('logueo');
Route::get('/formularioregistro', [registroController::class, 'formularioregistro'])->name('formularioregistro');
Route::post('/registrar', [usuarioController::class, 'store'])->name('guardaregistro');
Route::post('/guardaregistro', [registroController::class, 'guardaregistro'])->name('guardaregistro');
Route::get('/formulariologin', [registroController::class, 'formulariologin'])->name('formulariologin');
Route::post('/guardalogin', [registroController::class, 'guardalogin'])->name('guardalogin');

// Principales


Route::get('homepage', [viewController::class, 'homepageView'])->name('hpView');

Route::get('mostrarCalendario', [registroEmocionController::class, 'mostrarCalendario'])->name('mostrarCalendario');

Route::get('calendar', [viewController::class, 'calendarView'])->name('calendario');
Route::get('diario', [viewController::class, 'diarioView'])->name('diario');
Route::get('calmaestres', [viewController::class, 'calmaEstresView'])->name('calmaestres');
Route::get('ejercicios', [viewController::class, 'ejerciciosView'])->name('ejercicios');

Route::post('/registrarEmocion', [registroEmocionController::class, 'registrarEmocion'])->name('registrarEmocion');

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