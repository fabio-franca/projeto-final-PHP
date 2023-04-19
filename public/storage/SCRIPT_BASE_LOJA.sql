CREATE DATABASE `loja`; 

CREATE TABLE `clients` (
  `id_client` int(6) NOT NULL AUTO_INCREMENT,
  `client_name` varchar(50) DEFAULT NULL,
  `client_email` varchar(50) DEFAULT NULL,
  `client_password` varchar(50) DEFAULT NULL,
  `client_cpf` varchar(15) DEFAULT NULL,
  `client_phone` varchar(20) DEFAULT NULL,
  `client_type` varchar(10) DEFAULT NULL,
  `client_adddress` varchar(50) DEFAULT NULL,
  `client_created_in` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_client`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;


CREATE TABLE `users` (
  `id_user` int(6) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) DEFAULT NULL,
  `user_email` varchar(50) DEFAULT NULL,
  `user_password` varchar(50) DEFAULT NULL,
  `user_cpf` varchar(15) DEFAULT NULL,
  `user_phone` varchar(20) DEFAULT NULL,
  `user_type` varchar(10) DEFAULT NULL,
  `user_adddress` varchar(50) DEFAULT NULL,
  `user_created_in` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;


CREATE TABLE `suppliers` (
  `id_supplier` int(6) NOT NULL AUTO_INCREMENT,
  `supplier_description` varchar(50) DEFAULT NULL,
  `supplier_cnpj` varchar(20) DEFAULT NULL,
  `supplier_email` varchar(50) DEFAULT NULL,
  `supplier_phone` varchar(20) DEFAULT NULL,
  `supplier_address` varchar(50) DEFAULT NULL,
  `supplier_created_in` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_supplier`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;


CREATE TABLE `products` (
  `id_product` int(6) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(40) DEFAULT NULL,
  `product_code` varchar(12) DEFAULT NULL,
  `product_price` float(6,2) DEFAULT NULL,
  `product_stock` int(4) DEFAULT NULL,
  `product_created_in` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_product`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;


CREATE TABLE `items` (
  `id_item` int(6) NOT NULL AUTO_INCREMENT,
  `product_id` int(6) DEFAULT NULL,
  `item_quantity` int(2) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `item_created_in` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_item`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;


CREATE TABLE `orders` (
  `id_order` int(11) NOT NULL AUTO_INCREMENT,
  `order_number` varchar(10) DEFAULT NULL,
  `client_id` int(6) DEFAULT NULL,
  `user_id` int(6) DEFAULT NULL,
  `order_created_in` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_order`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;


CREATE TABLE `logs` (
  `id_log` int(11) NOT NULL AUTO_INCREMENT,
  `log_content` text NOT NULL,
  `log_type` varchar(30) NOT NULL,
  `log_created_in` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_log`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- INSERTS
-- SENHA 1234 ou 1
INSERT INTO users(user_name, user_email, user_password, user_cpf, user_phone, user_type, user_adddress) 
VALUES(`FABIO`, `fabio@email.com`, `356a192b7913b04c54574d18c28d46e6395428ab`, `60393507335`, `85999544262`, `ADMIN`, `RUA BEM ALI 222`);


