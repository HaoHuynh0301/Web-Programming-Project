<?php 
include('./php/db-connector.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = textboxValue("name");
    $email = textboxValue("email");
    $phone = textboxValue("phone");
    $message = textboxValue("message");

    $sql = "INSERT INTO contact(contact_email, contact_message, contact_name, contact_phonenumber) VALUES ('$emai', '$message', '$name', '$phone')";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo mysqli_error($conn);
    } else {
        echo "<script>alert('Get contact successfully!')</script>";
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
?>