<?php

ADOdb_Active_Record::SetDatabaseAdapter($db);

class Login extends ADODB_Active_Record {
    
    function __construct(){	
    }
    
    function closeSession(){
        $oBitacora = new Bitacora();
        $oBitacora->idUsuario = $_SESSION['idUsuario'];
        $oBitacora->idProducto = null;
        $oBitacora->accion = "Cierre de sesión";
        $oBitacora->guardaBitacora();
        session_destroy();
    }
}
?>