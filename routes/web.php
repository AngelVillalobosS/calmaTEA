<?php

use App\Http\Controllers\viewController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('homepage', [viewController::class, 'homepageView'])->name('hpView');