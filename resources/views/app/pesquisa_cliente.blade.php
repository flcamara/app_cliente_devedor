
{{-- Permitindo que app/_componets/cabecalho_e_rodape.blade.php possa usar meu template --}}
@extends('app.layouts._components.cabecalho_e_rodape')

@section('counteudo')

<div class="container mt-5 text-center">
    <h2>Pesquisa de clientes devedores</h2>
    <form action="{{ route('pesquisa.cdv') }}" class="row g-3 justify-content-center mt-1" method="GET">

        <div class="col-md-5">
            <label for="pesquisaClienteDevedor" class="visually-hidden"></label>
            <input type="search" class="form-control" name="pesquisaClienteDevedor" id="pesquisaClienteDevedor" placeholder="Busque por nome, CPF, CNPJ ou contrato">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Pesquisar</button>
        </div>
    </form>
</div>

{{ $consulta }}

@endsection
