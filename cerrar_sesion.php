<?php
session_start(); // Inicia la sesión

// Elimina todas las variables de sesión
session_unset();

// Destruye la sesión
session_destroy();

// Redirige al usuario a la página de inicio o a cualquier otra página que desees después de cerrar sesión
header("Location: indexcerrarsesion.php");
exit();
?>
