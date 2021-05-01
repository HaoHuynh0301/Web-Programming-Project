<?php
include('./php/db-connector.php');

if (isset($_POST['submit'])) {
	$username = textboxValue("username");
	$email = textboxValue("email");
	$password = textboxValue("password");
	$confirm_password = textboxValue("confirm_password");

	if ($password == $confirm_password) {
		// Check email is duplicated or not.
		$sql = "select * from users where users_email = '$email'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			echo "<script>alert('Email already exists');</script>";
		} else {
			// Check username is duplicated or not.
			$sql = "select * from users where users_username = '$username'";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
				echo "<script>alert('Username already exists');</script>";
			} 
			// Insert data to database. 
			else {
				$sql = "insert into users(users_username, users_email, users_password) values('$username', '$email', '$password')";
				$result = mysqli_query($conn, $sql);
				if (!$result) {
					echo mysqli_error($conn);
				} else {
					echo "<script>alert('User created successfully!')</script>";
				}
			}
		}
	} else {
		echo "<script>alert('Password not correct')</script>";
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
