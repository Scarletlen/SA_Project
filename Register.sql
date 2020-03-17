CREATE DATABASE register;
CREATE TABLE `register`.`users` ( `userid` INT(10) NOT NULL , `first_name` VARCHAR(50) NOT NULL , `last_name` VARCHAR(50) NOT NULL , `email` VARCHAR(50) NOT NULL , `password` VARCHAR(50) NOT NULL , `time` DATETIME NOT NULL , PRIMARY KEY (`userid`), UNIQUE `email` (`email`)) ENGINE = InnoDB;