-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';






CREATE TABLE IF NOT EXISTS `mydb`.`saesa_ev_criterio_has_saesa_ev_seccion` (
  `saesa_ev_criterio_id` INT(11) NOT NULL,
  `saesa_ev_seccion_id` INT(11) NOT NULL,
  `wp_users_ID` BIGINT(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`saesa_ev_criterio_id`, `saesa_ev_seccion_id`, `wp_users_ID`),
  INDEX `fk_saesa_ev_criterio_has_saesa_ev_seccion_saesa_ev_seccion1_idx` (`saesa_ev_seccion_id` ASC),
  INDEX `fk_saesa_ev_criterio_has_saesa_ev_seccion_saesa_ev_criterio_idx` (`saesa_ev_criterio_id` ASC),
  INDEX `fk_saesa_ev_criterio_has_saesa_ev_seccion_wp_users1_idx` (`wp_users_ID` ASC),
  CONSTRAINT `fk_saesa_ev_criterio_has_saesa_ev_seccion_saesa_ev_criterio`
    FOREIGN KEY (`saesa_ev_criterio_id`)
    REFERENCES `mydb`.`saesa_ev_criterio` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_saesa_ev_criterio_has_saesa_ev_seccion_saesa_ev_seccion1`
    FOREIGN KEY (`saesa_ev_seccion_id`)
    REFERENCES `wordpress`.`saesa_ev_seccion` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_saesa_ev_criterio_has_saesa_ev_seccion_wp_users1`
    FOREIGN KEY (`wp_users_ID`)
    REFERENCES `wordpress`.`wp_users` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`privilegio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`privilegio` (
  `id` INT(11) NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `wordpress`.`wp_users_has_privilegio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `wordpress`.`wp_users_has_privilegio` (
  `wp_users_ID` BIGINT(20) UNSIGNED NOT NULL,
  `privilegio_id` INT(11) NOT NULL,
  PRIMARY KEY (`wp_users_ID`, `privilegio_id`),
  INDEX `fk_wp_users_has_privilegio_privilegio1_idx` (`privilegio_id` ASC),
  INDEX `fk_wp_users_has_privilegio_wp_users1_idx` (`wp_users_ID` ASC),
  CONSTRAINT `fk_wp_users_has_privilegio_wp_users1`
    FOREIGN KEY (`wp_users_ID`)
    REFERENCES `wordpress`.`wp_users` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_wp_users_has_privilegio_privilegio1`
    FOREIGN KEY (`privilegio_id`)
    REFERENCES `wordpress`.`privilegio` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB



-- -----------------------------------------------------
-- Table `mydb`.`evaluacion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `wordpress`.`evaluacion` (
  `id` INT(11) NOT NULL,
  `fecha` DATE NOT NULL,
  `ponderacion` INT(2) NOT NULL,
  `nota` FLOAT NOT NULL,
  `wp_users_ID` BIGINT(20) UNSIGNED NOT NULL,
  `saesa_ev_criterio_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`, `wp_users_ID`, `saesa_ev_criterio_id`),
  INDEX `fk_evaluacion_wp_users1_idx` (`wp_users_ID` ASC),
  INDEX `fk_evaluacion_saesa_ev_criterio1_idx` (`saesa_ev_criterio_id` ASC),
  CONSTRAINT `fk_evaluacion_wp_users1`
    FOREIGN KEY (`wp_users_ID`)
    REFERENCES `wordpress`.`wp_users` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_evaluacion_saesa_ev_criterio1`
    FOREIGN KEY (`saesa_ev_criterio_id`)
    REFERENCES `mydb`.`saesa_ev_criterio` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `wordpress` ;







-- -----------------------------------------------------
-- Table `wordpress`.`saesa_ev_seccion_has_wp_users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `wordpress`.`saesa_ev_seccion_has_wp_users` (
  `saesa_ev_seccion_id` INT(11) NOT NULL,
  `wp_users_ID` BIGINT(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`saesa_ev_seccion_id`, `wp_users_ID`),
  INDEX `fk_saesa_ev_seccion_has_wp_users_wp_users1_idx` (`wp_users_ID` ASC),
  INDEX `fk_saesa_ev_seccion_has_wp_users_saesa_ev_seccion_idx` (`saesa_ev_seccion_id` ASC),
  CONSTRAINT `fk_saesa_ev_seccion_has_wp_users_saesa_ev_seccion`
    FOREIGN KEY (`saesa_ev_seccion_id`)
    REFERENCES `wordpress`.`saesa_ev_seccion` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_saesa_ev_seccion_has_wp_users_wp_users1`
    FOREIGN KEY (`wp_users_ID`)
    REFERENCES `wordpress`.`wp_users` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;



