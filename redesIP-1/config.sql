CREATE DATABASE IF NOT EXISTS redesip-1;
USE redesip-1;
CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL
);