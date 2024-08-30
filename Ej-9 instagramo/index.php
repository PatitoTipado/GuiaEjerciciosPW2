<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Document</title>
</head>
<body>
<?php
require_once ("../Ej-8 Punto de partida/header.php");
?>

<main>

    <section class="w3-center">
        <img src="./imagenes/T1e5_Wendy_sonr%253Fe.webp" alt="WendySmile">
        <h1> foto de wendy</h1>
    </section>

    <?php
    require_once ("./helper.php");

    imprimirImagenes();
    ?>

    <form action="index.php" method="post" enctype="multipart/form-data">
        <label for="image">inserte una imagen<input type="file" name="image" id="image"></label>
    </form>

</main>

</body>
</html>

