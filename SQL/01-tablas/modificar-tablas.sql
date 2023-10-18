-- renombrar una tabla
ALTER TABLE usuarios RENAME TO usuarios_renom 

-- cambiar nombre de una columna

ALTER TABLE usuarios_renom CHANGE apellidos apellido varchar(100) null;

-- cambiar una columna sin cambiar su nombre
ALTER TABLE usuarios_renom MODIFY apellidos char(40) not null;

-- añadir columna
ALTER TABLE usuarios_renom ADD website varchar(100) null;

-- añadir reestriccion
ALTER TABLE usuarios_renom ADD CONSTRAINT uq_email UNIQUE(email);

-- borrar columna
ALTER TABLE usuarios_renom DROP website;
