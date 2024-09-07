<?php
function cargarImagenes(): void
{
    // traigo las imagenes de la carpeta en un array
    $directory="C:/xampp/htdocs/Guia ejercicios/Ej-9 instagramo/imagenes/";
    $imagenes = scandir($directory);
    //lo recorro y agarro cada imagen para imprimirla

    foreach ($imagenes as $imagen) {
        if ($imagen !== "." && $imagen !== "..") {
            echo '<div class="w3-center">';
            echo '<img src="http://localhost/Guia ejercicios/Ej-9 instagramo/imagenes/' . $imagen . '" alt="' . $imagen . '" style="max-width: 100%; height: auto;">';
            echo '<p>' . $imagen . '</p>';
            echo '</div>';
        }
    }
}

function moverImagenSiSeEnvioAlguna(): void
{
    if (isset($_FILES["image"]) && str_starts_with($_FILES["image"]["type"], "image")) {
        $extension = substr($_FILES["image"]["name"], strrpos($_FILES["image"]["name"], "."));
        move_uploaded_file($_FILES["image"]["tmp_name"], "C:/xampp/htdocs/Guia ejercicios/Ej-9 instagramo/imagenes/" . $_POST["name"] . $extension);
    }
}

function listarImagenes()
{
    // traigo las imagenes de la carpeta en un array
    $directory="C:/xampp/htdocs/Guia ejercicios/Ej-9 instagramo/imagenes/";
    $imagenes = scandir($directory);
    //lo recorro y agarro cada imagen para imprimirla

    foreach ($imagenes as $imagen) {
        if ($imagen !== "." && $imagen !== "..") {
            echo '<section class="w3-center">';
            echo '<a href="http://localhost/Guia ejercicios/Ej-9 instagramo/imagenes/' . $imagen . '">' . $imagen .'</a>';
            echo '</section>';
        }
    }

}