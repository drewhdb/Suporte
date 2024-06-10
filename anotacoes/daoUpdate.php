<?php //print_r($_GET); die();
    require_once "../dao/conexao.php";

    $ntalink = '0';
    if ($_GET['ntalink'] == 'on'){
        $ntalink = '1';
    }
    $conexao = criaConexao();
    $conexao->exec("set names utf8mb4");

    $sql = "UPDATE nta SET ntatitulo = '$_GET[ntatitulo]', ntaintro = '$_GET[ntaintro]', ntaconteudo = '$_GET[ntaconteudo]', ntalinkdir = '$_GET[ntalinkdir]', ntalink = '$ntalink' WHERE ntaid = '$_GET[ntaid]';";
    $statement = $conexao->prepare($sql);
    $statement->execute();

    header("Location: ../anotacoes.php");
?>