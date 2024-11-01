CREATE DATABASE IF NOT EXISTS home;
USE home;

CREATE TABLE IF NOT EXISTS world (
    column1 INT AUTO_INCREMENT PRIMARY KEY,
    column2 VARCHAR(50) NOT NULL,
    column3 VARCHAR(50) NOT NULL
);


INSERT INTO world (name, email) VALUES
('John Doe', 'john@example.com'),
('Jane Smith', 'jane@example.com'),
('Alice Johnson', 'alice@example.com');
