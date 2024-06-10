<?php
    include_once "../verifica_sessao.php";
    include_once "../dao/alexaDao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>cadastro</title>
    <?php include_once "../padroes/head2.html"; ?>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <form action="./daoInsert.php" method="get">
    <header>
        <div>
            <a href="../alexa.php" style="margin-right: 1em;"><ion-icon name="arrow-back"></ion-icon></a>
        </div>
        <div>
            <button title="Salvar" type="submit"><ion-icon class="icon50" name="checkmark"></ion-icon></button>
        </div>
    </header>
        <?php if($_GET != []){ ?>
        <div class="aviso"><?= $_GET['aviso']?></div>
        <?php }; ?>

    <container>
        <fieldset><legend>Cliente:</legend>
            <input type="text" class="input-content" id="cliente" name="cliente" title="CLIENTE" style="text-transform: uppercase;" required>
            <input type="checkbox" class="custom-checkbox" id="bloqueado" name="bloqueado" title="BLOQUEADO"> Bloqueado
        </fieldset>
        <fieldset><legend>Host:</legend>
            <input type="text" class="input-content" id="host" name="host" placeholder="000.000.000.000" title="IP" required>
        </fieldset>
        <fieldset><legend>Porta:</legend>
            <input type="text" class="input-content" id="port" name="port" value="3306" title="PORTA" required>
        </fieldset>
        <fieldset><legend>Usuário:</legend>
            <input type="text" class="input-content" id="user" name="user" value="root" title="USUÁRIO" required>
        </fieldset>
        <fieldset><legend>Senha:</legend>
            <input type="password" class="input-content" id="pass" name="pass" title="SENHA" required>
        </fieldset>
    </container>
    </form>
    <?php include_once "../padroes/footer2.html"; ?>
</body>
</html>