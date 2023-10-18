/*
Crear tabla
tipos de datos : int(nº caracteres), entero
integer: (Nº Ccaracteres), entero
varchar: (Nº Caracteres), string/alfanumerico
char: (Nº Caracteres), string/alfanumerico
float(nº cifrasm nº decimales) decimal/coma flotante
date, time, timestamp

text    me permite guardar 65000 caracteres
mediumtext me permite guardar 16millones de caracteres
longtext me permite guardar 4billones de caracteres

*/
CREATE TABLE usuarios(
    id  int(11)
    nombre  varchar(100)
    apellidos   varchar(255)
    email   varchar(100)
    password varchar(255)
);