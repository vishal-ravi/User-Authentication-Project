-- SQL setup script 
CREATE DATABASE UserAuth;

USE UserAuth;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    username VARCHAR(100) UNIQUE,
    password VARCHAR(255),
    phone VARCHAR(15)
);
