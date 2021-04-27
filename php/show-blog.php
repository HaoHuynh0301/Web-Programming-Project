<?php
require_once("./php/db-connector.php");

function getData()
{
    $sql = "SELECT * FROM blog";
    $result = mysqli_query($GLOBALS['conn'], $sql);

    if (mysqli_num_rows($result) > 0) {
        return $result;
    }
<<<<<<< HEAD
=======
}

function getDetail($id) {
	$sql = "SELECT * FROM blog WHERE blog_id = $id";
	$result = mysqli_query($GLOBALS['conn'], $sql);

    if (mysqli_num_rows($result) > 0) {
        return $result;
    }
}

function getSamplePost() {
	$sql_title = "SELECT * FROM blog WHERE blog_id = 2";
	$Result = mysqli_query($GLOBALS['conn'], $sql_title);

	if (mysqli_num_rows($Result) > 0) {
		return $Result;
	}
     
>>>>>>> b4aa7b8ecfb5a13dd394dc24b2723c62e2ec0e44
}