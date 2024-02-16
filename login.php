<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/index.css">
    <link href="js/js.js" rel="stylesheet">
 
    <title>Restaurante</title>
</head>
<body>
<?php require("head.php"); ?>
 <br><br><br><br><br><br><br>
 
    <main class="main">
<section class="login">
    <div class="login .container">
        <h2 class="main__title">Inicio sesion</h2>
        <ul class="fondo">
        <form action="login_process.php" method="post">
        <label for="email">Correo Electrónico:</label>
        <input type="email" name="email" required><br>
 
        <label for="password">Contraseña:</label>
        <input type="password" name="password" required><br>
 
        <input type="submit" value="Iniciar Sesión">
    </form>
    </div>
</section>
 
 <br><br><br><br><br><br><br><br>
<?php require("footer.php"); ?>
 
</body>
</html>