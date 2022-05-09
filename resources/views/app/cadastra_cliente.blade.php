
{{-- Permitindo que app/_componets/cabecalho_e_rodape.blade.php possa usar meu template --}}
@extends('app.layouts._components.cabecalho_e_rodape')

{{-- Passando um valor ('titulo' = 'Cadastrar cliente') para a mesma view --}}
@section('titulo', 'Cadastrar cliente')
@section('counteudo')


{{-- Botões (Início) --}}
<ul class="nav nav-pills mb-3 col-3 mx-auto" id="pills-tab" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link active btn-lg" id="pills-home-tab" data-bs-toggle="pill"
            data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
            aria-selected="true">Pessoa física</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link btn-lg" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
            type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Pessoa jurídica</button>
    </li>
</ul>
<div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        @include('app.layouts._components.formulario_pessoa_fisica')
    </div>
    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
        @include('app.layouts._components.formulario_pessoa_juridica')
    </div>
</div>
{{-- Botões (Fim) --}}
@endsection


{{-- <div>
    <div>
        <h1>Cadastro de Cliente</h1>
    </div>

    <div>
        <div>
            <form action={{ route('app.clientes-cadastro') }} method="post">
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
</div> --}}

