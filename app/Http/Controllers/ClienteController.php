<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AppCliente;

class ClienteController extends Controller
{
    public function index()
    {
        return view('app.cadastra_cliente');
    }

    public function salvar(Request $request)
    {

        //Validação dos dados recebidos do request
        $request->validate([
            'tipo_pessoa' => 'required',
            'email' => 'required|unique:app_clientes',
            'logradouro' => 'required|max:30',
            'cep' => 'required|max:9',
            'bairro' => 'required|max:50',
            'cidade' => 'required|max:30',
            'estado' => 'required|max:20'
        ]);

        //Função mais enxuta que cria o registro dos dados no banco e redireciona para rota
        AppCliente::create($request->all());
        return redirect()->route('site.index');
    }
}
