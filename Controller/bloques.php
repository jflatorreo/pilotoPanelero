<?php require('../View/common.php');

if(isset($_POST) && !empty($_POST['id_curso']) ){
	// Se busca el elemento en l base de datos.
	$data = $db->get_bloques($_POST['id_curso']);
}
// JSON
echo json_encode($data);
