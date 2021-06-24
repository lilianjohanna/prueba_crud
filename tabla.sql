CREATE TABLE proveedores(
	id int unsigned not null primary key auto_increment,
	nombre varchar(255)
);
CREATE TABLE productos(
    id bigint unsigned not null  primary key auto_increment,
    nombre varchar(255),
	precio int(8),
	cantidad int(5),
	proveedor_id int(5) FOREIGN KEY REFERENCES proveedores(id)
);
