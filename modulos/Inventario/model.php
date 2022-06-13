<?php

ADOdb_Active_Record::SetDatabaseAdapter($db);

class Inventario extends ADODB_Active_Record {
    var $_table = 'Inventario';

    function __construct(){	
    }
    
    function getList(){
        global $db;
        $db->debug = 0;
        $date = date('Y-m-d', strtotime('-3 day')); 

        $sql = "SELECT * FROM productos";
        $array = $db->getAll($sql);
    	return $array;                    
    }

    function saveEntrega($dataParam){
        require '../Bitacora/model.php';
        global $db;
        $db->debug = 0;
        $table = "inventario";
        $dataParam['cantidad'] = -$dataParam['cantidad'];
        $dataParam['idUsuario'] = $_SESSION['idUsuario'];
        $dataParam['inventario'] = 1;   //Entrega
        $dataParam['fechaCreacion'] = date("Y-m-d H:i:s");
        $insert = $db->autoExecute($table,$dataParam,'INSERT');
        $lastId = $db->insert_Id();
        if($lastId > 0){
            $oBitacora = new Bitacora();
            $oBitacora->idUsuario = $_SESSION['idUsuario'];
            $oBitacora->idProducto = $lastId;
            $oBitacora->accion = "Entrega de articulos";
            $oBitacora->guardaBitacora();
            echo "El registro ha sido guardado: " . $lastId;
        }         
    }
    function saveRecepcion($dataParam){
        require '../Bitacora/model.php';
        global $db;
        $db->debug = 0;
        $table = "inventario";
        $dataParam['cantidad'] = $dataParam['cantidad'];
        $dataParam['idUsuario'] = $_SESSION['idUsuario'];
        $dataParam['inventario'] = 2;   //Recepcion
        $dataParam['fechaCreacion'] = date("Y-m-d H:i:s");
        $insert = $db->autoExecute($table,$dataParam,'INSERT');
        $lastId = $db->insert_Id();
        if($lastId > 0){
            $oBitacora = new Bitacora();
            $oBitacora->idUsuario = $_SESSION['idUsuario'];
            $oBitacora->idProducto = $lastId;
            $oBitacora->accion = "Recepción de articulos";
            $oBitacora->guardaBitacora();
            echo "El registro ha sido guardado: " . $lastId;
        }         
    }

    function getEntrega(){
        global $db;
        $db->debug = 0;
        $sql = "SELECT inv.*, us.nombreCompleto as Usuario, pr.Nombre as Producto,prov.Nombre as Proveedor, cat.Nombre as Categoria
                    FROM inventario as inv
                        INNER JOIN usuarios as us ON inv.idUsuario = us.idUsuario
                        INNER JOIN productos as pr ON inv.idProducto = pr.idProducto
                        INNER JOIN categorias as cat ON pr.idCategoria = cat.idCategoria
                        INNER JOIN proveedores as prov ON pr.idProveedor = prov.idProveedor
                        WHERE inventario = 1";
        $array = $db->getAll($sql);
        return $array;                
    }

    function getRecepcion(){
        global $db;
        $db->debug = 0;
        $sql = "SELECT inv.*, us.nombreCompleto as Usuario, pr.Nombre as Producto,prov.Nombre as Proveedor, cat.Nombre as Categoria
                    FROM inventario as inv
                        INNER JOIN usuarios as us ON inv.idUsuario = us.idUsuario
                        INNER JOIN productos as pr ON inv.idProducto = pr.idProducto
                        INNER JOIN categorias as cat ON pr.idCategoria = cat.idCategoria
                        INNER JOIN proveedores as prov ON pr.idProveedor = prov.idProveedor
                        WHERE inventario = 2";
        $array = $db->getAll($sql);
        return $array;                 
    }

    function getInventario(){
        global $db;
        $db->debug = 0;
        $sql = "SELECT SUM(cantidad) as total, p.Nombre, p.idProducto
                    FROM inventario as inv
                        INNER JOIN productos as p on inv.idProducto = p.idProducto
                            GROUP BY p.Nombre, p.idProducto";
        $array = $db->getAll($sql);
        return $array;                
    }
}
?>