<?php include_once "./dao/menuDao.php";
    $views = getViews();
?>
<div class="menu-wrap">
    <a id="close-button" class="close"><ion-icon name="close"></ion-icon></a>
    <a href="logout.php" class="logout"><ion-icon name="power"></ion-icon></a>

    <div class="menu-head">
        <img class="logo" src="./imagem/logo.png">
        <p class="usuario"><?= $_SESSION['user']; ?></p>
    </div>

    <div class="links">
        <a href="./anotacoes.php" title="ANOTAÇÕES">
            <div class="link"><ion-icon name="document-text-outline" class="icon50"></ion-icon></div>
        </a>
        
        <div class="link link-dropdown">
            <ion-icon name="people-outline" class="icon40"></ion-icon>
            <div class="dropdown-content">
                <a href="./clientes.php">Clientes</a>
                <a href="./oryxsupport.php">Support</a>
                <a href="./alexa.php">Alexa</a>
            </div>
        </div>

        <a href="#" title="CONFIG">
            <div class="link"><ion-icon name="cog" class="icon50"></ion-icon></div>
        </a>

        <?php foreach ($views as $key => $item) { ?>
            <a href="<?= $item['ntalinkdir'] ?>" title="<?= $item['ntatitulo'] ?>"><div class="link-view"><?= $item['ntatitulo'] ?></div></a>
        <?php }; ?>
    </div>
</div>