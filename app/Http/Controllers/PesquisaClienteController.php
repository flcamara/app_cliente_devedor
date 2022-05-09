<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AppCliente;

class PesquisaClienteController extends Controller
{
    /**
     * Com base na requisição feita, pesquisa no banco de dados o cliente correspondente.
     *
     * @param Request $request
     * @return view A view da pesquisa do cliente e os dados da pesquisa
     */
    public function pesquisarCliente(Request $request)
    {
        $consulta = "";

        // Entra se houver requisição. Se a consulta for feita, a solicitação não vai estar vazia
        if (count($request->all()) != 0) {
            $pesquisa = $request->all()['pesquisaClienteDevedor'];

            $consulta = AppCliente::where('nome', $pesquisa)
                                    ->orWhere('cpf', $pesquisa)
                                    ->orWhere('cnpj', $pesquisa)->get();

            // dd($consulta);
        }

        return view('app.pesquisa_cliente', ['consulta' => $consulta]);
    }
}
