<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.dashboard');
});

Route::get('/planos', [App\Http\Controllers\BlueprintController::class, 'getBlueprint'])->name('planos');

Route::post('/planos', [App\Http\Controllers\BlueprintController::class, 'createBlueprint'])->name('createBlueprint');

