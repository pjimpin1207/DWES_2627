<?php

/*
Actividad 3.2
Descripcion: Formulario de registro con acceso segun perfil de uuario
Formulario de registro:
-Nombre usuario
-Email
-Contraseña
-Perfil de usuario(admin, edit, user)

Tipos de perfiles y privilegios:

-Admin: Añadir, eliminar, actualizar y consultar
- Edit: Añadir, actualizar y consultar
- User: Solo consultar
*/

// Models

// Negociacion

// obtner los detalles del formulario de registro
$usuario = $_POST ['usuario'] ?? '';
$email = $_POST ['email'] ?? '';
$password = $_POST ['password'] ?? '';
$perfil = $_POST ['perfil'] ?? '';

// validacion


//Vista
include 'view/acceso.view.php';