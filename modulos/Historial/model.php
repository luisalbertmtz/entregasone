<?php

ADOdb_Active_Record::SetDatabaseAdapter($db);

class Bitacora extends ADODB_Active_Record {
    var $_table = 'Bitacora';

    function __construct(){	
    }
    
    function guardaBitacora($evento, $idUsuario = null){
        global $db;
        $db->debug = 0;
        session_start();
        if($_SESSION['IdUsuario'] != ""){
            $idUsuario = $_SESSION['IdUsuario'];
        }else if($idUsuario != ""){
            $idUsuario = $idUsuario;
        }else{
            $idUsuario = 0;
        }
        $datos= array();
        $table = "grupohsi_catalogoelectronico.bitacora";
        $datos['idUsuario'] = $idUsuario ;
        $datos['accion'] = utf8_decode($evento);
        $datos['IP'] = $_SERVER['REMOTE_ADDR'];
        $datos['navegador'] = $_SERVER['HTTP_USER_AGENT'];
        $datos['fechaCreacion'] = date('Y-m-d H:i:s');
        $insert = $db->autoExecute($table,$datos,'INSERT');
        $affected = $db->affected_rows();

        if($affected){
            return true; 
        }else{
            return false;
        }
    }

    function getListBitacora(){
        global $db;
        $db->debug = 0;
        //Customizar días atrás
        $date = date('Y-m-d', strtotime('-3 day')); 
        //$date = date('Y-m-d', strtotime('-1 week'));

        $sql = "SELECT u.nombre, t.descripcion AS tipoUsuario, b.accion, b.IP, b.navegador, b.fechaCreacion FROM grupohsi_catalogoelectronico.bitacora AS b
                    LEFT JOIN grupohsi_catalogoelectronico.usuarios AS u ON b.idUsuario = u.idUsuario 
                    LEFT JOIN grupohsi_catalogoelectronico.TipoUsuarios AS t ON u.idTipoUsuario = t.idTipoUsuario
                        WHERE b.fechaCreacion > '$date'";
        $array = $db->getAll($sql);
    	return $array;                    
    }

    function getVisitasTotales(){
        global $db;
        $db->debug = 0;
        session_start();
        if($_SESSION['idTipoUsuario'] == 3){
            $subSelect = " AND u.IdUsuario IN (
	                SELECT DISTINCT p.idUsuario FROM grupohsi_catalogoelectronico.asignacion AS a
					LEFT JOIN grupohsi_catalogoelectronico.proveedores AS p ON a.idProveedor = p.idProveedor
					WHERE a.IdComprador = " .$_SESSION['IdComprador'] .")";
        }else{
            $subSelect = "";
        }
        $resQ = $db->execute("SELECT COUNT(*) AS Visitas 
            FROM grupohsi_catalogoelectronico.bitacora as b
            INNER JOIN grupohsi_catalogoelectronico.usuarios AS u ON b.idUsuario = u.idUsuario  
            WHERE u.idTipoUsuario = 4 AND u.activo = 1 AND b.accion LIKE '%login%' AND b.fechaCreacion >= MONTH(NOW()) - 3 $subSelect");
        $Total = $resQ->fields['Visitas'];
    	return $Total;
    }

    function getVisitasPromedioMes(){
        global $db;
        $db->debug =0;
        session_start();
        if($_SESSION['idTipoUsuario'] == 3){
            $subSelect = " AND u.IdUsuario IN (
	                SELECT DISTINCT p.idUsuario FROM grupohsi_catalogoelectronico.asignacion AS a
					LEFT JOIN grupohsi_catalogoelectronico.proveedores AS p ON a.idProveedor = p.idProveedor
					WHERE a.IdComprador = " .$_SESSION['IdComprador'] .")";
        }else{
            $subSelect = "";
        }
        $resP = $db->execute("SELECT AVG(visitas) as promedio
                FROM(
                SELECT 
                    MONTH(b.fechaCreacion) AS Mes,
                    COUNT(*) AS Visitas
                FROM grupohsi_catalogoelectronico.bitacora as b
                INNER JOIN grupohsi_catalogoelectronico.usuarios AS u ON b.idUsuario = u.idUsuario  
                    WHERE b.accion LIKE '%login%' AND u.idTipoUsuario = 4 AND u.activo = 1 AND b.fechaCreacion >= MONTH(NOW()) - 3 $subSelect
                        GROUP BY MONTH(b.fechaCreacion)
                        ) AS visitas");
        $Promedio = $resP->fields['promedio'];
    	return $Promedio;
    }

    function getVisitasHoy(){
        global $db;
        $db->debug = 0;
        $date = date('Y-m-d 00:00:00');
        session_start();
        if($_SESSION['idTipoUsuario'] == 3){
            $subSelect = " AND u.IdUsuario IN (
	                SELECT DISTINCT p.idUsuario FROM grupohsi_catalogoelectronico.asignacion AS a
					LEFT JOIN grupohsi_catalogoelectronico.proveedores AS p ON a.idProveedor = p.idProveedor
					WHERE a.IdComprador = " .$_SESSION['IdComprador'] .")";
        }else{
            $subSelect = "";
        }
        $resP = $db->execute("SELECT 
                    COUNT(*) AS total
                FROM grupohsi_catalogoelectronico.bitacora as b
                INNER JOIN grupohsi_catalogoelectronico.usuarios AS u ON b.idUsuario = u.idUsuario  
                    WHERE b.accion LIKE '%login%' AND u.idTipoUsuario = 4 AND u.activo = 1 AND b.fechaCreacion >= '$date' $subSelect");
        $Total = $resP->fields['total'];
    	return $Total;
    }

    function getUsuarioActivo(){
        global $db;
        $db->debug = 0;
        $arrayUsuario = array();
        $cont = 0;
        session_start();
        if($_SESSION['idTipoUsuario'] == 3){
            $subSelect = " AND u.IdUsuario IN (
	                SELECT DISTINCT p.idUsuario FROM grupohsi_catalogoelectronico.asignacion AS a
					LEFT JOIN grupohsi_catalogoelectronico.proveedores AS p ON a.idProveedor = p.idProveedor
					WHERE a.IdComprador = " .$_SESSION['IdComprador'] .")";
        }else{
            $subSelect = "";
        }
        $resP = $db->execute("SELECT 
                p2.nombreCompleto,
                u.nombre,
                COUNT(b.idUsuario) AS Visitas
                FROM grupohsi_catalogoelectronico.bitacora as b
                    INNER JOIN grupohsi_catalogoelectronico.usuarios AS u ON b.idUsuario = u.idUsuario
                    INNER JOIN grupohsi_catalogoelectronico.proveedores AS p2 ON u.idUsuario = p2.idUsuario  
                        WHERE b.accion LIKE '%login%' AND u.idTipoUsuario = 4  AND u.activo = 1 AND b.fechaCreacion >= MONTH(NOW()) - 3 $subSelect
                        GROUP BY p2.nombreCompleto, u.nombre");
        foreach ($resP as $row) {
            $arrayUsuario[$cont++] = $row;
        }
        
        $data = array_reduce($arrayUsuario, function ($a, $b) {
            return @$a['Visitas'] > $b['Visitas'] ? $a : $b ;
        });

        return($data); 
    }
    
    function getCountProveedores(){
        global $db;
        $db->debug = 0;
        session_start();
        if($_SESSION['idTipoUsuario'] == 3){
            $subSelect = " AND p.idProveedor IN(
                        SELECT DISTINCT p.idProveedor FROM grupohsi_catalogoelectronico.asignacion AS a
                            LEFT JOIN grupohsi_catalogoelectronico.proveedores AS p ON a.idProveedor = p.idProveedor
                            WHERE a.IdComprador = " .$_SESSION['IdComprador'] .")";
        }else{
            $subSelect = "";
        }
        $resP = $db->execute("SELECT COUNT(*) as proveedores FROM grupohsi_catalogoelectronico.proveedores AS p WHERE p.activo = 1 $subSelect");
        $Total = $resP->fields['proveedores'];
    	return $Total;
    }

    function getVisitasMes_Grafica(){
        global $db;
        $db->debug = 0;
        $cont = 0;
        $data = array();
        session_start();
        if($_SESSION['idTipoUsuario'] == 3){
            $subSelect = " AND u.IdUsuario IN (
	                SELECT DISTINCT p.idUsuario FROM grupohsi_catalogoelectronico.asignacion AS a
					LEFT JOIN grupohsi_catalogoelectronico.proveedores AS p ON a.idProveedor = p.idProveedor
					WHERE a.IdComprador = " .$_SESSION['IdComprador'] .")";
        }else{
            $subSelect = "";
        }
        $resData = $db->execute("SELECT 
            MONTH(b.fechaCreacion) AS Mes,
            YEAR(b.fechaCreacion) AS Anio,
            COUNT(*) AS Visitas
            FROM grupohsi_catalogoelectronico.bitacora as b
                INNER JOIN grupohsi_catalogoelectronico.usuarios AS u ON b.idUsuario = u.idUsuario   
                WHERE b.accion LIKE '%login%' AND u.idTipoUsuario = 4 AND u.activo = 1 AND b.fechaCreacion >= MONTH(NOW()) - 3 $subSelect
                    GROUP BY MONTH(b.fechaCreacion), YEAR(b.fechaCreacion) 
                    ORDER BY Anio ASC");

        foreach ($resData as $row) {
            $data[] = $row;
        }

        echo json_encode($data);    
    }

    function listProveedoresSinIngresar(){
        global $db;
        $db->debug = 0;
        $sql = "SELECT 
                    p.noControl,
                    p.nombreCompleto AS RazonSocial,
                    p.nombreContacto AS Contacto,
                    u.nombre AS Usuario,
                    u.email AS Email,
                    p.telefono AS Telefono,
                    u.activo AS Activo,
                    u.actualizaPassword
                    FROM grupohsi_catalogoelectronico.usuarios AS u
                        INNER JOIN grupohsi_catalogoelectronico.proveedores AS p ON u.IdUsuario = p.idUsuario
                        WHERE u.activo = 1 AND u.actualizaPassword = 0
                            ORDER BY noControl ASC";
        $array = $db->getAll($sql);
    	return $array;
    }

    function getCountProveedoresActivos(){
        global $db;
        $db->debug = 0;
        session_start();
        if($_SESSION['idTipoUsuario'] == 3){
            $subSelect = " AND p.idProveedor IN(
                        SELECT DISTINCT p.idProveedor FROM grupohsi_catalogoelectronico.asignacion AS a
                            LEFT JOIN grupohsi_catalogoelectronico.proveedores AS p ON a.idProveedor = p.idProveedor
                            WHERE a.IdComprador = " .$_SESSION['IdComprador'] .")";
        }else{
            $subSelect = "";
        }
        $resP = $db->execute("SELECT 
                                COUNT(*) AS Activos
                                FROM grupohsi_catalogoelectronico.usuarios AS u
                                    INNER JOIN grupohsi_catalogoelectronico.proveedores AS p ON u.IdUsuario = p.idUsuario
                                    WHERE u.activo = 1 AND u.actualizaPassword = 1 $subSelect");
        $Total = $resP->fields['Activos'];
    	return $Total;
    }

    function listVisitasDiariasAdmin(){
        global $db;
        $db->debug = 0;
        session_start();
        /**
         * Agrupadas por semana del Año
         */
        if($_SESSION['idTipoUsuario'] == 3){
            $subSelect = " AND u.IdUsuario IN (
	                SELECT DISTINCT p.idUsuario FROM grupohsi_catalogoelectronico.asignacion AS a
					LEFT JOIN grupohsi_catalogoelectronico.proveedores AS p ON a.idProveedor = p.idProveedor
					WHERE a.IdComprador = " .$_SESSION['IdComprador'] .")";
        }else{
            $subSelect = "";
        }
        $sql = "SELECT 
                DAY(b.fechaCreacion) AS Dia,
                DATEPART(WEEK,b.fechaCreacion) AS Semana,
                MONTH(b.fechaCreacion) AS Mes,
                YEAR(b.fechaCreacion) AS Anio,
                u.nombre,
                u.idUsuario,
                b.fechaCreacion,
                COUNT(*) AS Visitas
                    FROM grupohsi_catalogoelectronico.bitacora as b 
                    INNER JOIN grupohsi_catalogoelectronico.usuarios AS u ON b.idUsuario = u.idUsuario   
                        WHERE u.idTipoUsuario = 4 AND u.activo = 1 AND b.accion LIKE '%login%' AND b.fechaCreacion >= MONTH(NOW()) - 3 $subSelect
                            GROUP BY DAY(b.fechaCreacion), DATEPART(WEEK,b.fechaCreacion), MONTH(b.fechaCreacion), YEAR(b.fechaCreacion), u.nombre, u.idUsuario, b.fechaCreacion 
                            ORDER BY Mes ASC";
        $array = $db->getAll($sql);
    	return $array;      
        
    }

    function listVisitasDiarias(){
        global $db;
        $db->debug = 0;
        session_start();
        /**
         * Agrupadas por semana del Año
         */
        if($_SESSION['idTipoUsuario'] == 3){
            $subSelect = " AND u.IdUsuario IN (
	                SELECT DISTINCT p.idUsuario FROM grupohsi_catalogoelectronico.asignacion AS a
					LEFT JOIN grupohsi_catalogoelectronico.proveedores AS p ON a.idProveedor = p.idProveedor
					WHERE a.IdComprador = " .$_SESSION['IdComprador'] .")";
        }else{
            $subSelect = "";
        }
        $sql = "SELECT 
                /*DAY(b.fechaCreacion) AS Dia,*/
                /*DATEPART(WEEK,b.fechaCreacion) AS Semana,*/
                MONTH(b.fechaCreacion) AS Mes,
                YEAR(b.fechaCreacion) AS Anio,
                u.IdUsuario,
                COUNT(*) AS Visitas
                    FROM grupohsi_catalogoelectronico.bitacora as b 
                    INNER JOIN grupohsi_catalogoelectronico.usuarios AS u ON b.idUsuario = u.idUsuario   
                        WHERE u.idTipoUsuario = 4 AND u.activo = 1 AND b.accion LIKE '%login%' AND b.fechaCreacion >= MONTH(NOW()) - 3 $subSelect
                            GROUP BY /*DAY(b.fechaCreacion), DATEPART(WEEK,b.fechaCreacion),*/ MONTH(b.fechaCreacion), YEAR(b.fechaCreacion), u.IdUsuario 
                            ORDER BY Mes ASC";
        $array = $db->getAll($sql);
    	return $array;      
        
    }

    function getProveedorbyUserId($id){
        global $db;
        $db->debug = 0;
        $arrayProveedor = array();
        $resP = $db->execute("SELECT p.nombreCompleto, p.noControl FROM grupohsi_catalogoelectronico.proveedores AS p WHERE p.idUsuario = $id");
        $nombre = $resP->fields['nombreCompleto'];
        $noControl = $resP->fields['noControl'];
        $arrayProveedor = array($noControl, $nombre);
    	return $arrayProveedor;
    }

    function getVisitasDia_Grafica(){
        global $db;
        $db->debug = 0;
        $cont = 0;
        $data = array();
        session_start();
        if($_SESSION['idTipoUsuario'] == 3){
            $subSelect = " AND u.IdUsuario IN (
	                SELECT DISTINCT p.idUsuario FROM grupohsi_catalogoelectronico.asignacion AS a
					LEFT JOIN grupohsi_catalogoelectronico.proveedores AS p ON a.idProveedor = p.idProveedor
					WHERE a.IdComprador = " .$_SESSION['IdComprador'] .")";
        }else{
            $subSelect = "";
        }
        $resData = $db->execute("SELECT 
            MONTH(b.fechaCreacion) AS Mes,
            DAY(b.fechaCreacion) AS Dia,
            YEAR(b.fechaCreacion) AS Anio,
            COUNT(*) AS Visitas
        FROM grupohsi_catalogoelectronico.bitacora as b 
        INNER JOIN grupohsi_catalogoelectronico.usuarios AS u ON b.idUsuario = u.idUsuario   
            WHERE u.idTipoUsuario = 4 AND u.activo = 1 AND b.accion LIKE '%login%' AND b.fechaCreacion >= MONTH(NOW()) - 3 $subSelect
            GROUP BY DAY(b.fechaCreacion), MONTH(b.fechaCreacion), YEAR(b.fechaCreacion) 
                ORDER BY Mes ASC");

        foreach ($resData as $row) {
            $data[] = $row;
        }

        echo json_encode($data);    
    }
}
?>