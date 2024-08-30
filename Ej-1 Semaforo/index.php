<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <title>Semaforo</title>
</head>
<body>

<?php
require_once ("../Ej-8 Punto de partida/header.php");
?>

    <section>
    <h1>Semaforo</h1>
    </section>

        <form action="index.php" method="POST">
           <select id="color" name="color">
                    <option value="rojo">rojo</option>
                    <option value="amarrillo">amarrillo</option>
                    <option value="verde">verde</option>
                </select>
                <input type="submit" value="enviar">
        </form>

</body>
</html>

<?php
$color= isset($_POST["color"]) ? $_POST["color"] : "todavia no tiene color";
echo $color;

// funcion que me llame a un
if($color!="todavia no tiene color") {
    require_once("semaforo.php");
    semaforo_c($color);
}
?>