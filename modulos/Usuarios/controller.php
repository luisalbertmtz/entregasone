<?php
$event = filter_input(INPUT_GET, 'event', FILTER_UNSAFE_RAW);

handler($event);

function handler($event) {

    global $db;
    switch ($event) {
        case 'GET_USER':
            $oUsuario = new Usuarios();
            $array_post = helper_data();
            $oUsuario->idUsuario = $array_post['id'];
            $oUsuario->getUser();
            break;
        case 'CREA_USER':
            $oUsuario = new Usuarios();
            $array_post = helper_data();
            $oUsuario->saveUser($array_post);
            break;
        default:
            break;
    }
}

function helper_data() {
    return $array_post = filter_input_array(INPUT_POST);
}
?>