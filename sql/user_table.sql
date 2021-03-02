use opinion;
CREATE TABLE `users` (
	`id` INT unsigned NOT NULL AUTO_INCREMENT KEY,
	`username` VARCHAR(255) UNIQUE,
	`password` VARCHAR(255),
	`email` VARCHAR(255) UNIQUE
);