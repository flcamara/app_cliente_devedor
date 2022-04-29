<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppCliente extends Model
{
    protected $fillable = ['tipo_pessoa','nome_completo', 'email', 'telefone', 'cpf', 'logradouro', 'cep', 'bairro', 'estado',
    'razaoSocial', 'cnpj', 'nomeResponsavel', 'telefoneResponsavel'];
}
