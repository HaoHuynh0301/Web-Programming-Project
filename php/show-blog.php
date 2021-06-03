<?php
require_once("./php/db-connector.php");

function getData($i)
{
    $sql = "SELECT * FROM blog ORDER BY blog_date LIMIT $i, 5";
    $result = mysqli_query($GLOBALS['conn'], $sql);

    if (mysqli_num_rows($result) > 0) {
        return $result;
    } else {
        return false;
    }
}

function getDetail($id) {
	$sql = "SELECT * FROM blog WHERE blog_id = $id";
	$result = mysqli_query($GLOBALS['conn'], $sql);

    if (mysqli_num_rows($result) > 0) {
        return $result;
    }
}

function getContains($tr) {
    $sql = "SELECT * FROM blog WHERE blog_title LIKE '%$tr%'";
    $result = mysqli_query($GLOBALS['conn'], $sql);
    if (mysqli_num_rows($result) > 0) {
        return $result;
    }
}

function getUser($id) {
	$sql = "SELECT * FROM users WHERE user_id = $id";
	$result = mysqli_query($GLOBALS['conn'], $sql);

    if (mysqli_num_rows($result) > 0) {
        return $result;
    }
}

function getSamplePost() {
	$sql_title = "SELECT * FROM blog WHERE blog_id = 1";
	$Result = mysqli_query($GLOBALS['conn'], $sql_title);

	if (mysqli_num_rows($Result) > 0) {
		return $Result;
	}
     
}

function getComment($id) {
    $sql = "SELECT * FROM comment WHERE blog_id = $id";
    $Result = mysqli_query($GLOBALS['conn'], $sql);

	if (mysqli_num_rows($Result) > 0) {
		return $Result;
	} else {
        return false;
    }
}

function getUserFromBlogId($id) {
    $sql = "SELECT users_username AS name from users WHERE user_id = '$id'";
    $Result = mysqli_query($GLOBALS['conn'], $sql);

	if (mysqli_num_rows($Result) > 0) {
		return $Result;
	} else {
        return false;
    }
}