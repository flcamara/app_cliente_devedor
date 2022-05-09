@extends('app.layouts._components.head_login')

@section('titulo', 'Login')

@section('conteudo')
<div class="container mt-3">
<div class="login bg-light">
    <h2>Acesso: </h2>
<form>
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Usuário:</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Você pode acessar com seu username ou e-mail</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Senha:</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>
</div>
@endsection
