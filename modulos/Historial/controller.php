<?php
$event = filter_input(INPUT_GET, 'event', FILTER_SANITIZE_STRING);

handler($event);

function handler($event) {

    global $db;
    switch ($event) {
        case 'REGISTRO':
            $oBitacora = new Bitacora();
            $oBitacora->guardaBitacora($event);
            break;
        case 'GRAFICAMES':
            $db->debug = 0;
            $oBitacora = new Bitacora();
            $resData = $oBitacora->getVisitasMes_Grafica();
            echo $resData;
            break;
        case 'GRAFICADIA':
            $db->debug = 0;
            $oBitacora = new Bitacora();
            $resData = $oBitacora->getVisitasDia_Grafica();
            echo $resData;
            break;
        default:
            break;
    }
}

?>