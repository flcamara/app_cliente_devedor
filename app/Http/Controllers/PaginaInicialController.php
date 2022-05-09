<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaInicialController extends Controller
{
    
    public function paginainicial() {
        return view('app.paginainicial');
    }
}
