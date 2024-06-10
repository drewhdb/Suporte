<?php
    include_once "./verifica_sessao.php";

    if ($_SESSION['logado'] == false) {
        session_destroy();
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Clientes</title>
    <?php include_once "./padroes/head.html"; ?>
</head>
<body>
    <?php include_once "./padroes/menu.php"; ?>

    <div class="content-wrap">
        <header>
            <ion-icon class="expand" name="menu" id="open-button"></ion-icon>
        </header>
        <container>
            
        </container>
    </div>

    <?php include_once "./padroes/footer.html"; ?>
</body>
</html>