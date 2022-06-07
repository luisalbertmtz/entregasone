<?php
header('Content-type: text/javascript');
header('Access-Control-Allow-Origin: *');
header('Cache-Control: no-cache, must-revalidate');
$redirect = PATH . 'modulos/Principal/principal.php';
?>

$("#message").html('<div class="alert <?php echo $alert;?> alert-dismissible fade show" role="alert"><strong></strong> <?php echo $msg; ?><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');

setTimeout(function(){ 
    <?php if ($valid == true) {?>
        document.location.replace("<?= $redirect ?>");
    <?php } ?>   
}, 2000);

