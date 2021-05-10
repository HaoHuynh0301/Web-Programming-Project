<?php
include('./php/db-connector.php');

if (isset($_POST['submit'])) {
	$username = textboxValue("username");
	$email = textboxValue("email");
	$password = textboxValue("password");
	$confirm_password = textboxValue("confirm_password");
	$profile_img = $_FILES['profile_img']['name'];

	$target = 'php/upload-img/profile-img/' . $profile_img;

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
				move_uploaded_file($_FILES['profile_img']['tmp_name'], $target);
				$sql = "insert into users(users_username, users_email, users_password, profile_img) values('$username', '$email', '$password', '$profile_img')";
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
