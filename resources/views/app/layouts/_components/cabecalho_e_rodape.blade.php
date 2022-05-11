
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente devedor - @yield('titulo')</title>

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    {{-- jQuery--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body class="d-flex flex-column min-vh-100">
    @include('app.layouts._partials.barra_de_navegacao')  {{-- Inlcuindo barra de navegação --}}


    {{-- Informando aonde o conteúdo extendido vai ser colocado --}}
    @yield('counteudo')


    @include('app.layouts._partials.rodape')  {{-- Inlcuindo rodapé --}}

    {{-- Javascript para o Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    {{-- jQuery: Mascaras para CPF, CNPJ, CEP e Telefone --}}
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"/></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#cpf").mask("999.999.999-99");
            $("#cnpj").mask("99.999.999/9999-99");
            $("#telefone_pf").mask("(99) 9 9999-9999");
            $("#telefone_do_pj").mask("(99) 9 9999-9999");
            $("#telefone_responsavel").mask("(99) 9 9999-9999");
            $("#cep_pf").mask("99999-999");
            $("#cep_pj").mask("99999-999");
        });
    </script>
</body>
</html>
