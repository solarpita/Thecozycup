-- Create prompt database if it doesn't exist
CREATE DATABASE IF NOT EXISTS cozycup;
USE cozycup;

-- Users Table
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    mobile VARCHAR(20) NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Payments Table
CREATE TABLE IF NOT EXISTS payments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    amount DECIMAL(10, 2) NOT NULL,
    method VARCHAR(50) NOT NULL,
    payment_date DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Contact Messages Table
CREATE TABLE IF NOT EXISTS contact_messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    submitted_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Menu Table
CREATE TABLE IF NOT EXISTS menu (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    price DECIMAL(10, 2) NOT NULL,
    image VARCHAR(255),
    category VARCHAR(100)
);

-- Insert Sample Menu Items (Based on menu.html)
INSERT INTO menu (name, description, price, image, category) VALUES
-- Coffee & Beverages
('Espresso', 'Espresso with Shadow', 150.00, 'cafe_img/coffe1.jpg', 'Coffee & Beverages'),
('Latte', 'Latte With Shadow', 200.00, 'cafe_img/coffe2.jpg', 'Coffee & Beverages'),
('Mocha', 'Mocha With Shadow', 250.00, 'cafe_img/coffe3.jpg', 'Coffee & Beverages'),
('Americano', 'Americano With Shadow', 350.00, 'cafe_img/coffe4.jpg', 'Coffee & Beverages'),

-- Pastries & Snacks
('Croissant', 'Croissant With Shadow', 300.00, 'cafe_img/pastries1.jpg', 'Pastries & Snacks'),
('Muffin', 'Muffin With Shadow', 350.00, 'cafe_img/cake.jpg', 'Pastries & Snacks'),
('Cookie', 'Cookie With Shadow', 250.00, 'cafe_img/cookies.jpg', 'Pastries & Snacks'),
('Sandwich', 'Sandwich With Shadow', 450.00, 'cafe_img/sandwich.jpg', 'Pastries & Snacks'),

-- Special Menu
('Franchis', 'Franchis With Shadow', 330.00, 'cafe_img/franchis.jpg', 'Special Menu'),
('Garlic-Bread', 'Garlic-Bread With Shadow', 430.00, 'cafe_img/garlic-bread.jpg', 'Special Menu'),
('Margarita-Pizza', 'Margarita-Pizza With Shadow', 400.00, 'cafe_img/pizza.jpg', 'Special Menu'),
('Maggie', 'Maggie With Shadow', 250.00, 'cafe_img/maggie.jpg', 'Special Menu');
