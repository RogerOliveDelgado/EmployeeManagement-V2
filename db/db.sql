DROP DATABASE IF EXISTS employee_management_v2;
CREATE DATABASE employee_management_v2;
USE employee_management_v2;


CREATE TABLE `users` (
    `id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `username` varchar(25) DEFAULT NULL,
    `password` varchar(200)
);

CREATE TABLE `employees` (
    `id`int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `name` varchar(25) DEFAULT NULL,
    `email` varchar(25) DEFAULT NULL, 
    `age` TINYINT DEFAULT NULL,
    `streetadress` varchar(100) DEFAULT NULL,
    `city` varchar(25) DEFAULT NULL,
    `state` varchar(25) DEFAULT NULL,
    `postalcode` MEDIUMINT DEFAULT NULL,
    `phonenumber` INT(11) DEFAULT NULL
);

INSERT INTO users (username, password) VALUES ("Roger", "$2y$10$3t5u3NQYvHJjY0TIuijoKuW62XS70.mAcxOrXE1KeP0rd3.CeRnz6");--password: 123456--

INSERT INTO employees (name, email, age, streetadress, city, state, postalcode, phonenumber)
VALUES ("roger", "roger@gmail.com", 45, "street address", "Barcelona", "Spain", 08999, 65656565655),
("roger", "roger@gmail.com", 45, "street address", "Barcelona", "Spain", 08999, 65656565655),
("roger", "roger@gmail.com", 45, "street address", "Barcelona", "Spain", 08999, 65656565655);