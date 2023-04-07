<?php
	define('version', '1.0.0');  //Version de la Página
    define('serverUname', 'root');  //Usuario base de datos
    define('serverPass', '');    //password del usuario de base de datos
    define('serverDB', 'inventariosone');  //Base de datos a usar
    define('serverHost', 'localhost');   //host del servidor producción
    define('serverType', 'mysqli');    //tipo de base de datos mssqlnative mysqli
    define('DIR_PATH', str_replace(DIRECTORY_SEPARATOR . 'adodb5', '', dirname(realpath(__FILE__))));
    define('DOMAIN', $_SERVER['SERVER_NAME'].'/entregasone');
    define('PROTOCOL', 'http://');
    define('DIR_APP', '/');
    define('PATH', PROTOCOL . DOMAIN . DIR_APP);
    define('PATH_BACKEND', PATH);
?>