<?php
include("../infra/conexao.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $categoria = $_POST["categoria"];
    $descricao = $_POST["descricao"];
    $preco = $_POST["preco"];
    $quantidade_estoque = $_POST["quantidade-estoque"];
    $data_validade = $_POST["data-validade"];

    $query = "UPDATE produto SET nome = ?, categoria = ?, descricao = ?, preco = ?, quantidade_estoque = ?, data_validade = ? WHERE id = ?";

    $comando = mysqli_prepare($conexao, $query);
    mysqli_stmt_bind_param($comando, "sssdisi", $nome, $categoria, $descricao, $preco, $quantidade_estoque, $data_validade, $id);
    mysqli_stmt_execute($comando);

    header("Location: ../index.php");
    exit();
}

$id = $_GET["id"];

$query = "SELECT id, nome, categoria, descricao, preco, quantidade_estoque, data_validade FROM produto WHERE id = ?";
$comando = mysqli_prepare($conexao, $query);
mysqli_stmt_bind_param($comando, "i", $id);
mysqli_stmt_execute($comando);

$resultado = mysqli_stmt_get_result($comando);
$produto = mysqli_fetch_assoc($resultado);
?>

<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Editar Produto</title>
</head>

<body>
    <h1>Editar Produto</h1>

    <form action="" method="POST">
        <input type="hidden" name="id" value="<?php echo $produto['id']; ?>">

        <label for="nome">Nome do Produto:</label><br>
        <input type="text" id="nome" name="nome" value="<?php echo $produto['nome']; ?>" required><br>

        <label for="categoria">Categoria:</label><br>
        <input type="text" id="categoria" name="categoria" value="<?php echo $produto['categoria']; ?>" required><br>

        <label for="descricao">Descrição:</label><br>
        <input type="text" id="descricao" name="descricao" value="<?php echo $produto['descricao']; ?>" required><br>

        <label for="preco">Preço:</label><br>
        <input type="number" step="0.01" id="preco" name="preco" value="<?php echo $produto['preco']; ?>" required><br>

        <label for="quantidade-estoque">Quantidade em Estoque:</label><br>
        <input type="number" id="quantidade-estoque" name="quantidade-estoque" value="<?php echo $produto['quantidade_estoque']; ?>" required><br>

        <label for="data-validade">Data de Validade:</label><br>
        <input type="date" id="data-validade" name="data-validade" value="<?php echo $produto['data_validade']; ?>" required><br><br>

        <button type="submit">Salvar Alteracoes</button>
    </form>

</body>

</html>
