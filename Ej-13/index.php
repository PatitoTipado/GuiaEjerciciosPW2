<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../Ej-9%20instagramo/style.css">
    <title>Conociendo Inis  con el menu no saludable</title>
</head>
<body>
<?php
require_once ("../Ej-8 Punto de partida/header.php");
?>

<section class="w3-center">
    <form action="matrix.php" method="post">
        <h1>quiere pedir</h1> <!--Ya que es una matriz cuadrada los valores deben ser iguals -->
        <label for="cantidad"><input type="number" name="cantidad" id="cantidad"></label>
        <label for="enviar"><input type="submit" value="enviar"></label>
    </form>
</section>

</body>
</html>