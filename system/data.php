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

function get_user($user_id){
	$sql = "SELECT * FROM User WHERE user_id = $user_id;";
	return get_result ($sql);
}

/***********************/
/* profil.php SQL Statements in Functions Register and Login*/
/***********************/

function update_user($email, $password, $confirm_password, $username, $user_id){
    $sql_ok = false;
    $sql = "UPDATE User SET ";

    if($email != ""){
        $sql .= "email = '$email', ";
        $sql_ok = true;
	}
	if($password != "" && $password == $confirm_password) {
		$sql .= "password = '$password', ";
		$sql_ok = true;
	}
	if($username != ""){
		$sql .= "username = '$username', ";
		$sql_ok = true;
	}
	$sql = substr_replace($sql, ' ', -2, 1);
	$sql .= " WHERE user_id = $user_id ;";

	if($sql_ok){
	  return get_result($sql);
	}else{
	  return false;
	}
}
<<<<<<< HEAD

/***********************/
/* Days Berechnung */
/***********************/

$days = $_POST['days'];
$wd = "("
$n = 0;
foreach($days as $day){
if ($n > 0) $wd .= " OR ";
  $wd .= " $day = 1 ";
  $n ++
}
$wd .= ")"
=======
/***********************/
/* all.php
/***********************/
function checkbox () {
	
	
}
>>>>>>> origin/master
