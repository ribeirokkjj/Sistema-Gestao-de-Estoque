<?php

function validarProduto(array $dados): array
{
    $erros = [];

    $nome = trim($dados['nome']);
    $categoria = trim($dados['categoria']);
    $descricao = trim($dados['descricao']);
    $preco = $dados['preco'];
    $quantidade = $dados['quantidade_estoque'];
    $dataValidade = trim($dados['data_validade']);

    if ($nome === '' || strlen($nome) > 120) {
        $erros[] = 'Informe um nome válido com até 120 caracteres.';
    }

    if ($categoria === '' || strlen($categoria) > 80) {
        $erros[] = 'Informe uma categoria válida com até 80 caracteres.';
    }

    if ($descricao === '' || strlen($descricao) > 255) {
        $erros[] = 'Informe uma descrição válida com até 255 caracteres.';
    }

    if (!is_numeric($preco) || (float) $preco <= 0) {
        $erros[] = 'Informe um preço válido maior que zero.';
    }

    if (!is_numeric($quantidade) || (int) $quantidade < 0) {
        $erros[] = 'Informe uma quantidade em estoque válida (inteiro maior ou igual a zero).';
    }

    if ($dataValidade === '') {
        $erros[] = 'Informe a data de validade.';
    }

    return $erros;
}

?>