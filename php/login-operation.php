<?php
include('./php/db-connector.php');
error_reporting(0);
session_save_path('C:\xampp\tmp');
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$username = textboxValue("username");
	$password = textboxValue("password");
	
	$sql = "select * from users where users_username = '$username' and users_password = '$password'";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			$_SESSION['user_id'] = $row['user_id'];
		}
		$_SESSION['auth'] = "true";
		header("Location: index.php");
	} else {
		echo "<script>alert('Wrong password or username');</script>";
	}
}

function textboxValue($value)
{
	$validation = mysqli_real_escape_string($GLOBALS['conn'], trim($_POST[$value]));
	if (empty($validation)) {
		return false;
	} else {
		return $validation;
	}
}