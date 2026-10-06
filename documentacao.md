- OBS: Caso de uso está anexado no AVA

## Regras de Negócio (RN)

- RN1: Todo produto cadastrado deve conter obrigatoriamente nome, categoria, descrição, preço, quantidade em estoque e data de validade.
- RN2: O preço do produto deve ser obrigatoriamente um valor numérico positivo.
- RN3: A quantidade de produtos em estoque deve ser um número inteiro igual ou maior que zero.
- RN4: A exclusão de um produto remove o registro do banco de dados de forma definitiva.

## Requisitos Funcionais (RF)

- RF1: O sistema deve permitir o cadastro de novos produtos.
- RF2: O sistema deve permitir a listagem e visualização de todos os produtos cadastrados.
- RF3: O sistema deve permitir a edição de produtos existentes.
- RF4: O sistema deve permitir a exclusão de produtos do banco de dados.

## Requisitos Não Funcionais (RNF)

- RNF1: O sistema deve utilizar obrigatoriamente *Prepared Statements* em todas as operações de banco de dados para garantir a segurança.
