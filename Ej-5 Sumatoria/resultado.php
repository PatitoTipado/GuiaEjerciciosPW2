<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>concatenar textos</title>
</head>
<body>
<h1>incremental</h1>
<form action="resultado.php" method="post">

    <?php
    function inputsNecesarios($i)
    {
        echo '<li><label for="input'.$i.'">Ingrese un valor: </label>';
        echo '<input type="number" name="input'.$i.'" id="input'.$i.'"></li>';
    }

    if(isset($_POST["cantidad"])){
        echo '<form method="post">';
        echo '<ul>';

        for ($i = 0; $i < $_POST["cantidad"]; $i++) {
            inputsNecesarios($i);
        }
        echo '</ul>';
        echo '<input type="submit" value="enviar">';
        echo '</form>';
    }
    ?>

</form>

</body>
</html>

<?php
require_once ("sumatoria.php");

if(isset($_POST["input0"])){
    echo sumatoria_a($_POST["cantidad"],$_POST);
}

?>
