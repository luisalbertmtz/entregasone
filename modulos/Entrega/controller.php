<?php
$event = filter_input(INPUT_GET, 'event', FILTER_UNSAFE_RAW);

handler($event);

function handler($event) {

    global $db;
    switch ($event) {
        case 'REGISTRO':
            $oProductos = new Productos();
            $oProductos->getList($event);
            break;
        default:
            break;
    }
}

?>