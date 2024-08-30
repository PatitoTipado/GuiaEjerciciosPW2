<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>integrando todo</title>
</head>
<body>
<?php
require_once ("../Ej-8 Punto de partida/header.php");
?>

<section class="w3-padding-24 w3-center">
    <h1>enunciado del ejercicio 1</h1>
    <p>Se realiza un semaforo dependiendo del parametro pasado esto nos tirara diferente valor EJ: VALOR verde</p>
    <?php
    require_once("../Ej-1 Semaforo/semaforo.php");
    semaforo_b("verde");
    ?>
</section>
<section class="w3-padding-24 w3-center">
    <h1>enunciado del ejercicio 2 </h1>
    <p>se realiza la funcion basica del binomio cuadrado perfecto pasare los valores 4 y 4</p>
    <?php
    require_once("../Ej-2 BinomioCuadradoPerfecto/binomio.php");
    binomioCuadradoPerfecto_a(4,4);
    ?>
</section>

<section class="w3-padding-24 w3-center">
    <h1>enunciado del ejercicio 3 </h1>
    <p>se realiza la funcion de concatenar textos EJ: HOLA MUNDO</p>
    <?php
    require_once("../Ej-3 ConcatenarTextos/concatenartexto.php");
    echo concatenador("HOLA ","MUNDO");
    ?>
</section>

<section class="w3-padding-24 w3-center">
    <h1>enunciado del ejercicio 4 </h1>
    <p>funcion que incrementa de a 1 por referencia EJ si pasamos 20</p>
    <?php
    $valor=20;
    require_once("../Ej-4 incremental/incremental.php");
    incrementador($valor);
    echo "valor luego de incrementar:" . $valor;
    ?>
</section>

<section class="w3-padding-24 w3-center">
    <h1>enunciado del ejercicio 5 </h1>
    <p>funcion que suma todos los numeros y retorna un resultado EJ si pasamos 20,23,2</p>
    <?php
    $valor=[20,23,2];
    require_once("../Ej-5 Sumatoria/sumatoria.php");
    echo sumatoria_a($valor);
    ?>
</section>

<section class="w3-padding-24 w3-center">
    <h1>enunciado del ejercicio 6 </h1>
    <p>clase que realiza un saludo dependiendo del horario por ejemplo hola mundo a las 10am de las dos formas</p>
    <?php
    require_once("../Ej-6 Saludador/Saludar.php");
    $saludador= new Saludar("Hola ", "Mundo");

    echo $saludador->getSaludoFormal(10);
    echo "<br>" .$saludador->getSaludoInformal(10)
    ?>
</section>

</body>
</html>

<?php