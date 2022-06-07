<?php

ADOdb_Active_Record::SetDatabaseAdapter($db);

class Bitacora extends ADODB_Active_Record {
    var $_table = 'Bitacora';

    function __construct(){	
    }
    
    function guardaBitacora(){
        global $db;
        $db->debug = 0;
        $datos = array();
        $idUsuario = $this->idUsuario;
		$idProducto = $this->idProducto;
        $accion = $this->accion;

        $table = "bitacora";
        $datos['idUsuario'] = $idUsuario;
        $datos['idproducto'] = $idProducto;
        $datos['accion'] = utf8_decode($accion);
        $datos['fechaCreacion'] = date('Y-m-d H:i:s');
        
        $insert = $db->autoExecute($table,$datos,'INSERT');
        $affected = $db->affected_rows();

        if($affected){
            return true; 
        }else{
            return false;
        }
    }
}
?>