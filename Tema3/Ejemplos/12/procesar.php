<?php


$email = htmlspecialchars($_POST['email'] ?? '');
$password = htmlspecialchars($_POST['password'] ?? '');

// mostrar los datos recibidos en el formulario
echo "Email: " . $email . "<br>";
echo "Contraseña: " . $password . "<br>";