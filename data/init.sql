CREATE DATABASE data;

use data;

CREATE TABLE foods (
	id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50) NOT NULL,
  calories INT(6) NOT NULL,
	carbs DECIMAL(5,1),
  fat DECIMAL(5,1),
  protein DECIMAL(5,1),
  sodium DECIMAL(5,1),
  sugar DECIMAL(5,1)
);

CREATE TABLE users (
	id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50) NOT NULL,
  calories INT(6) NOT NULL,
	carbs DECIMAL(5,1),
  fat DECIMAL(5,1),
  protein DECIMAL(5,1),
  sodium DECIMAL(5,1),
  sugar DECIMAL(5,1)
);
