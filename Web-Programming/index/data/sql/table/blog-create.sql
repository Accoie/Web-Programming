CREATE TABLE `post` (
	`title` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`subtitle` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`content` TEXT NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`author` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`author_url` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`publish_date` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`image_url` VARCHAR(255) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`featured` TINYINT(3) UNSIGNED ZEROFILL NOT NULL
)
COLLATE='utf8mb4_0900_ai_ci'
ENGINE=InnoDB
;