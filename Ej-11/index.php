<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../Ej-9%20instagramo/style.css">
    <title>Document</title>
</head>
<body>

<?php
    require_once ("../Ej-8 Punto de partida/header.php");
?>

<section class="w3-center">
    <form action="dados.php" method="post">
        <h1>Introduce la cantidad de dados </h1>
        <label for="dado">cantidad de dados
            <select name="dado" >
                <option value="1">1</option>
                <option value="2">2</option>
            </select>
        </label>

        <label for="lanzar"><input type="submit" value="lanzar"></label>

    </form>
</section>
</body>
</html>

