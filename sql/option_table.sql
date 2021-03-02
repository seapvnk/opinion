CREATE TABLE `options` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255),
	`poll_id` INT,
	`votes` BIGINT DEFAULT 0,
	PRIMARY KEY (`id`)
);