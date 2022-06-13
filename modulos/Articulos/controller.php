<?php
$event = filter_input(INPUT_GET, 'event', FILTER_UNSAFE_RAW);

handler($event);

function handler($event) {

    global $db;
    switch ($event) {
        case 'GET_ART':
            $oArticulos = new Articulos();
            $array_post = helper_data();
            $oArticulos->idProducto = $array_post['id'];
            $oArticulos->getArticulID();
            break;
        case 'CREA_ART':
            $oArticulos = new Articulos();
            $array_post = helper_data();
            $oArticulos->saveArticulo($array_post);
            break;
        default:
            break;
    }
}

function helper_data() {
    return $array_post = filter_input_array(INPUT_POST);
}
?>