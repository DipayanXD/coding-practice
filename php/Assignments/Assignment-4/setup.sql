CREATE DATABASE IF NOT EXISTS lab4_db;
USE lab4_db;
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100),
    password VARCHAR(100)
);
CREATE TABLE IF NOT EXISTS students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100)
);
INSERT INTO users (email, password) VALUES ('ankita@example.com', 'pass123');
INSERT INTO students (name, email) VALUES ('Ankita', 'ankita@example.com'), ('Rohit', 'rohit@example.com'), ('Sana', 'sana@example.com');
