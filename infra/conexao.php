<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "mercadoestoque";
$porta = 6608;

$conexao = new mysqli($host, $usuario, $senha, $banco, $porta);

if ($conexao->connect_error) {
    die("Erro na conexao com o banco de dados: " . $conexao->connect_error);
}

$conexao->set_charset("utf8mb4");

?>