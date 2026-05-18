<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\auth\LoginController;

// Route::get('/welcome', function () {
//     return view('welcome');
// });

Route::get('/', [SiteController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
// Route::get('/login', function () {
//     return view('auth.login');
// });

// Route::post('/login', function () {
//     // Lógica de autenticação aqui
//     return redirect('/');
// });


//MVC
//Model - Banco de Dados
//View - Interface
//Controller - Lógica de Negócio