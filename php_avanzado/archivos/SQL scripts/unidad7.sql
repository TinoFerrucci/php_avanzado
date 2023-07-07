create table compras(
id_compro id(5) auto_increment primary key,
codigo int(10),
producto varchar(50),
descripcion varchar(255),
precio decimal(5, 2)
)