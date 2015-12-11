<?php 
	include('../connection.php');
	$data = json_decode(file_get_contents("php://input"));
	$token = $data->token;
	$db->query("UPDATE users SET token='LOGGED OUT' WHERE token=$token");
?>