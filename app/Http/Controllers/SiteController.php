<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    
    //metodo index
    public function index()
    {
        $nome = 'Éverllon';
        $habits = ['ler', 'correr', 'codar', 'estudar'];

        // return view('home', compact('nome'));
        return view('home', [
            'nome' => $nome,
            'habits' => $habits
        ]);
    }
}
