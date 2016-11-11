<?php

function get_db_connection(){
    $db = mysqli_connect('localhost', '875960_3_1', 'qEIBX3dsTkF1', '875960_3_1')
        or die('Fehler beim Verbinden mit dem Datenbankserver.');
    mysqli_set_charset($db, "utf8");
    return $db;
}

function get_result($sql){
	$db = get_db_connection();
	/*echo $sql;*/
	$result = mysqli_query($db, $sql);
	mysqli_close($db);
	return $result;	
}

/***********************/
/* index.php SQL Statements in Functions Register and Login*/
/***********************/

function login($email, $password){
	$sql = "SELECT * FROM User WHERE email = '$email' AND password = '$password';";
	return get_result ($sql);
}

function register($username, $email, $password){
  $sql = "INSERT INTO User (UserName, email, password) VALUES ('$username', '$email', '$password');";
  return get_result ($sql);
}