<?php
/*
 * Ejercicio 1: Semáforo
 Programación web avanzada - 2022
 Cree una función llamada Semaforo, que recibe por parametro un cólor cómo texto (“rojo”
 “amarillo”,”verde”). Dicha función devolverá el estado que corresponde: “frene”, “precaución”,
 “avance” o  “estado desconocido” ante un caso no esperado.
*/
function semaforo_a($color)
{
    /*
 a) función semaforo_a($color): Resuelva la solución utilizando if else
 */
    if($color == "rojo"){
        echo "<br> detengase";
    }elseif ($color=="verde"){
        echo "<br> pase";
    }else if($color=="amarrillo"){
        echo "<br> precausion";
    }
}

function semaforo_b($color){
    /*
b) función semaforo_b($color): Resuelva la solución utilizando if inline (return ?: )
    */
    $valor = $color == "rojo" ? "detengase" :
            ($color == "verde" ? "pase" :
            ($color == "amarillo" ? "precaucion" : "valor inexistente"));
    echo "<br>" . $valor;
}

function semaforo_c($color)
{
   // c) función semaforo_c($color): Resuelva la solución utilizando switc
    switch ($color){
        case "rojo":
            echo "<br> detengase";
            break;
        case "amarrillo":
            echo "<br> precausion";
            break;
        case "verde":
            echo "<br> pase";
            break;
        default:
            echo "no ingreso una salida valida";
            break;
    }
}

?>
