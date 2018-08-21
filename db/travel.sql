CREATE TABLE `arretmerje`.`travel` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `image` VARCHAR(50) NOT NULL,
  `description` TEXT NOT NULL,
  `address` VARCHAR(100) NOT NULL,
  `county_id` INT(11) NOT NULL,
  `city_id` INT(11) NOT NULL,
  `startDate` DATETIME NOT NULL,
  `returnDate` DATETIME NOT NULL,
  `price` DOUBLE NOT NULL,
  `taxeRate` DOUBLE NOT NULL , PRIMARY KEY (`id`)
) ENGINE = InnoDB;
