CREATE DATABASE EV1_BACKEND_SEC70;
CREATE USER 'EV1_BACKEND_SEC70'@'localhost' IDENTIFIED BY 'c11s42024';
GRANT ALL PRIVILEGES ON EV1_BACKEND_SEC70 . * TO 'EV1_BACKEND_SEC70'@'localhost';
FLUSH PRIVILEGES;

USE EV1_BACKEND_SEC70;

---------- CREAR TABLA PARA EVALUACIÓN 1 BACKEND----------------
CREATE TABLE mantenedor (
    id INT PRIMARY KEY,
    nombre_completo VARCHAR(50) NOT NULL UNIQUE, -- COSTRAINT
    direccion VARCHAR (60),
    numero_telefono VARCHAR (15),
    correo VARCHAR (50),
    solicitud_procesada BOOLEAN NOT NULL DEFAULT FALSE
)

---------------METODOS---------------------------
-- GET / ALL
SELECT id, nombre_completo,direccion,numero_telefono,correo,solicitud_procesada FROM mantenedor;

-- GET / BY ID
SELECT id, nombre_completo,direccion,numero_telefono,correo,solicitud_procesada FROM mantenedor WHERE id = 1;

-- POST
INSERT INTO mantenedor (id, nombre_completo,direccion,numero_telefono,correo,solicitud_procesada ) VALUES (1, 'Javiera Rivera Arraño', 'Ojos del salado 52', '+56950162622','riverajavieraa@gmail.com', true);
INSERT INTO mantenedor (id, nombre_completo,direccion,numero_telefono,correo,solicitud_procesada ) VALUES (2, 'Mathias Avila Riveros', 'Peñaflor 123', '+56957162622','mathias.avila@gmail.com', false);
INSERT INTO mantenedor (id, nombre_completo,direccion,numero_telefono,correo,solicitud_procesada ) VALUES (3, 'Fabían Ramírez Riveros', 'Padre Hurtado 456', '+56950162622','fabian.ramirez@gmail.com', true);
INSERT INTO mantenedor (id, nombre_completo,direccion,numero_telefono,correo,solicitud_procesada ) VALUES (4, 'Pepito Perez Pereira', 'Camino Lonquen 1', '+56950182622','pepito.perez@gmail.com', false);
INSERT INTO mantenedor (id, nombre_completo,direccion,numero_telefono,correo,solicitud_procesada ) VALUES (5, 'Daniel Fernandez Guajardo', 'Maipú 666', '+56955188622','daniel.fernandez@gmail.com', false);


-----------HABILITAR Y DESHABILITAR-------------------

-- PATCH / ENABLE
UPDATE mantenedor SET solicitud_procesada = true WHERE id = 2;
-- PATCH / DISABLE
UPDATE mantenedor SET solicitud_procesada = false WHERE id = 3;


------------ACTUALIZAR-----------------------------------
-- PUT
UPDATE mantenedor SET nombre_completo = 'Pablo Gandolfo Bustos' WHERE id =4 ;


----------BORRAR-------------------------------------

-- DELETE
DELETE FROM mantenedor WHERE id = 5;
