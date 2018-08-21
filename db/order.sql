CREATE TABLE `arretmerje`.`order` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `user_id` INT(11) NOT NULL,
  `fly_id` INT(11) NOT NULL,
  `hotel_id` INT(11) NOT NULL,
  `travel_id` INT(11) NOT NULL,
  `nbPerson` INT(10) NOT NULL,
  `totalAmount` DOUBLE NOT NULL,
  `createdAt` DATETIME NOT NULL , PRIMARY KEY (`id`)
) ENGINE = InnoDB;
