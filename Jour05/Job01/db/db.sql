CREATE DATABASE utilisateurs_db_j5j1;

USE utilisateurs_db_j5j1;

CREATE TABLE utilisateurs (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nom VARCHAR(50),
  prenom VARCHAR(50),
  email VARCHAR(100),
  password VARCHAR(100)
);
