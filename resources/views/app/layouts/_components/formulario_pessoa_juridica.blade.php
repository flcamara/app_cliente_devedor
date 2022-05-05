<div class="container mt-5 text-center">
    <h1>Cadastro de pessoa jurídica</h1>

    <form action="{{ route('app.clientes-cadastro') }}" class="row g-1 justify-content-center" method="POST">
        @csrf

        {{-- Informa o tipo de pessoa (PF=1 ou PJ=2) para o banco de dados --}}
        <input type="hidden" name="tipo_pessoa" value="2">

        <div class="form-floating mb-3 col-md-5 ms-1">
            <input type="text" name="razaoSocial" class="form-control" id="floatingInput" placeholder="Razão social" required>
            <label for="floatingInput">Razão social</label>
        </div>
        <div class="form-floating mb-3 col-md-2 ms-1">
            <input type="text" name="cnpj" class="form-control" id="floatingInput" placeholder="CNPJ" required>
            <label for="floatingInput">CNPJ</label>
        </div>
        <div class="form-floating mb-3 col-md-5 ms-1">
            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="Email" required>
            <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating mb-3 col-md-2 ms-1">
            <input type="text" name="telefone" class="form-control" id="floatingInput" placeholder="Telefone" required>
            <label for="floatingInput">Telefone</label>
        </div>
        <div class="form-floating mb-3 col-md-7 ms-1">
            <input type="text" name="logradouro" class="form-control" id="floatingInput" placeholder="Logradouro" required>
            <label for="floatingInput">Logradouro</label>
        </div>
        <div class="form-floating mb-3 col-md-5 ms-1">
            <input type="text" name="bairro" class="form-control" id="floatingInput" placeholder="Bairro" required>
            <label for="floatingInput">Bairro</label>
        </div>
        <div class="form-floating mb-3 col-md-2 ms-1">
            <input type="text" name="cep" class="form-control" id="floatingInput" placeholder="CEP" required>
            <label for="floatingInput">CEP</label>
        </div>
        <div class="form-floating mb-3 col-md-5 ms-1">
            <input type="text" name="cidade" class="form-control" id="floatingInput" placeholder="Cidade" required>
            <label for="floatingInput">Cidade</label>
        </div>
        <div class="form-floating mb-3 col-md-2 ms-1">
            <input type="text" name="estado" class="form-control" id="floatingInput" placeholder="Estado" required>
            <label for="floatingInput">Estado</label>
        </div>
        <div class="form-floating mb-3 col-md-5 ms-1">
            <input type="text" name="nomeResponsavel" class="form-control" id="floatingInput" placeholder="Nome responsável" required>
            <label for="floatingInput">Nome responsável</label>
        </div>
        <div class="form-floating mb-3 col-md-2 ms-1">
            <input type="text" name="telefoneResponsavel" class="form-control" id="floatingInput" placeholder="Telefone responsável" required>
            <label for="floatingInput">Telefone responsável</label>
        </div>

        <div d-flex justify-content-cente>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </form>
</div>
