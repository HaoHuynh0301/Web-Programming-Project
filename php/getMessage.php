<?php 
require_once("./php/db-connector.php");
error_reporting(0);
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $message = textboxValue("message");
    $id = $_SESSION['postId'];

    $sql = "INSERT INTO comment(blog_id, commment_message) VALUES ('$id', '$message')";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo mysqli_error($conn);
    } else {
        echo "<script>alert('Get comment successfully!')</script>";
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