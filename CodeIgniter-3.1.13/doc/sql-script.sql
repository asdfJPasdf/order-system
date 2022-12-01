
-- -----------------------------------------------------
-- Schema order-system
-- -----------------------------------------------------
DROP database if exists `order-system`;
CREATE SCHEMA IF NOT EXISTS `order-system` DEFAULT CHARACTER SET utf8 ;
USE `order-system` ;

-- -----------------------------------------------------
-- Table `order-system`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `order-system`.`user` (
  `user_id` INT NOT NULL AUTO_INCREMENT,
  `role` VARCHAR(45) NULL,
  `username` VARCHAR(45) NULL,
  `name` VARCHAR(45) NULL,
  `first_name` VARCHAR(45) NULL,
  `password` VARCHAR(45) NULL,
  `salt` VARCHAR(45) NULL,
  PRIMARY KEY (`user_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `order-system`.`order`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `order-system`.`order` (
  `order_id` INT NOT NULL AUTO_INCREMENT,
  `id_user` INT NOT NULL,
  PRIMARY KEY (`order_id`),
  FOREIGN KEY (id_user) REFERENCES `user`(user_id) ON DELETE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `order-system`.`product`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `order-system`.`product` (
  `id_product` INT NOT NULL AUTO_INCREMENT,
  `product_name` VARCHAR(45) NULL,
  PRIMARY KEY (`id_product`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `order-system`.`order_product`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `order-system`.`order_product` (
  `id_product` INT NOT NULL,
  `order_id` INT NOT NULL,
  FOREIGN KEY (id_product) REFERENCES product(id_product) ON DELETE CASCADE,
  FOREIGN KEY(order_id) REFERENCES `order`(order_id) ON DELETE CASCADE)
ENGINE = InnoDB;
