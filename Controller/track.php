<?php
require('../View/common.php');
if($_POST && !empty($_POST['fname'])){	
	//Nos permite revisar los datos en los cuales ha estdo registrado 
	$result = $db->track_qr(explode("?", $_POST['codigo'],2)[0]);
	echo json_encode($result);
}

?>
