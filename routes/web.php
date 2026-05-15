<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

// Route::get('/welcome', function () {
//     return view('welcome');
// });

Route::get('/', [SiteController::class, 'index']);

//MVC
//Model - Banco de Dados
//View - Interface
//Controller - Lógica de Negócio
