<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../Ej-9%20instagramo/style.css">
    <title>Contador de visitas</title>
</head>
<body>
<?php
require_once ("../Ej-8 Punto de partida/header.php");
?>

<section class="w3-center">
    <form action="controlplanetario.php" method="post">
        <h1>Introduzca tu nombre</h1>
        <label for="nombre"><input type="text" name="nombre" id="nombre"></label>
        <h1>Introduce al planeta perteneciente </h1>
        <label for="dado">selecciona tu planeta
            <select name="planeta">
                <option value="tierra">tierra</option>
                <option value="marte">marte</option>
                <option value="venus">venus</option>
                <option value="luna">luna</option>
            </select>
        </label>

        <label for="pasar"><input type="submit" value="pasar"></label>

    </form>
</section>
</body>
</html>