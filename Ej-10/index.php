<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../Ej-9%20instagramo/style.css">
    <title>Document</title>
</head>
<body>
<?php
require_once ("../Ej-8 Punto de partida/header.php");
?>

<main>

    <?php
    require_once("../Ej-9 instagramo/helper.php");
    listarImagenes();
    moverImagenSiSeEnvioAlguna();

    ?>

    <!--formulario-->
    <section class="w3-center w3-border w3-border-black w3-container-inline fija">
        <form action="index.php" enctype="multipart/form-data" method="POST">
            <ul>
                <li><label for="name">inserte el nombre de la imagen</label><input type="text" name="name" id="name"></li>
                <li><label for="image">inserte una imagen</label><input type="file" name="image" id="image">
                    <input type="submit" value="publicar"></li>
            </ul>
        </form>
    </section>

</main>

</body>
</html>
