CREATE DATABASE toko_roti_mama_azzam;

USE toko_roti_mama_azzam;

CREATE TABLE orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    jumlah INT,
    rasa VARCHAR(50),
    status VARCHAR(20) DEFAULT 'pending'
);
