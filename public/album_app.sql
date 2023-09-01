--- Création de la database ---

CREATE DATABASE   album_app_music
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci

--- Création de la table ---

CREATE TABLE albums(
    id INT(11) PRIMARY KEY AUTO_INCREMENT;
    title VARCHAR (50) NOT NULL,
    artiste VARCHAR (50) NOT NULL,
    create_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    update_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
)