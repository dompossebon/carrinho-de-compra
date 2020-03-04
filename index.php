<?php
require_once "functions/product.php";
$pdoConnection = require_once "connection.php";
$products = getProducts($pdoConnection);
?>
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"/>

</head>
<body>
<div class="container">
    <p>
        Meus Produtos Armazenados em Banco de Dados
        <br />Add produtos diretamente no Banco
    </p>
    <p>
        este exemplo trata-se apenas de armazenar em $_SESSION
    </p>
    <div class="row">
        <?php foreach ($products as $product) : ?>
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo utf8_encode($product['nome']) ?></h4>
                        <h6 class="card-subtitle mb-2 text-muted">
                            R$<?php echo number_format($product['preco'], 2, ',', '.') ?>
                        </h6>

                        <a class="btn btn-primary" href="carrinho.php?acao=add&id=<?php echo $product['id'] ?>"
                           class="card-link">Comprar</a>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>
    </div>
</div>

</body>
</html>