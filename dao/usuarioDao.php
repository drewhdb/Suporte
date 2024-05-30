<?php
require_once "conexao.php";

function verificaLogin($user, $password)
{
    $conexao = criaConexao();

    $sql = "SELECT * FROM usr where nome = '$user' and senha = '$password';";

    // Prepara a consulta
    $statement = $conexao->prepare($sql);

    // Executa a consulta
    $statement->execute();

    if ($statement->rowCount() > 0) {
        return true;
    } else {
        return false;
    }
}
