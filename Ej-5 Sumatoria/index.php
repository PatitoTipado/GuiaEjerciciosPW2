<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <title>sumatoria</title>
</head>
<body>

<?php
require_once ("../Ej-8 Punto de partida/header.php");
?>

<h1>sumatoria</h1>
<form action="resultado.php" method="post">
    <ul>
        <li><label for="cantidad">cantidad de inputs: </label><input type="number" name="cantidad" id="cantidad"></li>
        <input type="submit" value="enviar">
    </ul>

</form>
</body>
</html>