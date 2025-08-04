<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\FacturaController;

Route::get('/', function () {
    return view('factura');
});

Route::get('/factura', [FacturaController::class, 'index']);
Route::post('/factura', [FacturaController::class, 'calcular']);

