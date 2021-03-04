CREATE TABLE `polls` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`user_id` INT NOT NULL,
	`title` VARCHAR(255),
	`description` VARCHAR(255) DEFAULT NULL,
	PRIMARY KEY (`id`)
);