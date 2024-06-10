<?php
    include_once "../verifica_sessao.php";
    include_once "../dao/anotacoesDao.php";

    $ultimoId = getLastId();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>cadastro</title>
    <?php include_once "../padroes/head2.html"; ?>
</head>
<body>
    <form action="./daoInsert.php" method="get">
    <header>
        <div>
            <a href="../anotacoes.php" style="margin-right: 1em;"><ion-icon name="arrow-back"></ion-icon></a>
        </div>
        <div>
            <button title="Salvar" type="submit"><ion-icon class="icon50" name="checkmark"></ion-icon></button>
        </div>
    </header>
    <container>
        <fieldset><legend>ID:</legend>
            <input type="text" class="input-content disabled" value="<?= $ultimoId; ?>" id="ntaid" name="ntaid" title="ID" readonly>
        </fieldset>
        <fieldset><legend>Titulo:</legend>
            <input type="text" class="input-content" placeholder="Titulo" id="ntatitulo" name="ntatitulo" title="TITULO" maxlength="20" required>
        </fieldset>
        <fieldset><legend>Introdução:</legend>
            <textarea title="INTRODUÇÃO" class="textarea-content" id="ntaintro" name="ntaintro" oninput="limitarTextarea('ntaintro', 100)" placeholder="Introdução" required></textarea>
        </fieldset>
        <fieldset><legend>Link:</legend>
            <input type="text" class="input-content" placeholder="http:\\magnadata.com.br" id="ntalinkdir" name="ntalinkdir" title="URL">
            <input type="checkbox" class="custom-checkbox" id="ntalink" name="ntalink" title="VIEW"> View
        </fieldset>
        <fieldset><legend>Criador:</legend>
            <input type="text" class="input-content disabled" value="<?= $_SESSION['user']; ?>" id="ntacriador" name="ntacriador" title="CRIADOR" readonly>
        </fieldset>
    </container>
    <container style="grid-template-columns: 1fr;">
        <fieldset style="width: 100%;"><legend>Conteúdo:</legend>
            <textarea title="CONTEÚDO" class="textarea-content2" id="ntaconteudo" name="ntaconteudo" placeholder="Conteúdo"></textarea>
        </fieldset>
    </container>

    </form>
    <?php include_once "../padroes/footer2.html"; ?>
</body>
</html>