CREATE DATABASE IF NOT EXISTS redesip-3;
USE redesip-3;
CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL
);