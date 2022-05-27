<?php
header('Cache-control: private');
date_default_timezone_set('America/Mexico_City');
setlocale(LC_ALL, 'es_MX');
ini_set('display_errors', 'Off');
ini_set('SMTP', '');
ini_set('sendmail_from', '');
ini_set('post_max_size', '32M');
ini_set('upload_max_filesize', '100M');
ini_set('memory_limit', '512M');
ini_set('max_execution_time', 0);
ini_set('variables_order', 'EGPCS');
ini_set('bcmath.scale', 'enable');

//error_reporting(E_ERROR | E_PARSE);
error_reporting(E_ALL ^ E_NOTICE);
set_time_limit(0);
require 'config.php';
require 'adodb.inc.php';
require 'adodb-active-record.inc.php';
require 'adodb-error.inc.php';
require 'adodb-exceptions.inc.php';
require 'adodb-errorhandler.inc.php';
require 'libs.php';

$db = NewADOConnection(serverType);
$db->Connect(serverHost, serverUname, serverPass, serverDB);
//$db->debug = true;
$db->SetFetchMode(ADODB_FETCH_ASSOC);
$db->setCharset('utf8');

if (!$db->isConnected()){
	die("No está online");
}
?>