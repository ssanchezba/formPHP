<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post">
        <h2>Hola</h2>
        <p>Inicia tu registro</p>
        <div class="input-wrapper">
            <input type="text" name="name" placeholder="Nombre" autocomplete="name">
            <img class="input-icon" src="images/name.svg" alt="">  
        </div>
        <div class="input-wrapper">
            <input type="email" name="email" placeholder="Email"> 
            <img class="input-icon" src="images/email.svg" alt="">   
        </div>
        <div class="input-wrapper">
            <input type="text" name="direction" placeholder="Direccion">
            <img class="input-icon" src="images/direction.svg" alt="">    
        </div>
        <div class="input-wrapper">
            <input type="tel" name="phone" placeholder="Telefono" autocomplete="username"> 
            <img class="input-icon" src="images/phone.svg" alt=""> 
        </div>
        <div class="input-wrapper">
            <input type="password" name="password" placeholder="Contraseña" autocomplete="current-password">
            <img class="input-icon" src="images/password.svg" alt="">  
        </div>

        <input class="btn" type="submit" name="register" value="Enviar">
    </form>

    <?php
        include("registrar.php");
        include("correo.php")
    ?>
</body>
</html>