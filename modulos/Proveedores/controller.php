<?php
$event = filter_input(INPUT_GET, 'event', FILTER_UNSAFE_RAW);

handler($event);

function handler($event) {

    global $db;
    switch ($event) {
        case 'GET_USER':
            $oProveedor = new Proveedores();
            $array_post = helper_data();
            $oProveedor->idProveedor = $array_post['id'];
            $oProveedor->getProveedor();
            break;
        case 'CREA_USER':
            $oProveedor = new Proveedores();
            $array_post = helper_data();
            $oProveedor->saveProveedor($array_post);
            break;
        default:
            break;
    }
}

function helper_data() {
    return $array_post = filter_input_array(INPUT_POST);
}
?>