<?php
require_once "conexao.php";

function verificaLogin($user, $password)
{
    $conexao = criaConexao();

    $sql = "SELECT * FROM usr where usrnome = '$user' and usrsenha = '$password';";

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
