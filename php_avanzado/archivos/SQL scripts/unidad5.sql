create table consultas(
    id int AUTO_INCREMENT PRIMARY KEY,
    nombre varchar(30) not null,
    apellido varchar(30) not null,
    email varchar(50) not null,
    consulta text not null
);
