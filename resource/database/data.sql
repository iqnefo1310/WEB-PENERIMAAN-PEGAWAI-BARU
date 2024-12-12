-- Membuat database
CREATE DATABASE penerimaan_db;

-- Gunakan database yang baru dibuat
USE penerimaan_db;

-- Membuat tabel users
CREATE TABLE users_p (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

INSERT INTO users_p (username, password) VALUES ('admin', MD5('admin123'));