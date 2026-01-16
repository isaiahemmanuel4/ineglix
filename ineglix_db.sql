CREATE DATABASE ineglix_db;

USE ineglix_db;

-- Table for Products (Sales)
CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    category ENUM('Computer', 'Bluetooth Speaker') NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    image_url VARCHAR(255),
    description TEXT
);

-- Table for Services (Repairs & Installation)
CREATE TABLE services (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    description TEXT NOT NULL
);

-- Insert Dummy Data
INSERT INTO products (name, category, price, description) VALUES
('Dell Latitude 7490', 'Computer', 350.00, 'High performance laptop.'),
('JBL Flip 5', 'Bluetooth Speaker', 90.00, 'Portable waterproof speaker.');

INSERT INTO services (title, description) VALUES
('Desktop & Laptop Repair', 'Full diagnostic and hardware replacement.'),
('Printer Installation', 'Driver setup and network configuration.');
