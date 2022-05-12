
{{-- Permitindo que app/_componets/cabecalho_e_rodape.blade.php possa usar meu template --}}
@extends('app.layouts._components.cabecalho_e_rodape')
@extends('app.layouts._components.head_login')


@section('titulo', 'Home')

@section('counteudo')

@include('app.layouts._partials.barra_de_navegacao')  {{-- Inlcuindo barra de navegação --}}

<div class="container px-4 py-5" id="hanging-icons">
      <h2 class="pb-2 border-bottom">Home</h2>
      <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
        <div class="col d-flex align-items-start">
          <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
            <svg class="bi" width="1em" height="1em"><use xlink:href="#person"/></svg>
          </div>
          <div>
            <h2>Clientes</h2>
            <p>Cadastre um novo cliente, ou consulte um já existente.</p>
            <a href="{{ url('/app/cadastra-cliente') }}" class="btn btn-sm btn-primary">
              Cadastrar
            </a>
            <a href="{{ url('/app/pesquisa-cliente') }}">
                <button type="button" class="btn btn-sm btn-info">Pesquisar</button>
            </a>
          </div>
        </div>
        <div class="col d-flex align-items-start">
          <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
            <svg class="bi" width="1em" height="1em"><use xlink:href="#debt"/></svg>
          </div>
          <div>
            <h2>Dívidas</h2>
            <p>Cadastre uma nova divida, ou consulte algum débito já existente</p>
            <a href="{{ url('/app/cadastrar-divida') }}" class="btn btn-sm btn-primary">
              Cadastrar
            </a>
            <a href="{{ url('/app/listar-divida') }}" class="btn btn-sm btn-info">
              Listar
            </a>
            <a href="{{ url('/app/vincular-divida') }}" class="btn btn-sm btn-success">
                Vincular
              </a>
            {{-- <a href="{{ url('/app/vincular-divida') }}">
                <button type="button" class="btn btn-success">Vincular</button>
            </a> --}}
          </div>
        </div>
          <div class="col d-flex align-items-start">
          <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
            <svg class="bi" width="1em" height="1em"><use xlink:href="#admin"/></svg>
          </div>
          <div>
            <h2>Usuários</h2>
            <p>Acesso restrito. Apenas Administradores conseguem acessar</p>

            @if($_SESSION['type'] == 1)
              <a href="{{ url('/app/cadastrar-usuario') }}" class="btn btn-sm btn-primary">
              Acessar
            </a>
            @else
            <a href="{{ url('/app/cadastrar-usuario') }}" class="btn btn-sm btn-primary disabled">
              Acessar
            </a>
            @endif
          </div>
        </div>
      </div>
    </div>

@include('app.layouts._partials.rodape')  {{-- Inlcuindo rodapé --}}

@endsection
