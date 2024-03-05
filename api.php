<?php
// Agregamos los objetos
$proyector = [
    "nombre" => "proyector DELL",
    "resolucion" => "alta definicion full hd, 4k",
    "brillo" => rand(200),
    "tecnologia de proyector" => "LCD",
    "ratio de aspecto" => rand(18,9),
    "pantalla proyectada" => rand(120),
    "conectividad " => "USB,HDMI,VGA",
    "COMPATIVILIDAD 3D" => rand(100.00),
    "zoom optico" => rand(10.00),
    "correccion keystone" => "ajuste de imagen",
    "duracion de lampara " => rand(200 hrs),
    "nivel de ruido" => rand(2),
    "funciones de red" =>  "transmision de datos",
    "peso" => rand(2.250 kg),
    "tamallo" => rand(20 cm4),
    "funciones de pantalla dividida" => "multi funciones",
    "funciones de seguridad" => "bloqueo de contraseña",
    "garantia" => "un año despues de la compra",
    "portatividad " => "practico de llevar",
    "montaje" => "facil de montar en diferentes cituasiones",
    // Puedes agregar más atributos aquí

    // Creamos una lista de objetos en un arreglo
$tecnologia = [
    $proyector,
    $laptop,
    $telefono,
];

// Creamos un arreglo de objetos relacionados por nombre
$tecnologia_productos = [];