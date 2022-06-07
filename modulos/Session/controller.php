<?php
$event = filter_input(INPUT_GET, 'event', FILTER_UNSAFE_RAW);

handler($event);

function handler($event) {
    global $db;
    $array_post = helper_data();

    global $db;
    switch ($event) {
        case 'LOGIN':
            $oUsuario = new Usuarios();
            $oBitacora = new Bitacora();
            $oUsuario->nombre = $array_post['usuario'];
            $oUsuario->password = trim($array_post['password']);
            $usuario = $oUsuario->getUsuarios();
            
            if(count($usuario) > 0){    //Si encuentra resultados inicia sesión y guarda variables
                session_start();
                foreach ($usuario as $index => $valor){
                    $_SESSION[$index] = $valor;
                }   
                $msg = 'Bienvenido: ' . $_SESSION['nombreCompleto'];
                $alert = "alert-success"; 
                $valid = true;   
                $oBitacora->idUsuario = $_SESSION['idUsuario'];
                $oBitacora->idProducto = null;
                $oBitacora->accion = "Nuevo acceso al sistema";
                $oBitacora->guardaBitacora();
            }else{                      //En caso contrario responde inválido
                $msg = 'Usuario o password incorrecto, por favor verifique e intente nuevamente.';
                $alert = "alert-danger";
                $valid = false;
            }     
            include 'login_message.php';
            break;
        default:
            break;
    }
}

function helper_data() {
    return $array_post = filter_input_array(INPUT_POST);
}
?>