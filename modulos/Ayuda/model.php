<?php

ADOdb_Active_Record::SetDatabaseAdapter($db);

class Productos extends ADODB_Active_Record {
    var $_table = 'Productos';

    function __construct(){	
    }
    
    function getList(){
        global $db;
        $db->debug = 0;
        
        $sql = "SELECT * FROM productos";
        $array = $db->getAll($sql);
    	return $array;                    
    }
}
?>