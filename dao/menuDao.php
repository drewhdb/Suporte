<?php 
require_once "conexao.php";

function getViews()
{
    $conexao = criaConexao();
    $conexao->exec("set names utf8mb4");
    
    $sql = "SELECT ntatitulo, ntalinkdir FROM nta WHERE ntalink = 1 ORDER BY ntatitulo;";
    $statement = $conexao->prepare($sql);
    $statement->execute();

    $views = Array();

    while ($linha = $statement->fetch(PDO::FETCH_ASSOC)) {       
        array_push($views,$linha);
    }
    
    return $views;
}

?>