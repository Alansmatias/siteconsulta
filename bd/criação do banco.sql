-- -----------------------------------------------------
-- Schema ambiental
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `ambiental` DEFAULT CHARACTER SET utf8 ;
USE `ambiental` ;

-- -----------------------------------------------------
-- Table `ambiental`.`tb_processo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ambiental`.`tb_processo` ;

CREATE TABLE IF NOT EXISTS `ambiental`.`tb_processo` (
  `id_processo` INT NOT NULL AUTO_INCREMENT,
  `nome_interessado` VARCHAR(200) NOT NULL,
  `cpfcnpj` INT NOT NULL,
  PRIMARY KEY (`id_processo`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ambiental`.`tb_statusProcesso`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ambiental`.`tb_statusProcesso` ;

CREATE TABLE IF NOT EXISTS `ambiental`.`tb_statusProcesso` (
  `id_statusProcesso` INT NOT NULL AUTO_INCREMENT,
  `tb_processo_id_processo` INT NOT NULL,
  `status_processo` VARCHAR(200) NULL,
  `dataStatus` DATE NULL,
  PRIMARY KEY (`id_statusProcesso`),
  INDEX `fk_tb_statusProcesso_tb_processo_idx` (`tb_processo_id_processo` ASC) ,
  CONSTRAINT `fk_tb_statusProcesso_tb_processo`
    FOREIGN KEY (`tb_processo_id_processo`)
    REFERENCES `ambiental`.`tb_processo` (`id_processo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;