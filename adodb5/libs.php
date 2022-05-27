<?php
function getPassword(){
    $caracteres = '0123456789abcdefghijklmnpqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ$#@!?=%';
    $caractereslong = strlen($caracteres);
    $clave = '';
    for($i = 0; $i < 7; $i++) {
        $clave .= $caracteres[rand(0, $caractereslong - 1)];
    }
    return $clave;
}
function get_file_dir() {
    global $argv;
    $dir = dirname(getcwd() . '/' . $argv[0]);
    $curDir = getcwd();
    chdir($dir);
    $dir = getcwd();
    chdir($curDir);
    return $dir;
}

function png2jpg($filePath) {
    $image = imagecreatefrompng($filePath);
    $bg = imagecreatetruecolor(imagesx($image), imagesy($image));
    imagefill($bg, 0, 0, imagecolorallocate($bg, 255, 255, 255));
    imagealphablending($bg, TRUE);
    imagecopy($bg, $image, 0, 0, 0, 0, imagesx($image), imagesy($image));
    imagedestroy($image);
    $quality = 100; // 0 = worst / smaller file, 100 = better / bigger file
    $filePath = str_replace('.png', '', $filePath);
    imagejpeg($bg, $filePath . '.jpg', $quality);
    ImageDestroy($bg);
}

function image_gd($file, $tam = 800) {
    //Separamos las extenciones de archivos para definir el tipo de ext.
    $extension = explode('.', $file);
    $ext = count($extension) - 1;
    //Determinamos las extenciones permitidas.
    if ('jpg' == $extension[$ext] || 'jpeg' == $extension[$ext] || 'JPG' == $extension[$ext]) {
        $image = ImageCreateFromJPEG($file);
    } else if ($extension[$ext] == 'gif') {
        $image = ImageCreateFromGIF($file);
    } else if ($extension[$ext] == 'png') {
        $image = ImageCreateFromPNG($file);
    } else {
        echo 'Error, extencion no permitida ->' . $file;
        die();
    }

    $thumb_name = substr($file, 0, -4); //nombre del thumbnail
    $width = imagesx($image); //ancho
    $height = imagesy($image); //alto

    if ($width > $tam) {
        $nueva_anchura = $tam; // Definimos el tamaño a 100 px
        $nueva_altura = ($nueva_anchura * $height) / $width; // tamaño proporcional
    } else {
        $nueva_anchura = $width; // Definimos el tamaño a 100 px
        $nueva_altura = $height; // tamaño proporcional
    }

    if (1000 < $nueva_altura) {
        $an = $nueva_altura;
        $nueva_altura = 1000;
        $nueva_anchura = ($nueva_altura * $nueva_anchura) / $an;
    }

    if (function_exists('imagecreatetruecolor')) {
        $thumb = ImageCreateTrueColor($nueva_anchura, $nueva_altura); //Color Real
    }
    //En caso de no encontrar la funcion, la saca en calidad media
    if (!$thumb) {
        $thumb = ImageCreate($nueva_anchura, $nueva_altura);
    }

    ImageCopyResized($thumb, $image, 0, 0, 0, 0, $nueva_anchura, $nueva_altura, $width, $height);
    //header("Content-type: image/jpeg");
    ImageJPEG($thumb, '' . $thumb_name . '.jpg', 100);
    imagedestroy($image);

    return $image;
}

function Convertir_a_url($title) {

    $title = stripAccents($title);

    $arrStupid = array('feat.', 'feat', '.com', '(tm)', ' ', '*', "'s", '"', ',', ':', ';', '@', '#', '(', ')', '?', '!', '_', '$', '+', '=', '|', "'", '/', '~', '`s', '`', '\\', '^', '[', ']', '{', '}', '<', '>', '%', '&#8482;', '&rdquo;', '&iacute;', '&ntilde;', '&amp;', '&', '®');
    $title = preg_replace('/&([a-zA-Z])(.*?);/', '$1', $title);
    $title = htmlentities($title);
    $title = strtolower($title);
    $title = str_replace('', '', $title);
    $title = str_replace('.', '', $title);
    $title = str_replace('&amp;', '', $title);
    $title = str_replace('&', '', $title);
    $title = str_replace($arrStupid, '-', $title);
    $title = str_replace('039;', '', $title);
    $title = str_replace('--', '-', $title);
    $flag = 1;
    while ($flag) {
        $newtitle = str_replace('--', '-', $title);
        if ($title != $newtitle) {
            $flag = 1;
        } else
            $flag = 0;
        $title = $newtitle;
    }
    $len = strlen($title);
    if ('-' == $title[$len - 1]) {
        $title = substr($title, 0, $len - 1);
    }
    return $title;
}

function stripAccents($string) {
    return strtr(utf8_decode($string), utf8_decode('àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ'), 'aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY');
}

function date_decode($str_server_datetime, $str_user_timezone, $str_user_dateformat) {

    // create date object
    try {
        $date = new DateTime($str_server_datetime);
    } catch (Exception $e) {
        trigger_error('date_decode: Invalid datetime: ' . $e->getMessage(), E_USER_ERROR);
    }

    // convert to user timezone
    $userTimeZone = new DateTimeZone($str_user_timezone);
    $date->setTimeZone($userTimeZone);

    // convert to user dateformat
    $str_user_datetime = $date->format($str_user_dateformat);

    return $str_user_datetime;
}

function date_encode($str_user_datetime, $str_user_timezone, $str_user_dateformat, $str_server_timezone = CONST_SERVER_TIMEZONE, $str_server_dateformat = CONST_SERVER_DATEFORMAT, $str_safe_dateformat_strtotime = CONST_SAFE_DATEFORMAT_STRTOTIME) {

    // set timezone to user timezone
    date_default_timezone_set($str_user_timezone);

    // create date object using any given format
    if ($str_user_datetime == 'now' || !$str_user_datetime) {
        $date = new DateTime('', new DateTimeZone($str_user_timezone));
    } else {
        $date = DateTime::createFromFormat($str_user_dateformat, $str_user_datetime, new DateTimeZone($str_user_timezone));
        if (false === $date) {
            trigger_error('date_encode: Invalid date', E_USER_ERROR);
        }
    }
    $str_user_datetime = $date->format($str_safe_dateformat_strtotime);
    $str_server_datetime = gmdate($str_server_dateformat, strtotime($str_user_datetime));
    date_default_timezone_set($str_server_timezone);
    return $str_server_datetime;
}

function get_ip() {
    //Just get the headers if we can or else use the SERVER global
    if (function_exists('apache_request_headers')) {
        $headers = apache_request_headers();
    } else {
        $headers = $_SERVER;
    }
    //Get the forwarded IP if it exists
    if (array_key_exists('X-Forwarded-For', $headers) && filter_var($headers['X-Forwarded-For'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
        $the_ip = $headers['X-Forwarded-For'];
    } elseif (array_key_exists('HTTP_X_FORWARDED_FOR', $headers) && filter_var($headers['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)
    ) {
        $the_ip = $headers['HTTP_X_FORWARDED_FOR'];
    } else {
        $the_ip = filter_var($_SERVER['REMOTE_ADDR'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV4);
    }
    return $the_ip;
}

function cambiarFecha($fecha) {
    if (empty($fecha)) {
        $fecha = date('Y-m-d');
    }
    date_default_timezone_set('America/Mexico_City');
    $dias = array('Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado');
    $meses = array('', 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
    $meses['01'] = 'Enero';
    $meses['02'] = 'Febrero';
    $meses['03'] = 'Marzo';
    $meses['04'] = 'Abril';
    $meses['05'] = 'Mayo';
    $meses['06'] = 'Junio';
    $meses['07'] = 'Julio';
    $meses['08'] = 'Agosto';
    $meses['09'] = 'Septiembre';
    $meses['10'] = 'Octubre';
    $meses['11'] = 'Noviembre';
    $meses['12'] = 'Diciembre';
    $hora = date('h');
    if (0 == $hora)
        $hora = 12;
    $hora = strftime('%I:%M %p', strtotime($fecha));
    return $dias[strftime('%w', strtotime($fecha))] . ' ' . strftime('%d', strtotime($fecha)) . ' de ' . $meses[strftime('%m', strtotime($fecha))] . ' del ' . strftime('%Y', strtotime($fecha));
}

function cambiaFechaHora($fecha) {
    if (empty($fecha)) {
        $fecha = date('Y-m-d');
    }
    date_default_timezone_set('America/Mexico_City');
    $dias = array('Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado');
    $meses = array('', 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
    $meses['01'] = 'Ene';
    $meses['02'] = 'Feb';
    $meses['03'] = 'Mar';
    $meses['04'] = 'Abr';
    $meses['05'] = 'May';
    $meses['06'] = 'Jun';
    $meses['07'] = 'Jul';
    $meses['08'] = 'Ago';
    $meses['09'] = 'Sept';
    $meses['10'] = 'Oct';
    $meses['11'] = 'Nov';
    $meses['12'] = 'Dic';
    $hora = date('h');
    if (0 == $hora)
        $hora = 12;
    $hora = strftime('%I:%M %p', strtotime($fecha));
    return strftime('%d', strtotime($fecha)) . '/' . $meses[strftime('%m', strtotime($fecha))] . '/' . strftime('%Y', strtotime($fecha)) . ' ' . $hora;
}

function LinealizarOutput($output) {
    //$output = htmlentities($output);
    $output = html_entity_decode($output, ENT_QUOTES, 'UTF-8');
    $output = htmlspecialchars_decode($output);
    $output = strip_tags($output);
    $output = preg_replace('/\t{1,}/', ' ', $output);
    $output = preg_replace('/\n{1,}/', ' ', $output);
    $output = preg_replace('/\r{1,}/', ' ', $output);
    $output = preg_replace('/\s{1,}/', ' ', $output);
    $output = trim($output);
    return $output;
}

function js_str($s) {
    if (is_array($s)) {
        return js_array($s);
    } else {
        return '"' . addcslashes($s, "\0..\37\"\\") . '"';
    }
}

function js_array($array) {
    if (!empty($array)) {
        if (is_array($array)) {
            $temp = array_map('js_str', $array);
        } else {
            $temp[] = 0;
        }
    } else {
        $temp = array();
    }
    return '[' . implode(',', $temp) . ']';
}

function redirect(string $path, string $url, array $parameters = []) {
    $path = $path[strlen($path) - 1] === '/' ? $path : "{$path}/";
    $url = $url[0] === '/' ? substr($url, 1) : $url;
    $uri = "{$path}{$url}";

    if (count($parameters) > 0) {
        $uri .= '?';

        $i = 0;
        foreach ($parameters as $key => $value) {
            if ($i > 0) {
                $uri .= '&';
            }

            $uri .= "{$key}={$value}";
            ++$i;
        }
    }

    header("Location: {$uri}");
    exit;
}

function formatDate_BDD($date){
    $fecha = str_replace("/", "-", $date);
    $dateF =  $fecha;
    return $dateF;
}

function formatDate_row($date){
    if (empty($date)) {
        $date = date('d-m-Y H:i:s');
    }
    $fechaT = str_replace("T", " ", $date);
    $fechaZ = str_replace("Z", " ", $fechaT);
    $dateFormat = substr($fechaZ, 0, -4);

    $resultDate = cambiaFechaHora($dateFormat);
    return $resultDate;
}

function format_Date($date){
    if (empty($date)) {
        $date = date('d/m/Y');
    }
    $fechaT = str_replace("T", " ", $date);
    $fechaZ = str_replace("Z", " ", $fechaT);
    $dateFormat = substr($fechaZ, 0, 10);
    $dateFormat = date("d/m/Y", strtotime($dateFormat));
    return $dateFormat;
}

function format_Date_scape($date){
    if (empty($date)) {
        $date = date('Ymd');
    }
    $fechaT = str_replace("T", " ", $date);
    $fechaZ = str_replace("Z", " ", $fechaT);
    $dateFormat = substr($fechaZ, 0, 10);
    $dateFormat = date("Ymd", strtotime($dateFormat));
    return $dateFormat;
}

function datePickerRange($date){
    if (empty($date)) {
        $date = date('Y/m/d');
    }
    $fechaT = str_replace("T", " ", $date);
    $fechaZ = str_replace("Z", " ", $fechaT);
    $dateFormat = substr($fechaZ, 0, 10);
    $dateFormat = date("Y/m/d", strtotime($dateFormat));
    return $dateFormat;
}

function asMoney($value) {
    return '$' . number_format($value, 3);
}

function sanitizeString($var) { 
    $var = stripslashes($var); 
    $var = strip_tags($var); 
    $var = htmlentities($var); 
    return $var; 
} 

function getFloatNumber($num){
    if($num != '' || $num != null){
        $formatNum = number_format((float)$num, 2, '.', '');
    }else{
        $formatNum =  '0.00';
    }
    
    return $formatNum;
}

function getNumber($num){
    if($num != '' || $num != null){
        $formatNum = $num;
    }else{
        $formatNum =  '0';
    }
    
    return $formatNum;
}
?>