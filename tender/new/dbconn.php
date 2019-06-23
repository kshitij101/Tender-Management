<?php $server_feedback = array();
	$db_host = 'localhost';
	$db_user = 'root';
	$db_pass = '';

	$db_name = 'ugc';
if($conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name)){
	$server_feedback[] ='CONNECTED :)';
	if($database = mysqli_select_db($conn,$db_name)){
		$server_feedback[] ='DATABASE SELECTED';
	}
	else{
		$server_feedback[] = 'DATABASE WAS NOT FOUND';
	}
}
else{
	$server_feedback[] ='NOT CONNECTED TO SERVER :(';
}
?>