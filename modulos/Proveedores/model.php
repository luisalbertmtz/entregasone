<?php

ADOdb_Active_Record::SetDatabaseAdapter($db);

class Proveedores extends ADODB_Active_Record {
    var $_table = 'Proveedores';

    function __construct(){	
    }
    
    function getProveedor(){
        header('Content-Type: application/json');
        global $db;
        $db->debug = 0;
        $result = array();
        $idProveedor = $this->idProveedor;
        $result = $db->getAll("SELECT * FROM proveedores WHERE idProveedor = " .$idProveedor ." AND activo = 1");
        if(count($result) > 0){
            echo json_encode($result);
        }else{
            echo json_encode(array());
        }
    }

    function getList(){
        global $db;
        $db->debug = 0;
        $result = array();
        $result = $db->getAll("SELECT * FROM proveedores WHERE activo = 1");
        
        if(count($result) > 0){
            return $result;
        }else{
            return [];
        }             
    }
    
    function saveProveedor($dataParam){
        global $db;
        $db->debug = 0;
        $result = array();
        $table = "proveedores";
        
        if($dataParam['idProveedor'] > 0){
            $dataParam['fechaActualizacion'] = date("Y-m-d H:i:s");
            $where = "idProveedor = " . $dataParam['idProveedor'];
		    $update = $db->autoExecute($table,$dataParam,'UPDATE', $where);
            if($update){
                echo "Registro actualizado";
            }
        }else{
            $dataParam['fechaCreacion'] = date("Y-m-d H:i:s");
		    $dataParam['fechaActualizacion'] = date("Y-m-d H:i:s");
            $insert = $db->autoExecute($table,$dataParam,'INSERT');
            $lastId = $db->insert_Id();
            if($lastId > 0){
                echo "El registro ha sido guardado: " . $lastId;
            }            
        }         
    }
}
?>