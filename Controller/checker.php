//En esta parte se hace la cerificacion de usuarios
<?php require('../View/common.php');
//get current counter
$data['current'] = (int)$db->check_changes();
//set initial value of update to false
$data['update'] = false;
//check if it's ajax call with POST containing current (for user) counter;
//and check if that counter is diffrent from the one in database
if(isset($_POST) && !empty($_POST['counter']) && !empty($_POST['id_curso']) && (int)$_POST['counter']!=$data['current']){
	//the counters are diffrent so get new message list
	$data['news'] .= $db->get_news($_POST['id_curso']);
	$data['count'] .= $db->get_count($_POST['id_curso']);
	$data['update'] = true;
}
//just echo as JSON
echo json_encode($data);
/* End of file checker.php */
