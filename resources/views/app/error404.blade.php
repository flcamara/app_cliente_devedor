{{-- Permitindo que app/_componets/cabecalho_e_rodape.blade.php possa usar meu template --}}
@extends('app.layouts._components.cabecalho_e_rodape')

@section('titulo', 'Página não encontrada')

@section('counteudo')

<div class="container regua">
    <div class="row">
        <div class="col-md-12">
            <h1>Oops!</h1>
            <h2>Erro 404</h2>
            <p>Desculpe, endereço inválido, Página não encontrada!</p>
            <a href="{{ url('app/clientes-cadastro') }}" class="btn btn-primary btn-sm">
                Início</a>
        </div>
    </div>
</div>

@endsection


