<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesquisaClienteController extends Controller
{
    public function pesquisacliente() {
        return view('app.pesquisacliente');
     }
}
