# CESI-PHP-Exos-Apr2023
Exo 1 (animal.php) - Exo2 (CRUD)
---

# Exo 2
## Docker Compose
- docker-compose up
- docker exec -ti $(docker ps --format '{{.Names}}' | grep mysql) bash
- mysql -uroot

## Setup de la BDD
- use myapp;
- CREATE TABLE user ( id INT AUTO_INCREMENT PRIMARY KEY, first_name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, email VARCHAR(255) UNIQUE NOT NULL, pwd VARCHAR(255));
- INSERT INTO user (first_name, last_name, email) VALUES ('Emily', 'Thompson', 'emily.thompson@example.com');
- INSERT INTO user (first_name, last_name, email) VALUES ('Lucas', 'Martinez', 'lucas.martinez@example.com');
