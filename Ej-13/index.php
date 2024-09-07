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
    <form action="index.php" method="post">

        <h1>Menu no saludable</h1>

        <label for="entrada">¿quiere pedir entrada?</label>
        <input type="checkbox" name="entrada" id="entrada"><br>

        <label for="plato_principal">¿quiere pedir plato_principal?</label>
        <input type="checkbox" name="plato_principal" id="plato_principal"><br>

        <label for="acompanamiento">¿quiere pedir acompañamiento?</label>
        <input type="checkbox" name="acompanamiento" id="acompanamiento"><br>

        <label for="postre">¿quiere pedir postre?</label>
        <input type="checkbox" name="postre" id="postre"><br>

        <label for="enviar"><input type="submit" value="enviar"></label>
    </form>
</section>

<section class="w3-center">
    <?php
    mostrarDetallesDelMenu();
    ?>
</section>

</body>
</html>

<?php

function mostrarDetallesDelMenu()
{
    $archivo = parse_ini_file("menu.ini", true);
    //$_POST["acompanamiento"]="acompanamiento";
    //echo $archivo[$_POST["acompanamiento"]]["opcion1"];
    //var_dump($archivo);
    //var_dump($_POST);

    foreach ($_POST as $comida => $valor) {
        echo "<br>" . "su menu con: " . $archivo[$comida]["opcion1"] . " esta en camino";
    }
}
?>