<?php


$email = htmlspecialchars($_GET['email']);
$password = htmlspecialchars($_GET['password']);

// mostrar los datos recibidos en el formulario
echo "Email: " . $email . "<br>";
echo "Contraseña: " . $password . "<br>";