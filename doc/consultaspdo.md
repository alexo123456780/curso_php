
# Guía Completa de PDO (PHP Data Objects) con MySQL

## Índice
1. [Conexión a la Base de Datos](#conexión)
2. [Consultas Básicas](#consultas-básicas)
3. [Métodos de Fetch](#métodos-de-fetch)
4. [Consultas Preparadas](#consultas-preparadas)
5. [Transacciones](#transacciones)
6. [Manejo de Errores](#manejo-de-errores)

## Conexión

### Establecer conexión PDO
```php
$host = 'localhost';
$dbname = 'mi_base_datos';
$usuario = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $usuario, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "¡Conexión exitosa!";
} catch(PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}




$stmt = $pdo->query("SELECT * FROM usuarios");


Consultas SELECT
-- Seleccionar todos los registros de una tabla
SELECT * FROM usuarios;

-- Seleccionar columnas específicas
SELECT nombre, email FROM usuarios;

-- Seleccionar con condición WHERE
SELECT * FROM usuarios WHERE id = 1;

-- Seleccionar con múltiples condiciones
SELECT * FROM usuarios WHERE edad > 18 AND ciudad = 'Madrid';

-- Ordenar resultados
SELECT * FROM usuarios ORDER BY nombre ASC;

-- Limitar resultados
SELECT * FROM usuarios LIMIT 10;

-- Buscar con LIKE
SELECT * FROM usuarios WHERE nombre LIKE 'Juan%';

Copy

Apply

Consultas INSERT
-- Inserción básica
INSERT INTO usuarios (nombre, email) VALUES ('Juan', 'juan@email.com');

-- Inserción múltiple
INSERT INTO usuarios (nombre, email) VALUES 
('Juan', 'juan@email.com'),
('Maria', 'maria@email.com');

Copy

Apply

Consultas UPDATE
-- Actualización simple
UPDATE usuarios SET nombre = 'Pedro' WHERE id = 1;

-- Actualización múltiple
UPDATE usuarios SET 
    nombre = 'Nuevo Nombre', 
    email = 'nuevo@email.com' 
WHERE id = 1;

Copy

Apply

Consultas DELETE
-- Eliminar un registro específico
DELETE FROM usuarios WHERE id = 1;

-- Eliminar registros con condición
DELETE FROM usuarios WHERE edad < 18;

Copy

Apply

Consultas JOIN
-- INNER JOIN
SELECT usuarios.nombre, pedidos.producto 
FROM usuarios 
INNER JOIN pedidos ON usuarios.id = pedidos.usuario_id;

-- LEFT JOIN
SELECT usuarios.nombre, pedidos.producto 
FROM usuarios 
LEFT JOIN pedidos ON usuarios.id = pedidos.usuario_id;

Copy

Apply

Consultas Agregadas
-- Contar registros
SELECT COUNT(*) FROM usuarios;

-- Sumar valores
SELECT SUM(cantidad) FROM ventas;

-- Promedio
SELECT AVG(precio) FROM productos;

-- Máximo y mínimo
SELECT MAX(precio) FROM productos;
SELECT MIN(precio) FROM productos;

-- Agrupar resultados
SELECT ciudad, COUNT(*) 
FROM usuarios 
GROUP BY ciudad;

Copy


Subconsultas
-- Subconsulta en WHERE
SELECT * FROM productos 
WHERE precio > (SELECT AVG(precio) FROM productos);

-- Subconsulta en FROM
SELECT nombre 
FROM (SELECT * FROM usuarios WHERE edad > 18) AS usuarios_mayores;




