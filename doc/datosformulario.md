Parte 4: Validación y sanitización de datos

Validación: Verificar que los datos sean correctos (por ejemplo, verificar que un email sea válido).

Sanitización: Limpiar los datos para eliminar caracteres no deseados.

Funciones útiles para validación:
filter_var($valor, FILTER_VALIDATE_EMAIL): Validar email.
filter_var($valor, FILTER_VALIDATE_INT): Validar número entero.



Funciones útiles para sanitización:
filter_var($valor, FILTER_SANITIZE_STRING): Eliminar etiquetas HTML y caracteres peligrosos.
filter_var($valor, FILTER_SANITIZE_EMAIL): Limpiar un email.



--Para dar permisos en un formulario de html php y se puede acceder alos archivos se coloca lo siguiente

enctype = "multipart/form-data"