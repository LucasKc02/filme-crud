DROP DATABASE IF EXISTS catalogo_db;

CREATE DATABASE catalogo_db;

USE catalogo_db;


CREATE TABLE filmes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(100) NOT NULL,
    diretor VARCHAR(100) NOT NULL,
    duracao_minutos INT NOT NULL,
    ano_lancamento INT NOT NULL
);


CREATE TABLE categorias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_categoria VARCHAR(50) NOT NULL,
    faixa_etaria VARCHAR(20) NOT NULL
);


INSERT INTO categorias(nome_categoria, faixa_etaria)
VALUES
('Terror','18 anos'),
('Comédia','12 anos'),
('Suspense','16 anos'); 