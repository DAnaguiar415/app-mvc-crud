CREATE DATABASE primeirocrud;
USE primeirocrud;

CREATE TABLE cliente (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    cpf VARCHAR(20) NOT NULL,
    birth DATE NOT NULL,
    phone VARCHAR(20) NOT NULL,
    address TEXT NOT NULL
);
