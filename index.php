<?php
require_once "functions/product.php";
$pdoConnection = require_once "connection.php";
$products = getProducts($pdoConnection);

include('header.php'); ?>
<div class="container">
    <p>
        Meus Produtos Armazenados em Banco de Dados
        <br/>Add produtos diretamente no Banco
        <br/>Este exemplo trata-se apenas de armazenar em $_SESSION
    </p>
    <p>
       <a href="carrinho.php"> Vizualizar Meu Carrinho </a>
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