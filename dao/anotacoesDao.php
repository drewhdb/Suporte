<?php 
require_once "conexao.php";

function getCards()
{
    $conexao = criaConexao();
    $conexao->exec("set names utf8mb4");
    
    $sql = "SELECT * FROM nta ORDER BY ntalink, ntatitulo;";
    $statement = $conexao->prepare($sql);
    $statement->execute();

    $cards = Array();

    while ($linha = $statement->fetch(PDO::FETCH_ASSOC)) {       
        array_push($cards,$linha);
    }
    
    return $cards;
}
?>