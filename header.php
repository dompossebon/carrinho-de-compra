<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description"
          content="Um carrinho para usar como teste. Enjoy :)"/>
    <meta name="keywords" content="html5, css3, responsive, Cart Buy"/>
    <meta name="apple-mobile-web-app-title" content="carrinho"/>
    <meta property="og:site_name" content="carrinho"/>
    <meta property="og:type" content="article by Buy"/>
    <meta property="og:locale" content="pt_BR"/>
    <meta property="og:title" content="brincando com código Procedural"/>
    <title>Carrinho de Compras</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">

</head>
<body>

<nav class="site-header sticky-top py-1">
    <div class="container d-flex flex-column flex-md-row justify-content-between">
        <a class="py-2" href="#" aria-label="Product">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor"
                 stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img"
                 viewBox="0 0 24 24" focusable="false"><title>Logo Do Carrinho</title>
                <circle cx="12" cy="12" r="10"/>
                <path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/>
            </svg>
        </a>
        <a class="py-2 d-none d-md-inline-block" href="#">Eletronicos</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Casa/Cozinha</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Infantil</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Livraria</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Ferramentas</a>

        <input type="text" placeholder="Digite o Produto que vc busca">
        <a class="btn btn-primary" class="card-link">Ok</a>

    </div>
</nav>