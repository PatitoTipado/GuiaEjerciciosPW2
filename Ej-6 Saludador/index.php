<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Document</title>
</head>
<body>
<?php

require_once("../Ej-8 Punto de partida/header.php");

require_once ("Saludar.php");

$saludador= new Saludar ("mauri","a");

echo $saludador->getSaludoFormal(15.5);
?>
</body>
</html>
