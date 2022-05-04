<div class="container mt-5 text-center">
    <h1>Cadastro de pessoa física</h1>

    <form action="{{ route('app.clientes-cadastro') }}" class="row g-1 justify-content-center" method="POST">
        @csrf
        <div class="form-floating mb-3 col-md-5 ms-1">
            <input type="text" class="form-control" id="floatingInput" placeholder="Nome" required>
            <label for="floatingInput">Nome</label>
        </div>
        <div class="form-floating mb-3 col-md-3 ms-1">
            <input type="text" class="form-control" id="floatingInput" placeholder="CPF" required>
            <label for="floatingInput">CPF</label>
        </div>
        <div class="form-floating mb-3 col-md-5 ms-1">
            <input type="email" class="form-control" id="floatingInput" placeholder="Email" required>
            <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating mb-3 col-md-3 ms-1">
            <input type="text" class="form-control" id="floatingInput" placeholder="Telefone" required>
            <label for="floatingInput">Telefone</label>
        </div>
        <div class="form-floating mb-3 col-md-4 ms-1">
            <input type="text" class="form-control" id="floatingInput" placeholder="Logradouro" required>
            <label for="floatingInput">Logradouro</label>
        </div>
        <div class="form-floating mb-3 col-md-4 ms-1">
            <input type="text" class="form-control" id="floatingInput" placeholder="Bairro" required>
            <label for="floatingInput">Bairro</label>
        </div>
        <div class="form-floating mb-3 col-md-5 ms-1">
            <input type="text" class="form-control" id="floatingInput" placeholder="Cidade" required>
            <label for="floatingInput">Cidade</label>
        </div>
        <div class="form-floating mb-3 col-md-3 ms-1">
            <input type="text" class="form-control" id="floatingInput" placeholder="CEP" required>
            <label for="floatingInput">CEP</label>
        </div>
        <div class="form-floating mb-3 col-md-8 ms-1">
            <input type="text" class="form-control" id="floatingInput" placeholder="Estado" required>
            <label for="floatingInput">Estado</label>
        </div>

        <div d-flex justify-content-cente>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </form>
</div>
