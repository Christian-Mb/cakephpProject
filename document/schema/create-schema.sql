-- MySQL Script generated by MySQL Workbench
-- Mon Nov 18 21:28:07 2019
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema gestcharge
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema gestcharge
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `gestcharge` DEFAULT CHARACTER SET utf8mb4 ;
USE `gestcharge` ;

-- -----------------------------------------------------
-- Table `gestcharge`.`periods`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gestcharge`.`periods` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `gestcharge`.`specialties`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gestcharge`.`specialties` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `gestcharge`.`blocks`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gestcharge`.`blocks` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `code` VARCHAR(10) NOT NULL,
  `name` VARCHAR(50) NOT NULL,
  `periods_id` INT(11) NOT NULL,
  `specialties_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`, `periods_id`, `specialties_id`),
  INDEX `blocks_periods_FK` (`periods_id` ASC),
  INDEX `blocks_specialties0_FK` (`specialties_id` ASC),
  CONSTRAINT `blocks_periods_FK`
    FOREIGN KEY (`periods_id`)
    REFERENCES `gestcharge`.`periods` (`id`),
  CONSTRAINT `blocks_specialties0_FK`
    FOREIGN KEY (`specialties_id`)
    REFERENCES `gestcharge`.`specialties` (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `gestcharge`.`courses`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gestcharge`.`courses` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(70) NOT NULL,
  `hourscm` FLOAT NOT NULL,
  `hourstd` FLOAT NOT NULL,
  `hourstp` FLOAT NOT NULL,
  `code` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `courses_AK` (`code` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `gestcharge`.`blocks_courses`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gestcharge`.`blocks_courses` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `courses_id` INT(11) NOT NULL,
  `blocks_id` INT(11) NOT NULL,
  `numep` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`id`, `blocks_id`, `courses_id`),
  INDEX `contenir_courses_FK` (`courses_id` ASC),
  INDEX `contenir_blocks0_FK` (`blocks_id` ASC),
  CONSTRAINT `contenir_blocks0_FK`
    FOREIGN KEY (`blocks_id`)
    REFERENCES `gestcharge`.`blocks` (`id`),
  CONSTRAINT `contenir_courses_FK`
    FOREIGN KEY (`courses_id`)
    REFERENCES `gestcharge`.`courses` (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `gestcharge`.`dates`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gestcharge`.`dates` (
  `id` DATE NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `gestcharge`.`institutions`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gestcharge`.`institutions` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(30) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `gestcharge`.`departments`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gestcharge`.`departments` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(30) NOT NULL,
  `institutions_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`, `institutions_id`),
  INDEX `departments_institutions_FK` (`institutions_id` ASC),
  CONSTRAINT `departments_institutions_FK`
    FOREIGN KEY (`institutions_id`)
    REFERENCES `gestcharge`.`institutions` (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `gestcharge`.`formations`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gestcharge`.`formations` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(50) NOT NULL,
  `departments_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`, `departments_id`),
  INDEX `formations_departments_FK` (`departments_id` ASC),
  CONSTRAINT `formations_departments_FK`
    FOREIGN KEY (`departments_id`)
    REFERENCES `gestcharge`.`departments` (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `gestcharge`.`domains`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gestcharge`.`domains` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(50) NOT NULL,
  `formations_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`, `formations_id`),
  INDEX `domains_formations_FK` (`formations_id` ASC),
  CONSTRAINT `domains_formations_FK`
    FOREIGN KEY (`formations_id`)
    REFERENCES `gestcharge`.`formations` (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `gestcharge`.`sites`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gestcharge`.`sites` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(10) NOT NULL,
  `adress` VARCHAR(60) NOT NULL,
  `town` VARCHAR(30) NOT NULL,
  `zipcode` VARCHAR(5) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `gestcharge`.`teachers`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gestcharge`.`teachers` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `firstname` VARCHAR(25) NOT NULL,
  `lastname` VARCHAR(25) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `gestcharge`.`sessions`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gestcharge`.`sessions` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `groupscm` INT(11) NOT NULL,
  `groupstd` INT(11) NOT NULL,
  `groupstp` INT(11) NOT NULL,
  `courses_id` INT(11) NOT NULL,
  `dates_starts_id` DATE NOT NULL,
  `dates_ends_id` DATE NOT NULL,
  `teachers_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`, `teachers_id`, `courses_id`, `dates_starts_id`, `dates_ends_id`),
  INDEX `sessions_courses_FK` (`courses_id` ASC),
  INDEX `sessions_dates0_FK` (`dates_starts_id` ASC),
  INDEX `sessions_dates1_FK` (`dates_ends_id` ASC),
  INDEX `sessions_teachers2_FK` (`teachers_id` ASC),
  CONSTRAINT `sessions_courses_FK`
    FOREIGN KEY (`courses_id`)
    REFERENCES `gestcharge`.`courses` (`id`),
  CONSTRAINT `sessions_dates0_FK`
    FOREIGN KEY (`dates_starts_id`)
    REFERENCES `gestcharge`.`dates` (`id`),
  CONSTRAINT `sessions_dates1_FK`
    FOREIGN KEY (`dates_ends_id`)
    REFERENCES `gestcharge`.`dates` (`id`),
  CONSTRAINT `sessions_teachers2_FK`
    FOREIGN KEY (`teachers_id`)
    REFERENCES `gestcharge`.`teachers` (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `gestcharge`.`sessions_teachers`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gestcharge`.`sessions_teachers` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `sessions_id` INT(11) NOT NULL,
  `teachers_id` INT(11) NOT NULL,
  `hourscm` FLOAT NOT NULL,
  `hourstd` FLOAT NOT NULL,
  `hourstp` FLOAT NOT NULL,
  PRIMARY KEY (`id`, `sessions_id`, `teachers_id`),
  INDEX `participer_sessions_FK` (`sessions_id` ASC),
  INDEX `participer_teachers0_FK` (`teachers_id` ASC),
  CONSTRAINT `participer_sessions_FK`
    FOREIGN KEY (`sessions_id`)
    REFERENCES `gestcharge`.`sessions` (`id`),
  CONSTRAINT `participer_teachers0_FK`
    FOREIGN KEY (`teachers_id`)
    REFERENCES `gestcharge`.`teachers` (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `gestcharge`.`sites_specialties`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `gestcharge`.`sites_specialties` (
  `sites_id` INT(11) NOT NULL,
  `specialties_id` INT(11) NOT NULL,
  PRIMARY KEY (`sites_id`, `specialties_id`),
  INDEX `sitesspe_specialties_FK` (`specialties_id` ASC),
  CONSTRAINT `sitesspe_sites0_FK`
    FOREIGN KEY (`sites_id`)
    REFERENCES `gestcharge`.`sites` (`id`),
  CONSTRAINT `sitesspe_specialties_FK`
    FOREIGN KEY (`specialties_id`)
    REFERENCES `gestcharge`.`specialties` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
