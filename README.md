# Sistema de Gestão de Estoque de Mercado

Esse projeto serve para cadastrar, listar, editar e excluir produtos de um mercado.

## Tecnologias Utilizadas

- PHP
- MySQL
- HTML

## Requisitos para Execução

- PHP
- PHPMyAdmin
- XAMPP

## Instalação

1. Copie o projeto para a pasta do htdocs.
2. Cole o código do arquivo db.sql no PHPMyAdmin.
4. Verifique o arquivo `infra/conexao.php`.

## Estrutura do Banco

O banco `mercadoestoque` possui a tabela `produto` com os campos `id`, `nome`, `categoria`, `descricao`, `preco`, `quantidade-estoque`, `data-validade`, `criado-em` e `atualizado-em`.