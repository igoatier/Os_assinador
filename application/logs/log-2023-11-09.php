<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-11-09 20:22:54 --> Query error: Duplicate column name 'url_image_user' - Invalid query: ALTER TABLE `usuarios` ADD `url_image_user` varchar(255) NULL
ERROR - 2023-11-09 20:22:54 --> Query error: Duplicate column name 'senha' - Invalid query: ALTER TABLE `clientes` ADD `senha` VARCHAR(200) NOT NULL;
ERROR - 2023-11-09 20:22:54 --> Query error: Table 'resets_de_senha' already exists - Invalid query: CREATE TABLE `resets_de_senha` ( 
                `id` INT NOT NULL AUTO_INCREMENT,
                `email` VARCHAR(200) NOT NULL , 
                `token` VARCHAR(255) NOT NULL , 
                `data_expiracao` DATETIME NOT NULL, 
                `token_utilizado` TINYINT NOT NULL,
                PRIMARY KEY (`id`))
              ENGINE = InnoDB
              DEFAULT CHARACTER SET = latin1;
        
ERROR - 2023-11-09 20:22:54 --> Query error: Duplicate entry '13' for key 'configuracoes.PRIMARY' - Invalid query: INSERT INTO `configuracoes` (`idConfig`, `config`, `valor`) VALUES (13, 'control_edit_vendas', 1);
ERROR - 2023-11-09 20:22:54 --> Query error: Duplicate column name 'desconto' - Invalid query: ALTER TABLE `lancamentos` ADD `desconto` DECIMAL(10, 2) NULL DEFAULT 0
ERROR - 2023-11-09 20:22:54 --> Query error: Duplicate column name 'valor_desconto' - Invalid query: ALTER TABLE `lancamentos` ADD `valor_desconto` DECIMAL(10, 2) NULL DEFAULT 0
ERROR - 2023-11-09 20:22:56 --> Query error: Duplicate column name 'desconto' - Invalid query: ALTER TABLE `os` ADD `desconto` DECIMAL(10, 2) NULL DEFAULT 0
ERROR - 2023-11-09 20:22:56 --> Query error: Duplicate column name 'valor_desconto' - Invalid query: ALTER TABLE `os` ADD `valor_desconto` DECIMAL(10, 2) NULL DEFAULT 0
ERROR - 2023-11-09 20:22:58 --> Query error: Duplicate column name 'valor_desconto' - Invalid query: ALTER TABLE `vendas` ADD `valor_desconto` DECIMAL(10, 2) NULL DEFAULT 0
ERROR - 2023-11-09 20:23:01 --> Query error: Duplicate entry '14' for key 'configuracoes.PRIMARY' - Invalid query: INSERT INTO `configuracoes` (`idConfig`, `config`, `valor`) VALUES (14, 'email_automatico', 1)
ERROR - 2023-11-09 20:23:01 --> Query error: Duplicate column name 'tipo_desconto' - Invalid query: ALTER TABLE `os` ADD `tipo_desconto` VARCHAR(8) NULL DEFAULT NULL
ERROR - 2023-11-09 20:23:01 --> Query error: Duplicate column name 'tipo_desconto' - Invalid query: ALTER TABLE `vendas` ADD `tipo_desconto` VARCHAR(8) NULL DEFAULT NULL
ERROR - 2023-11-09 20:23:01 --> Query error: Duplicate column name 'tipo_desconto' - Invalid query: ALTER TABLE `lancamentos` ADD `tipo_desconto` VARCHAR(8) NULL DEFAULT NULL
ERROR - 2023-11-09 20:23:01 --> Query error: Duplicate column name 'asaas_id' - Invalid query: ALTER TABLE `clientes` ADD `asaas_id` VARCHAR(255) NULL DEFAULT NULL
ERROR - 2023-11-09 20:23:01 --> Query error: Can't DROP 'asaas_id'; check that column/key exists - Invalid query: ALTER TABLE `usuarios` DROP `asaas_id`
ERROR - 2023-11-09 20:23:01 --> Query error: Duplicate entry '15' for key 'configuracoes.PRIMARY' - Invalid query: INSERT INTO `configuracoes` (`idConfig`, `config`, `valor`) VALUES (15, 'control_2vias', 0);
