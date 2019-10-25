create database products;
use products;
CREATE TABLE product_types(
    id int not null primary key auto_increment,
    name varchar(255) not null,
    description varchar(255),
    quantity int,
    value decimal(7, 2),
    created_at timestamp DEFAULT CURRENT_TIMESTAMP,
    updated_at timestamp DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
INSERT INTO product_types (name) VALUES ('Food'), ('Clothing'), ('Personal Care'), ('Babe');