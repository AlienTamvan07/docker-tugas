CREATE DATABASE IF NOT EXISTS books;

USE books;

CREATE TABLE IF NOT EXISTS books (
    id INT AUTO_INCREMENT PRIMARY KEY,
    book_name VARCHAR(255) NOT NULL
);