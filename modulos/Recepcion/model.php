<?php

ADOdb_Active_Record::SetDatabaseAdapter($db);

class Articulos extends ADODB_Active_Record {
    var $_table = 'Articulos';

    function __construct(){	
    }
    
    function getList(){
        global $db;
        $db->debug = 0;
        
        $sql = "SELECT * FROM productos";
        $array = $db->getAll($sql);
    	return $array;                    
    }

    function getProveedores(){
        global $db;
        $db->debug = 0;
        $sql = "SELECT * FROM proveedores as p ";
        $array = $db->getAll($sql);
        return $array;                
    }

    function getUsuarios(){
        global $db;
        $db->debug = 0;
        $sql = "SELECT * FROM usuarios as u ";
        $array = $db->getAll($sql);
        return $array; 
    }
    
}
?>