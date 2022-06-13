<?php

ADOdb_Active_Record::SetDatabaseAdapter($db);

class Categorias extends ADODB_Active_Record {
    var $_table = 'Articulos';

    function __construct(){	
    }
    
    function getCategoriaID(){
        header('Content-Type: application/json');
        global $db;
        $db->debug = 0;
        $result = array();
        $idCategoria = $this->idCategoria;
        $result = $db->getAll("SELECT * FROM categorias WHERE idCategoria = " .$idCategoria ." AND activo = 1");
        if(count($result) > 0){
            echo json_encode($result);
        }else{
            echo json_encode(array());
        }
    }

    function getListCategorias(){
        global $db;
        $db->debug = 0;
        $result = array();
        $result = $db->getAll("SELECT * FROM categorias as p WHERE p.activo = 1");
        
        if(count($result) > 0){
            return $result;
        }else{
            return [];
        }             
    }

    function saveCategoria($dataParam){
        global $db;
        $db->debug = 0;
        $result = array();
        $table = "categorias";
        
        if($dataParam['idCategoria'] > 0){
            $dataParam['fechaActualizacion'] = date("Y-m-d H:i:s");
            $where = "idCategoria = " . $dataParam['idCategoria'];
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