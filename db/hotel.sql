CREATE TABLE `arretmerje`.`hotel` ( 
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(150) NOT NULL,
  `city_id` INT(11) NOT NULL,
  `country_id` INT(11) NOT NULL,
  `price` DOUBLE NOT NULL,
  `taxeRate` DOUBLE NOT NULL,
  `nbPerson` INT NOT NULL , PRIMARY KEY (`id`)
) ENGINE = InnoDB;
