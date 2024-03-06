-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema clubGolf
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema clubGolf
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `clubGolf` DEFAULT CHARACTER SET utf8 ;
USE `clubGolf` ;

-- -----------------------------------------------------
-- Table `clubGolf`.`ClubGolf`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clubGolf`.`ClubGolf` (
  `idClubGolf` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  `localidad` VARCHAR(45) NULL,
  `recordGolpes` INT NULL,
  `Escuela` INT NULL,
  PRIMARY KEY (`idClubGolf`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `clubGolf`.`Hoyo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clubGolf`.`Hoyo` (
  `idHoyo` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  `numero` INT NULL,
  `longitud` INT NULL,
  `lago` INT NULL,
  `numCurvas` INT NULL,
  `par` INT NULL,
  `numBunkers` INT NULL,
  `idClubGolf` INT NOT NULL,
  PRIMARY KEY (`idHoyo`),
  CONSTRAINT `fk_Hoyo_ClubGolf`
    FOREIGN KEY (`idClubGolf`)
    REFERENCES `clubGolf`.`ClubGolf` (`idClubGolf`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `clubGolf`.`Socio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clubGolf`.`Socio` (
  `idSocio` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  `edad` VARCHAR(45) NULL,
  `sexo` INT NULL,
  `cuota` INT NULL,
  PRIMARY KEY (`idSocio`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `clubGolf`.`ClubGolf_has_Socio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clubGolf`.`ClubGolf_has_Socio` (
  `idClubGolf` INT NOT NULL,
  `idSocio` INT NOT NULL,
  `RecordGolpes` INT NULL,
  PRIMARY KEY (`idClubGolf`, `idSocio`),
  CONSTRAINT `fk_ClubGolf_has_Socio_ClubGolf1`
    FOREIGN KEY (`idClubGolf`)
    REFERENCES `clubGolf`.`ClubGolf` (`idClubGolf`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ClubGolf_has_Socio_Socio1`
    FOREIGN KEY (`idSocio`)
    REFERENCES `clubGolf`.`Socio` (`idSocio`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
