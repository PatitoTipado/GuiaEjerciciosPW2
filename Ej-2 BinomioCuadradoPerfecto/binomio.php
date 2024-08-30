<?php
function binomioCuadradoPerfecto_a($primerValor, $segundoValor)
{
    echo pow(($primerValor+$segundoValor),2);
}

function binomioCuadradoPerfecto_b($primerValor, $segundoValor)
{
    echo pow($primerValor,2)+ 2*$primerValor*$segundoValor+ pow($segundoValor,2);
}

?>