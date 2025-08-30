create table empleados (
    id int NOT NULL AUTO_INCREMENT,
    nombre varchar(250),
    salario float,
    departamento varchar(20),
    PRIMARY KEY (id)
)

insert into empleados (nombre, salario, departamento) values 
('Ana', 5000.00, 'Finanzas'),
('Luis', 6000.00, 'Finanzas'),
('Maria', 4500.00, 'Ventas'),
('Carlos', 4000.00, 'Ventas'),
('Jose', 3800.00, 'IT'),
('Laura', 3900.00, 'IT');

select departamento, avg(salario) as salario_promedio from empleados group by departamento order by salario_promedio desc;