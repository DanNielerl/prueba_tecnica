create table personas (
    id int NOT NULL AUTO_INCREMENT,
    nombre varchar(150),
    apellido varchar(150),
    ci varchar(20),
    fecha_nacimiento date,
    PRIMARY KEY (id)
)

insert into personas (nombre, apellido, ci, fecha_nacimiento) values
('Ana', 'Gonzalez', '1234567', '1990-05-12'),
('Luis', 'Perez', '2345678', '1985-10-03'),
('Maria', 'Lopez', '3456789', '1992-07-21'),
('Carlos', 'Ramirez', '4567890', '1988-12-15'),
('Laura', 'Fernandez', '5678901', '1995-03-30');
