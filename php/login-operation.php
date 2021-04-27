<?php
include('./php/db-connector.php');

if (isset($_POST['submit'])) {
	$username = textboxValue("username");
	$password = textboxValue("password");

	$sql = "select * from users where users_username = '$username' and users_password = '$password'";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		# code...
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
