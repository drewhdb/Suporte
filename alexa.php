<?php
    include_once "./verifica_sessao.php";
    include_once "./dao/alexaDao.php";

    if ($_SESSION['logado'] == false) {
        session_destroy();
        header("Location: index.php");
    }

    $clientes = getClientes();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Alexa</title>
    <?php include_once "./padroes/head.html"; ?>
    <link rel="stylesheet" href="./css/clientes.css">
</head>
<body>
    <?php include_once "./padroes/menu.php"; ?>

    <div class="content-wrap">
        <header>
            <ion-icon class="expand" name="menu" id="open-button"></ion-icon>
            <div>
                <a href="./alexa-solicitacoes.php" title="SOLICITAÇÕES"><ion-icon class="icon40" name="paper-plane"></ion-icon></a>
                <a href="./alexa/insert.php" title="ADICIONAR CLIENTE"><ion-icon class="icon40" name="person-add"></ion-icon></a>
            </div>
        </header>
        <container>
            <?php foreach ($clientes as $cliente) { ?>
            <a href="./alexa/edit.php?cliente=<?=$cliente['cliente']?>" title="CLIENTE"><div class="cliente" <?php if($cliente['bloqueado'] == 1) {?> style="background-color: tomato;" <?php }; ?>>
                <?= $cliente['cliente']; ?>
            </div><a>
            <?php }; ?>
        </container>
    </div>

    <?php include_once "./padroes/footer.html"; ?>
</body>
</html>