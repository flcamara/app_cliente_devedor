@extends('app.layouts.basico')

@section('cliente')
 
        <div>
            <div>
                <h1>Cadastro de Cliente</h1>
            </div>

            <div>
                <div>
                    <form action={{ route('app.clientes') }} method="post">
                        @csrf
                        <select name="tipo_pessoa">
                            <option value="">Pessoa Fisica ou Juridica ?</option>
                            <option value="1" {{ old('tipo_pessoa') == 1 ? 'selected' : '' }}>Fisica</option>
                            <option value="2" {{ old('tipo_pessoa') == 2 ? 'selected' : '' }}>Juridica</option>
                        </select>
                        <input name="nome_completo" value="{{ old('nome_completo')}}" type="text" placeholder="Nome Completo">
                        <br>
                        <input name="email" value="{{ old('email') }}" type="text" placeholder="E-mail">
                        <br>
                        <input name="telefone" value="{{ old('telefone') }}" type="text" placeholder="telefone">
                        <br>
                        <input name="cpf" value="{{ old('cpf') }}" type="text" placeholder="cpf">
                        <br>
                        <input name="logradouro" value="{{ old('logradouro') }}" type="text" placeholder="lodradouro">
                        <br>
                        <input name="cep" value="{{ old('cep') }}" type="text" placeholder="CEP">
                        <br>
                        <input name="bairro" value="{{ old('bairro') }}" type="text" placeholder="Bairro">
                        <br>
                        <input name="estado" value="{{ old('estado') }}" type="text" placeholder="Estado">
                        <br>
                        <input name="razaoSocial" value="{{ old('razaoSocial') }}" type="text" placeholder="Razão Social">
                        <br>
                        <input name="cnpj" value="{{ old('cnpj') }}" type="text" placeholder="CNPJ">
                        <br>
                        <input name="nomeResponsavel" value="{{ old('nomeResponsavel') }}" type="text" placeholder="Nome Responsavel">
                        <br>
                        <input name="telefoneResponsavel" value="{{ old('telefoneResponsavel') }}" type="text" placeholder="Telefone Responsavel">
                        <br>
                        <br>
                        <button type="submit">ENVIAR</button>
                    </form>
                </div>
            </div>  
        </div>


@endsection