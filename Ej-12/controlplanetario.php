<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>contador planetario</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../Ej-9%20instagramo/style.css">
</head>
<body>

<?php
require_once("../Ej-8 Punto de partida/header.php");
if(isset($_POST["planeta"])){
    header("location: controlplanetario.php");
}

$archivo_json = "bd.json";
$contenido = file_get_contents($archivo_json);
$datos = json_decode($contenido, true);  // Decodificar en un array asociativo
echo "<h1 class='w3-center'>" ."la cantidad de visitantes que pasaron el control y son de la tierra son: " . $datos[0]["cantidad"]. "</h1>";

    if (isset($_POST["nombre"]) && isset($_POST["planeta"])) {
        //nuevos datos
        $nuevos_datos = [
                "nombre" => $_POST ["nombre"],
                "planeta" => $_POST["planeta"]
        ];
        //ingreso los nuevos datos
        if($nuevos_datos["planeta"] == "tierra"){
            $datos[0]["cantidad"]++;
        }
        $datos [] = $nuevos_datos;
        $json_actualizado = json_encode($datos, JSON_PRETTY_PRINT);
        if (file_put_contents($archivo_json, $json_actualizado)) {
            echo "<h1 class='w3-center'>" . "Datos guardados correctamente." . "</h1>";
        } else {
            echo "<h1 class='w3-center'>" . "Error al guardar los datos." . "</h1>";
        }

    }

    $contenido = file_get_contents($archivo_json);
    $datos = json_decode($contenido, true);  // Decodificar en un array asociativo

    for ($i = 1; $i < count($datos); $i++) {
        echo "<article class='w3-center'>" . "su nombre es: " . $datos[$i]["nombre"] . "<br>";
        echo "su planeta es: " . $datos [$i]["planeta"] . "<br>" . "</article>";
    }
?>

</body>
</html>
