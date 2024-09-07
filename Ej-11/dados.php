<?php

function lanzar_dados()
    {
        return rand(0,6);
    }
    $resultado= 0;
    for ($i = 0; $i < $_POST["dado"]; $i++) {
        $dado=lanzar_dados();
        $resultado +=$dado;
        echo $dado . "<br>";
    }
    echo "resultado obtenido: " . $resultado;
?>