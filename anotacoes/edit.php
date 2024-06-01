<?php
    include_once "../verifica_sessao.php";
    include_once "../dao/anotacoesDao.php";

    $dados = getCardById($_GET['ntaid']);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>edição</title>
    <?php include_once "../padroes/head2.html"; ?>
</head>
<body>
    <div class="content-wrap">
        <form action="./daoUpdate.php" method="get">
        <header>
            <div>
                <a  title="Voltar" href="../anotacoes.php"><ion-icon name="arrow-back"></ion-icon></a>
            </div>
            <div>
                <a title="Excluir" href="./daoDelete.php?ntaid=<?= $_GET['ntaid']; ?>" style="margin-right: 1em;"><ion-icon class="icon50" name="close"></ion-icon></a>
                <button title="Salvar" type="submit"><ion-icon class="icon50" name="checkmark"></ion-icon></button>
            </div>
        </header>
        <container>
            <fieldset><legend>ID:</legend>
                <input type="text" class="input-content disabled" value="<?= $_GET['ntaid']; ?>" id="ntaid" name="ntaid" title="ID" readonly>
            </fieldset>
            <fieldset><legend>Título:</legend>
                <input type="text" class="input-content" placeholder="TÍTULO" id="ntatitulo" name="ntatitulo" title="TITULO" value="<?= $dados['ntatitulo']; ?>" required maxlength="20">
            </fieldset>
            <fieldset><legend>Introdução:</legend>
                <textarea title="INTRODUÇÃO" class="textarea-content" id="ntaintro" name="ntaintro" placeholder="Introdução" oninput="limitarTextarea('ntaintro', 100)" required><?= $dados['ntaintro']; ?></textarea>
            </fieldset>
            <fieldset><legend>Conteúdo:</legend>
                <textarea title="CONTEUDO" class="textarea-content2" id="ntaconteudo" name="ntaconteudo" placeholder="Conteúdo"><?= $dados['ntaconteudo']; ?></textarea>
            </fieldset>
            <fieldset><legend>URL:</legend>
                <input type="text" class="input-content" placeholder="http:\\magnadata.com.br" id="ntalinkdir" name="ntalinkdir" value="<?= $dados['ntalinkdir']; ?>" title="URL">
                <input type="checkbox" class="custom-checkbox" id="ntalink" name="ntalink"  title="VIEW" <?php if ($dados['ntalink'] == '1'){?> checked <?php }; ?>> View
                
            </fieldset>
        </container>
        </form>
    </div>

    <?php include_once "../padroes/footer2.html"; ?>
</body>
</html>