<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Binomio</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<body>

<?php
require_once ("../Ej-8 Punto de partida/header.php");
?>

<h1>Binomio cuadrado perfecto</h1>

<form action="index.php" method="post">
    <ul>
        <li><label for="primerValor">ingrese un primer valor: </label><input type="number" name="primerValor" id="primerValor"></li>
        <li><label for="segundoValor">ingrese un segundo valor: </label><input type="number" name="segundoValor" id="segundoValor"></li>
        <input type="submit" value="enviar">

    </ul>

</form>


</body>
</html>
<?php

require_once ("binomio.php");

if(isset($_POST["primerValor"]) && isset($_POST["segundoValor"])){
    binomioCuadradoPerfecto_b($_POST["primerValor"], $_POST["segundoValor"]);
}

?>