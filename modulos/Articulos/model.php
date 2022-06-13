<?php

ADOdb_Active_Record::SetDatabaseAdapter($db);

class Articulos extends ADODB_Active_Record {
    var $_table = 'Articulos';

    function __construct(){	
    }
    
    function getArticulID(){
        header('Content-Type: application/json');
        global $db;
        $db->debug = 0;
        $result = array();
        $idProducto = $this->idProducto;
        $result = $db->getAll("SELECT * FROM productos WHERE idProducto = " .$idProducto ." AND activo = 1");
        if(count($result) > 0){
            echo json_encode($result);
        }else{
            echo json_encode(array());
        }
    }

    function getListArticulos(){
        global $db;
        $db->debug = 0;
        $result = array();
        $result = $db->getAll("SELECT p.*, c.Nombre as Categoria, pr.Nombre as Proveedor FROM productos as p
                                INNER JOIN categorias as c ON p.idCategoria = c.idCategoria
                                INNER JOIN proveedores as pr ON p.idProveedor = pr.idProveedor
                                    WHERE p.activo = 1");
        
        if(count($result) > 0){
            return $result;
        }else{
            return [];
        }             
    }

    function getListCategoria(){
        global $db;
        $db->debug = 0;
        $result = array();
        $result = $db->getAll("SELECT * FROM categorias WHERE activo = 1");
        
        if(count($result) > 0){
            return $result;
        }else{
            return [];
        }             
    }

    function saveArticulo($dataParam){
        global $db;
        $db->debug = 0;
        $result = array();
        $table = "productos";
        
        if($dataParam['idProducto'] > 0){
            $dataParam['fechaActualizacion'] = date("Y-m-d H:i:s");
            $where = "idProducto = " . $dataParam['idProducto'];
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