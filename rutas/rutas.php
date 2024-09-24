<?php
// capturamos la ruta
$array = explode("/", $_SERVER["REQUEST_URI"]);
// var_dump($array);


/*cuando no se hace ninguna petición a la API*/

if (count(array_filter($array)) == 1) {
    $json = array(
        "detalle" => "Sin solicitudes",
    );
    // echo json_encode($json, true);
} else {
    /*cuando si se hace petición a la API*/
    if (count(array_filter($array)) == 2) {
        $json = array(
            "detalle" => "Con solicitudes",
        );
    }
}
