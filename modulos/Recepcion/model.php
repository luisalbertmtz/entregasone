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

    function getProveedor(){
        header('Content-Type: application/json');
        global $db;
        $db->debug = 0;
        $idProducto = $this->idProducto;
        
        $sql = "SELECT pr.idProveedor FROM productos as p 
                    INNER JOIN proveedores as pr on p.idProveedor = pr.idProveedor 
                    WHERE p.idProducto = " . $idProducto;
        $array = $db->getAll($sql);
        if(count($array) > 0){
            echo json_encode($array);
        }else{
            echo json_encode(array());
        }                 
    }

    function getProveedores(){
        global $db;
        $db->debug = 0;
        $sql = "SELECT * FROM proveedores as p ";
        $array = $db->getAll($sql);
        return $array;                
    }
    
}
?>