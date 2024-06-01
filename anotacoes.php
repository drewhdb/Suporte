<?php
    include_once "./verifica_sessao.php";
    include_once "./dao/anotacoesDao.php";

    if ($_SESSION['logado'] == false) {
        session_destroy();
        header("Location: index.php");
    }

    include_once "./dao/anotacoesDao.php";
    $cards = getCards();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Anotações</title>
    <link rel="stylesheet" href="css/anotacoes.css">
    <?php include_once "./padroes/head.html"; ?>
</head>
<body>
    <?php include_once "./padroes/menu.php"; ?>

    <div class="content-wrap">
        <header>
            <ion-icon class="expand" name="menu" id="open-button"></ion-icon>
            <a href="./anotacoes/insert.php"><ion-icon class="icon50" name="add"></ion-icon></a>
        </header>
        <container>
            <?php foreach ($cards as $card) {?>
            <a href="./anotacoes/edit.php?ntaid=<?= $card['ntaid']; ?>" class="card" id="<?= $card['ntaid']; ?>">
                <?php if( $card['ntalink'] == 0) { ?>
                    <div class="cardheader">
                <?php } else { ?>
                    <div class="cardheader-view">
                <?php }; ?>
                        <p><?= $card['ntatitulo']; ?></p>
                    </div>
                    <div class="content">
                        <p><?= $card['ntaintro']; ?></p>
                    </div>
            </a>              
            <?php }; ?>
        </container>
    </div>

    <?php include_once "./padroes/footer.html"; ?>
</body>
</html>