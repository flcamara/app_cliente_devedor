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

        // Validação dos dados recebidos do request
        $request->validate([
            'tipo_pessoa' => 'required',
            'email' => 'required|unique:app_clientes',
            'logradouro' => 'required|max:30',
            'cep' => 'required|max:9',
            'bairro' => 'required|max:50',
            'cidade' => 'required|max:30',
            'estado' => 'required|max:20'
        ]);

        /*
            Removendo caracteres quem vem das máscaras ('(', ')', '-', ' ', '.', '/') usando expressão regular (REGEX).
            Função preg_replace(regex, valor a ser mudado, string para ser mudada)
                Exemplo de campo regex:
                    /[-() ]/ -> O regex vai procurar caracteres '-', '(', ')' e ' '
        */

        $dados = $request->all();  // Pegando todos os dados do request
        $dados['telefone'] = preg_replace('/[-() ]/', '', $dados['telefone']);
        $dados['cep'] = preg_replace('/[-]/', '', $dados['cep']);

        if ($dados['tipo_pessoa'] == 1) {  // Pessoa física
            $dados['cpf'] = preg_replace('/[.-]/', '', $dados['cpf']);
        } else {  // Pessoa jurídica
            $dados['cnpj'] = preg_replace('/[.\/-]/', '', $dados['cnpj']);
            $dados['telefoneResponsavel'] = preg_replace('/[-() ]/', '', $dados['telefoneResponsavel']);
        }

        // Função mais enxuta que cria o registro dos dados no banco e redireciona para rota da página inicial
        AppCliente::create($dados);
        return redirect()->route('app.paginainicial');
    }
}
