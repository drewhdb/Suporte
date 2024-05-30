<?php

define("SERVER", 'localhost'); 
define("USER", 'root'); 
define("PASSWORD", 'root'); 
define("DB", 'projeto'); 

function criaConexao()
{
    try {
        return new PDO("mysql:host=" . SERVER . ";dbname=" . DB, USER, PASSWORD);
    } catch (PDOException $e) {
        print("Error: " . $e->getMessage());
    }
}

?>