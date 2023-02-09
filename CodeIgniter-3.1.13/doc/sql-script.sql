-- -----------------------------------------------------
-- Schema order_system
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `order_system` ;

-- -----------------------------------------------------
-- Schema order_system
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `order_system`;
USE `order_system` ;

-- -----------------------------------------------------
-- Table `order_system`.`user`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `order_system`.`user` ;

CREATE TABLE IF NOT EXISTS `order_system`.`user` (
  `id_user` INT NOT NULL AUTO_INCREMENT,
  `first_name` VARCHAR(45) NULL,
  `last_name` VARCHAR(45) NULL,
  `username` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `password` VARCHAR(45) NULL,
  `address` VARCHAR(100) NULL,
  `salt` VARCHAR(45) NULL,
  `role` VARCHAR(45) NULL,
  `created` TIMESTAMP NULL,
  PRIMARY KEY (`id_user`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `order_system`.`product_category`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `order_system`.`product_category` ;

CREATE TABLE IF NOT EXISTS `order_system`.`product_category` (
  `product_category_id` INT NOT NULL AUTO_INCREMENT,
  `product_category_name` VARCHAR(45) NULL,
  `image` VARCHAR(250) NULL,
  PRIMARY KEY (`product_category_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `order_system`.`product`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `order_system`.`product` ;

CREATE TABLE IF NOT EXISTS `order_system`.`product` (
  `product_id` INT NOT NULL AUTO_INCREMENT,
  `product_name` VARCHAR(45) NULL,
  `product_category_id` INT NULL,
  `product_description` VARCHAR(100) NULL,
  `product_price` FLOAT NULL,
  PRIMARY KEY (`product_id`),
  CONSTRAINT `product_category`
    FOREIGN KEY (`product_category_id`)
    REFERENCES `order_system`.`product_category` (`product_category_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `order_system`.`orders`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `order_system`.`orders` ;

CREATE TABLE IF NOT EXISTS `order_system`.`orders` (
  `orders_id` INT NOT NULL AUTO_INCREMENT,
  `user_id` INT NOT NULL,
  `status` varchar(20) NOT NULL,
  `table` INT NULL,
  `created` TIMESTAMP NULL,
  PRIMARY KEY (`orders_id`),
  CONSTRAINT `user_id`
    FOREIGN KEY (`user_id`)
    REFERENCES `order_system`.`user` (`id_user`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `order_system`.`product_order`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `order_system`.`product_order` ;

CREATE TABLE IF NOT EXISTS `order_system`.`product_order` (
  `orders_id` INT NOT NULL,
  `product_id` INT NOT NULL,
  `number` INT NOT NULL,
  CONSTRAINT `orders_id`
    FOREIGN KEY (`orders_id`)
    REFERENCES `order_system`.`orders` (`orders_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `product_id`
    FOREIGN KEY (`product_id`)
    REFERENCES `order_system`.`product` (`product_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


