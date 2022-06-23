DROP DATABASE IF EXISTS employee_management_v2;
CREATE DATABASE employee_management_v2;
USE employee_management_v2


CREATE TABLE `users` (
    `id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `username` varchar(25) DEFAULT NULL,
    `password` varchar(200)
)

INSERT INTO users (username, password) VALUES ("Roger", "$2y$10$3t5u3NQYvHJjY0TIuijoKuW62XS70.mAcxOrXE1KeP0rd3.CeRnz6");