<?php 
require_once "conexao.php";

function getCards() {
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

function getLastId() {
    $conexao = criaConexao();

    $sql = "SELECT max(ntaId) + 1 as value from nta;";
    $statement = $conexao->prepare($sql);
    $statement->execute();
    
    $result = $statement->fetch(PDO::FETCH_ASSOC);

    if ($result === false || $result['value'] === null) {
        return 1;
    }
    
    return $result['value'];
}

function getCardById($id){
    $conexao = criaConexao();
    $conexao->exec("set names utf8mb4");

    $sql = "SELECT ntatitulo, ntaconteudo, ntaintro, ntalink, ntalinkdir from nta where ntaid = '$id';";
    $statement = $conexao->prepare($sql);
    $statement->execute();
    
    return $statement->fetch(PDO::FETCH_ASSOC);    
}
?>