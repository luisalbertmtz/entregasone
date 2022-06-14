<?php
$event = filter_input(INPUT_GET, 'event', FILTER_UNSAFE_RAW);

handler($event);

function handler($event) {
    global $db;
    $oArticulos = new Articulos();
    switch ($event) {
        case 'REGISTRO':
            $oArticulos->getList($event);
            break;
        case 'SET_INVENT':
            $oInventarios = new Inventario();
            $array_post = helper_data();
            $oInventarios->saveEntrega($array_post);
            break;
        default:
            break;
    }
}

function helper_data() {
    return $array_post = filter_input_array(INPUT_POST);
}

?>