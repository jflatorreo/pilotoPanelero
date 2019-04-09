<?php
require('../View/common.php');
if($_POST && !empty($_POST['fname'])){	
	//registrar en el caso que no se emcuentren en las bases de datos 
	$result = $db->registrar(explode("?", $_POST['codigo'],2)[0],$_POST['curso'],$_POST['prod_ca'],$_POST['prod_pa'],$_POST['tipo'],$_POST['registrador'],$_POST['lat'],$_POST['lon']);
	echo json_encode($result);
}

?>
