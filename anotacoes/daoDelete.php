<?php
    require_once "../dao/conexao.php";

    $conexao = criaConexao();

    $sql = "DELETE FROM nta WHERE ntaid = '$_GET[ntaid]'";
    $statement = $conexao->prepare($sql);
    $statement->execute();

    header("Location: ../anotacoes.php");
?>