<?php
// Agregamos los objetos
$proyector = [
    "nombre" => "proyector DELL",
    "resolucion" => "alta definicion full hd, 4k",
    "brillo" => 200,
    "tecnologia de proyector" => "LCD",
    "ratio de aspecto" => 18,9,
    "pantalla proyectada" => 120,
    "conectividad " => "USB,HDMI,VGA",
    "COMPATIVILIDAD 3D" => 100.00,
    "zoom optico" => 10.00,
    "correccion keystone" => "ajuste de imagen",
    "duracion de lampara " => 200 hrs,
    "nivel de ruido" => 2,
    "funciones de red" =>  "transmision de datos",
    "peso" => 2.250 kg,
    "tamaño" => 20 cm4,
    "funciones de pantalla dividida" => "multi funciones",
    "funciones de seguridad" => "bloqueo de contraseña",
    "garantia" => "un año despues de la compra",
    "portatividad " => "practico de llevar",
    "montaje" => "facil de montar en diferentes cituasiones",
    // Puedes agregar más atributos aquí
    ];

$internet = [
     "nombre" => "izzi",
     "conectividad" => "largo alcanse",
     "velocidad de coneccion" => "Gbps",
     "acceso inalambrico" => "WI-FI,Bluetooth",
     "direccion ip" => 000000008989,
     "seguridad" => "SSL",
     "ancho de banda" => "capasidad maxima de transferencia de datos",
     "acceso global" => "disponibilidad de internet ",
     "navegadores web" => "firefox, safari",
     "servicios de la nuve " => "cspssidad de almacenar datos",
     "redes sociales " => "plataformas en lidea",
     "comercio electronico" => "compra y venta de vienes",
    
    ];

    // Creamos una lista de objetos en un arreglo
$tecnologia = [
    $proyector,
    $laptop,
    $telefono,
];

// Creamos un arreglo de objetos relacionados por nombre
$tecnologia_productos = [];
    ];

// Recorremos el arreglo de people una persona a la vez
foreach ($people as $person) {
    // Creamos pares de llave valor con el nombre como llave y la persona como valor
    $people_by_name[$person["nombre"]] = $proyector;
}

// Revisamos si el argumento nombre está definido en el URL
if (isset($_GET["nombre"])) {
    // Asignamos el valor del argumento GET a una variable llamada name
    $name = $_GET["nombre"];
    // Imprimir una sola persona que coincida con el nombre
    echo json_encode($people_by_name[$name]);
} else {
    // Imprimir la lista completa de personas
    echo json_encode($proyector);
}

