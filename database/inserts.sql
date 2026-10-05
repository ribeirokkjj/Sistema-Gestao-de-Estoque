CREATE DATABASE IF NOT EXISTS mercadoestoque DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE mercadoestoque;

INSERT INTO produto (nome, categoria, descricao, preco, quantidade_estoque, data_validade) VALUES
('Arroz Tipo 1', 'Mercearia', 'Pacote de arroz branco 5 kg', 29.90, 25, '2027-12-31'),
('Feijao Carioca', 'Mercearia', 'Pacote de feijao carioca 1 kg', 8.50, 18, '2027-10-20'),
('Leite Integral', 'Laticinios', 'Caixa de leite integral 1 L', 5.99, 30, '2026-12-15'),
('Cafe Torrado', 'Bebidas', 'Cafe moido tradicional 500 g', 18.90, 12, '2027-08-30'),
('Macarrao Espaguete', 'Massas', 'Pacote de macarrao espaguete 500 g', 4.75, 40, '2028-01-10');