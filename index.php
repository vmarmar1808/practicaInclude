<?php
require 'header.php';   
require 'menu.php';     


$seccion = isset($_GET['seccion']) ? $_GET['seccion'] : 'inicio';
$ruta = __DIR__ . "/contenido/$seccion.php";


if (file_exists($ruta)) {
    include $ruta;  
} else {
    echo "<p>Página no encontrada.</p>";
}

include 'footer.php';   
?>
