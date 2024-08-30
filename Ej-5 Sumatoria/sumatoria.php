<?php
function sumatoria_a($datos)
{
    $crematoria=0;
    // Iterar a través del array usando los índices correctos
    foreach ($datos as $clave) {
        // Evitar procesar el valor de submit u otros elementos no numéricos
            $crematoria += (int)$clave;
        }
    return $crematoria;

}


?>