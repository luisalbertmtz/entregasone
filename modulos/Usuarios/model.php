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
}
?>