CREATE TABLE compras(
id_compra INT(5) AUTO_INCREMENT PRIMARY KEY,
codigo INT(10),
producto VARCHAR(50),
descripcion VARCHAR(255),
precio DECIMAL(5, 2)
);