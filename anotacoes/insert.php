<?php
    include_once "../dao/anotacoesDao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>cadastro</title>
    <link rel="stylesheet" href="css/anotacoes.css">
    <?php include_once "../padroes/head2.html"; ?>
</head>
<body>
    <div class="content-wrap">
        <form action="./daoInsert.php" method="get">
        <header>
            <a href="../anotacoes.php"><ion-icon name="arrow-back"></ion-icon></a>
            <button type="submit" href="../anotacoes.php"><ion-icon class="icon50" name="save"></ion-icon></button>
        </header>
        <container>

        </container>
        </form>
    </div>

    <?php include_once "../padroes/footer.html"; ?>
</body>
</html>