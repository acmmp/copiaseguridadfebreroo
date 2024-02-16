<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/index.css">
    <link href="js/js.js" rel="stylesheet">
    <link rel="icon" href="img/icono.jpg" type="image/x-icon">

    <title>Restaurante</title>
</head>
<body>
<header class="main-header">
        <div class="container container--flex">
            <div class="logo-container column column--50">
            <h1 class="logo"><a href="indexparauserlogeado.php">Kutral</a></h1>
            </div>
            <div class="main-header__contactInfo column column--50">
                 <div class="main-header__contactInfo__phone">
                    <span class="icon-phone">685 845 487</span>
                 </div>
                 <p class="main-header__contactInfo__address">
                    <span class="icon-location">Urb las Dunas 123 - Ica, Malaga</span>
                 </p>
            </div>
        </div>
    </header>

    <nav class="main-nav">
        <div class="container container--flex">

            <span class="icon-menu" id="btnmenu"></span>

            <ul class="menu" id="menu">
                <li class="menu__item"><a href="indexparauserlogeado.php" class="menu__link menu__link--select">Inicio</a></li>
                <li class="menu__item"><a href="" class="menu__link">Nosotros</a></li>
                <li class="menu__item"><a href="hacerreserva_logeado.php" class="menu__link">Reservar Mesa</a></li>
                <li class="menu__item"><a href="mis_reservas_user.php" class="menu__link">Mis reservas</a></li>
            </ul>

            <ul class="menu" id="menu">
                
           
                <li class="menu__item"><a href="cerrar_sesion.php" class="menu__link">Cerrar sesion</a></li>
            </ul>

        </div>
    </nav>



   
</body>