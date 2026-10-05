<?php
include("../infra/conexao.php");

$nome = $_POST["nome"];
$categoria = $_POST["categoria"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];
$quantidade_estoque = $_POST["quantidade-estoque"];
$data_validade = $_POST["data-validade"];

$query = "INSERT INTO produto (nome, categoria, descricao, preco, quantidade_estoque, data_validade) VALUES (?, ?, ?, ?, ?, ?)";

$comando = mysqli_prepare($conexao, $query);
mysqli_stmt_bind_param($comando, "sssdis", $nome, $categoria, $descricao, $preco, $quantidade_estoque, $data_validade);

mysqli_stmt_execute($comando);

header("Location: ../index.php");
exit();
?>
feat - adicionado cadastro, edicao e exclusao