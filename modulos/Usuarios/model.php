<?php

ADOdb_Active_Record::SetDatabaseAdapter($db);

class Usuarios extends ADODB_Active_Record {
    var $_table = 'Usuarios';

    function __construct(){	
    }
    
    function getUsuarios(){
        global $db;
        $db->debug = 0;
        $result = array();
        $nombre = $this->nombre;
		$password = sha1($this->password);
        $result = $db->getAll("SELECT * FROM usuarios WHERE username = '$nombre' AND password = '$password' AND activo=1");
        
        if(count($result) > 0){
            return $result[0];
        }else{
            return [];
        }             
    }

    function getUser(){
        header('Content-Type: application/json');
        global $db;
        $db->debug = 0;
        $result = array();
        $idUsuario = $this->idUsuario;
        $result = $db->getAll("SELECT * FROM usuarios WHERE idUsuario = " .$idUsuario ." AND activo = 1");
        if(count($result) > 0){
            echo json_encode($result);
        }else{
            echo json_encode(array());
        }
    }

    function getRoles(){
        global $db;
        $db->debug = 0;
        $result = $db->getAll("SELECT * FROM rol");
        return $result;          
    }

    function getList(){
        global $db;
        $db->debug = 0;
        $result = array();
        $result = $db->getAll("SELECT u.*, r.Nombre FROM usuarios as u 
                                INNER JOIN rol as r ON u.idRol = r.idRol WHERE u.activo = 1");
        
        if(count($result) > 0){
            return $result;
        }else{
            return [];
        }             
    }
    
    function saveUser($dataParam){
        global $db;
        $db->debug = 0;
        $result = array();
        $table = "usuarios";
        
        if($dataParam['idUsuario'] > 0){
            $dataParam['fechaActualizacion'] = date("Y-m-d H:i:s");
            $dataParam['password'] = sha1($dataParam['password']);
            $where = "idUsuario = " . $dataParam['idUsuario'];
		    $update = $db->autoExecute($table,$dataParam,'UPDATE', $where);
            if($update){
                echo "Registro actualizado";
            }
        }else{
            $dataParam['fechaCreacion'] = date("Y-m-d H:i:s");
		    $dataParam['fechaActualizacion'] = date("Y-m-d H:i:s");
            $dataParam['password'] = sha1($dataParam['password']);
            $insert = $db->autoExecute($table,$dataParam,'INSERT');
            $lastId = $db->insert_Id();
            if($lastId > 0){
                echo "El registro ha sido guardado: " . $lastId;
            }            
        }         
    }
}
?>