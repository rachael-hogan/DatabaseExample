## To Run
cd src
php index.php


## What I did to create the mysql database

- mysql.server stop
- mysql.server start
- mysql -u root -p

USE my_database;

CREATE TABLE Users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(50) NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

SHOW TABLES;
DESCRIBE Users;
INSERT INTO Users (firstname, lastname, email) VALUES ('John', 'Doe', 'john.doe@example.com');
SELECT * FROM Users;
