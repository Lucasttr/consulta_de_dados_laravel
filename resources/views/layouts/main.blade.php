

<!DOCTYPE html>
<html lang="pt-BR">
{{-- Layout do site --}}
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/cabecalho.css">
  <script src="/js/scripts.js"></script>
  

</head>

<body>
  <div class="cabecalho">
    <div class="dropdown ms-2 me-2">
      <a type="button" class="btn cabecalho-botao" href="/cadastro" >
        CADASTRAR
      </a>
    </div>
    <div class="dropdown ms-2 me-2">
      <a type="button" class="btn cabecalho-botao" href="/clientes">
        CONSULTAR DADOS
      </a>
    </div>
  </div>
  <div class="seta">
    <a href="/">
      <i class='bx bx-arrow-back'></i>
    </a>
  </div>

  @yield('content')

</body>
</html>