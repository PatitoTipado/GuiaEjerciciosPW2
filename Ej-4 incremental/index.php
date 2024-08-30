<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <title>concatenar textos</title>
</head>
<body>

<?php
require_once ("../Ej-8 Punto de partida/header.php");
?>

<h1>incremental</h1>
<form action="index.php" method="post">
    <ul>
        <li><label for="primerValor">ingrese un primer valor: </label><input type="text" name="primerValor" id="primerValor"></li>
        <input type="submit" value="enviar">

    </ul>

</form>

</body>
</html>

<?php

require_once ("incremental.php");

$valor= isset($_POST["primerValor"]) ? $_POST["primerValor"] : "";

if(isset($_POST["primerValor"])){
    incrementador($valor);
}

echo $valor;

?>