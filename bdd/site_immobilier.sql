CREATE DATABASE app_immo;
USE app_immo;

CREATE TABLE `Biens_immo` (
	`id_biens_immo` INT NOT NULL AUTO_INCREMENT,
	`image` varchar(500) NOT NULL,
	`type` varchar(50) NOT NULL,
	`surface` int NOT NULL,
	`prix` DECIMAL NOT NULL,
	`contenu` TEXT(10000) NOT NULL,
	`vendeur` varchar(50) NOT NULL,
	PRIMARY KEY (`id_biens_immo`)
);

CREATE TABLE `Contacts` (
	`id_contacts` INT NOT NULL AUTO_INCREMENT,
	`nom` varchar(50) NOT NULL,
	`prenom` varchar(50) NOT NULL,
	`mail` varchar(100) NOT NULL,
	`message` TEXT(10000) NOT NULL,
	PRIMARY KEY (`id_contacts`)
);



