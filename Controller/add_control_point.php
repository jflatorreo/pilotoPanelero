<?php
require('../View/common.php');
if($_POST){	
	//A la variable resultado se le agrega un nuevo punto, cargandolo a la bd.
	$result = $db->add_control_point($_POST['codigo'],$_POST['lat'],$_POST['lon'],$_POST['registrador']);
	// se imprime el resultado.
	echo json_encode($result);
}

?>
