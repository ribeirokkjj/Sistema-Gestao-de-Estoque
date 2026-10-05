<?php
include("infra/conexao.php");

$queryTabela = "SELECT id, nome, categoria, descricao, preco, quantidade_estoque, data_validade FROM produto ORDER BY id";
$resultadoTabela = mysqli_query($conexao, $queryTabela);
?>

<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Gestão de Estoque</title>
</head>

<body>

    <h1>Sistema de Gestão de Estoque de Mercado</h1>

    <?php if (isset($_GET["erro"])) { echo "<p style='color:red;'>" . $_GET["erro"] . "</p>"; } ?>
    <?php if (isset($_GET["sucesso"])) { echo "<p style='color:green;'>" . $_GET["sucesso"] . "</p>"; } ?>

    <h2>Cadastrar Novo Produto</h2>

    <form action="components/create.php" method="POST">
        <label for="nome">Nome do Produto:</label><br>
        <input type="text" id="nome" name="nome" required><br>

        <label for="categoria">Categoria:</label><br>
        <input type="text" id="categoria" name="categoria" required><br>

        <label for="descricao">Descrição:</label><br>
        <textarea id="descricao" name="descricao" required></textarea><br>

        <label for="preco">Preço:</label><br>
        <input type="number" step="0.01" id="preco" name="preco" required><br>

        <label for="quantidade-estoque">Quantidade em Estoque:</label><br>
        <input type="number" id="quantidade-estoque" name="quantidade-estoque" min="0" required><br><br>

        <label for="data-validade">Data de Validade:</label><br>
        <input type="date" id="data-validade" name="data-validade" required><br><br>

        <button type="submit">Cadastrar Produto</button>
    </form>

    <hr>

    <h2>Produtos Cadastrados</h2>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Categoria</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Estoque</th>
                <th>Validade</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>
            <?php
            while ($produto = mysqli_fetch_assoc($resultadoTabela)) {
                echo '<tr>';
                echo '<td>' . $produto['id'] . '</td>';
                echo '<td>' . $produto['nome'] . '</td>';
                echo '<td>' . $produto['categoria'] . '</td>';
                echo '<td>' . $produto['descricao'] . '</td>';
                echo '<td>R$ ' . number_format($produto['preco'], 2, ',', '.') . '</td>';
                echo '<td>' . $produto['quantidade_estoque'] . '</td>';
                echo '<td>' . $produto['data_validade'] . '</td>';
                echo '<td>';
                echo '<a href="components/edit.php?id=' . $produto['id'] . '">Editar</a> | ';
                echo '<form action="components/delete.php" method="POST" style="display:inline;" onsubmit="return confirm(\'Deseja excluir este produto?\');">';
                echo '<input type="hidden" name="id" value="' . $produto['id'] . '">';
                echo '<button type="submit">Excluir</button>';
                echo '</form>';
                echo '</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>

</body>

</html>
