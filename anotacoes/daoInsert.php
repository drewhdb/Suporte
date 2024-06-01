<?php // print_r($_GET); die();
    require_once "../dao/conexao.php";

    $ntalink = '0';
    if ($_GET['ntalink'] == 'on'){
        $ntalink = '1';
    }

    $conexao = criaConexao();

    $sql = "SELECT usrid FROM usr where usrnome = '$_GET[ntacriador]' limit 1;";
    $statement = $conexao->prepare($sql);
    $statement->execute();
    $criador = $statement->fetch(PDO::FETCH_ASSOC)['usrid'];

    $sql = "INSERT INTO nta (ntaid, ntatitulo, ntacriador, ntacriacao, ntaintro, ntaconteudo, ntalink, ntalinkdir) values ('$_GET[ntaid]', '$_GET[ntatitulo]', '$criador', now(), '$_GET[ntaintro]', '$_GET[ntaconteudo]', $ntalink, '$_GET[ntalinkdir]');";
    $statement = $conexao->prepare($sql);
    $statement->execute();

    header("Location: ../anotacoes.php");
?>