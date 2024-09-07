<?php

$filas=$_POST["cantidad"];
$columnas= $_POST["cantidad"];

$array =array();
$contador=0;
for ($i = 0; $i < $_POST["cantidad"]; $i++) {
    $array[$i]= array();
    for ($j = 0; $j < $_POST["cantidad"]; $j++) {
        $array[$i][$j]=$contador;
        $contador++;
        echo $array[$i][$j] . "<br>";
    }
    echo "<br>";
}

// imprimir diagonal
echo "<br>"."imprimir en diagonal ej: 0,11,22";
for ($k = 0; $k < $columnas; $k++) {
    echo "<br>" . " " .$array[$k][$k];
}
echo "<br>" . "imprimir en diagonal viceversa ej: 22,11,0";
for ($l = $columnas-1; $l >= 0; $l--) {
    echo "<br>" . "  " .$array[$l][$l];

}

$sumatoria = 0;

for ($m = 0; $m < $filas; $m++) {
    for ($n = 0; $n < $columnas; $n++) {
        $sumatoria =$sumatoria + $array[$m][$n];
    }
}

echo "<br>" . "resultado sumatoria: " .$sumatoria;