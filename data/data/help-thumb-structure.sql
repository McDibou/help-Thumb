-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema help-thumb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema help-thumb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `help-thumb` DEFAULT CHARACTER SET utf8 ;
USE `help-thumb` ;

-- -----------------------------------------------------
-- Table `help-thumb`.`helpthumb_role`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `help-thumb`.`helpthumb_role` (
  `id_role` INT NOT NULL AUTO_INCREMENT,
  `name_role` VARCHAR(60) NOT NULL,
  PRIMARY KEY (`id_role`),
  UNIQUE INDEX `name_role_UNIQUE` (`name_role` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `help-thumb`.`helpthumb_user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `help-thumb`.`helpthumb_user` (
  `id_user` INT NOT NULL AUTO_INCREMENT,
  `name_user` VARCHAR(80) NOT NULL,
  `username_user` VARCHAR(80) NOT NULL,
  `mail_user` VARCHAR(255) NOT NULL,
  `pseudo_user` VARCHAR(20) NOT NULL,
  `password_user` VARCHAR(255) NOT NULL,
  `key_user` VARCHAR(255) NOT NULL,
  `active_user` TINYINT NOT NULL,
  `date_user` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `role_id` INT NOT NULL,
  PRIMARY KEY (`id_user`),
  INDEX `fk_user_role_idx` (`role_id` ASC),
  UNIQUE INDEX `pseudo_user_UNIQUE` (`pseudo_user` ASC),
  UNIQUE INDEX `key_user_UNIQUE` (`key_user` ASC),
  UNIQUE INDEX `mail_user_UNIQUE` (`mail_user` ASC),
  CONSTRAINT `fk_user_role`
    FOREIGN KEY (`role_id`)
    REFERENCES `help-thumb`.`helpthumb_role` (`id_role`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `help-thumb`.`helpthumb_subject`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `help-thumb`.`helpthumb_subject` (
  `id_subject` INT NOT NULL AUTO_INCREMENT,
  `name_subject` VARCHAR(80) NOT NULL,
  PRIMARY KEY (`id_subject`),
  UNIQUE INDEX `name_subject_UNIQUE` (`name_subject` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `help-thumb`.`helpthumb_category`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `help-thumb`.`helpthumb_category` (
  `id_category` INT NOT NULL AUTO_INCREMENT,
  `name_category` VARCHAR(80) NOT NULL,
  PRIMARY KEY (`id_category`),
  UNIQUE INDEX `name_category_UNIQUE` (`name_category` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `help-thumb`.`helpthumb_format`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `help-thumb`.`helpthumb_format` (
  `id_format` INT NOT NULL AUTO_INCREMENT,
  `name_format` VARCHAR(80) NOT NULL,
  PRIMARY KEY (`id_format`),
  UNIQUE INDEX `name_format_UNIQUE` (`name_format` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `help-thumb`.`helpthumb_content`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `help-thumb`.`helpthumb_content` (
  `id_content` INT NOT NULL AUTO_INCREMENT,
  `name_content` VARCHAR(50) NOT NULL,
  `link_content` VARCHAR(255) NOT NULL,
  `desc_content` TINYTEXT NOT NULL,
  `level_content` TINYINT NOT NULL,
  `like_content` INT NULL,
  `date_content` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `subject_id` INT NOT NULL,
  `user_id` INT NOT NULL,
  `category_id` INT NOT NULL,
  `format_id` INT NOT NULL,
  PRIMARY KEY (`id_content`),
  INDEX `fk_content_subject1_idx` (`subject_id` ASC),
  INDEX `fk_content_user1_idx` (`user_id` ASC),
  UNIQUE INDEX `link_content_UNIQUE` (`link_content` ASC),
  INDEX `fk_content_category1_idx` (`category_id` ASC),
  INDEX `fk_content_type1_idx` (`format_id` ASC),
  CONSTRAINT `fk_content_subject1`
    FOREIGN KEY (`subject_id`)
    REFERENCES `help-thumb`.`helpthumb_subject` (`id_subject`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_content_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `help-thumb`.`helpthumb_user` (`id_user`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_content_category1`
    FOREIGN KEY (`category_id`)
    REFERENCES `help-thumb`.`helpthumb_category` (`id_category`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_content_type1`
    FOREIGN KEY (`format_id`)
    REFERENCES `help-thumb`.`helpthumb_format` (`id_format`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `help-thumb`.`helpthumb_favory`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `help-thumb`.`helpthumb_favory` (
  `user_id_favory` INT NOT NULL,
  `content_id_favory` INT NOT NULL,
  PRIMARY KEY (`user_id_favory`, `content_id_favory`),
  INDEX `fk_user_has_content_content1_idx` (`content_id_favory` ASC),
  INDEX `fk_user_has_content_user1_idx` (`user_id_favory` ASC),
  CONSTRAINT `fk_user_has_content_user1`
    FOREIGN KEY (`user_id_favory`)
    REFERENCES `help-thumb`.`helpthumb_user` (`id_user`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_has_content_content1`
    FOREIGN KEY (`content_id_favory`)
    REFERENCES `help-thumb`.`helpthumb_content` (`id_content`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `help-thumb`.`helpthumb_type`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `help-thumb`.`helpthumb_type` (
  `id_type` INT NOT NULL,
  `name_type` VARCHAR(80) NOT NULL,
  PRIMARY KEY (`id_type`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `help-thumb`.`helpthumb_notification`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `help-thumb`.`helpthumb_notification` (
  `id_notification` INT NOT NULL AUTO_INCREMENT,
  `date_notification` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `read_notification` TINYINT NOT NULL,
  `user_id` INT NOT NULL,
  `content_idt` INT NOT NULL,
  `type_id` INT NOT NULL,
  PRIMARY KEY (`id_notification`),
  INDEX `fk_notification_user1_idx` (`user_id` ASC),
  INDEX `fk_notification_content1_idx` (`content_idt` ASC),
  INDEX `fk_notification_type1_idx` (`type_id` ASC),
  CONSTRAINT `fk_notification_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `help-thumb`.`helpthumb_user` (`id_user`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_notification_content1`
    FOREIGN KEY (`content_idt`)
    REFERENCES `help-thumb`.`helpthumb_content` (`id_content`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_notification_type1`
    FOREIGN KEY (`type_id`)
    REFERENCES `help-thumb`.`helpthumb_type` (`id_type`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
