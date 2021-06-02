<?php 
include('./php/db-connector.php');
error_reporting(0);
session_start();

if (isset($_POST['submit'])) {
    $title = textboxValue("title");
    $content = textboxValue("content");
    $cover = $_FILES["cover_img"]['name'];
    $blog_id = $_SESSION['postId'];

	$target = './php/upload-img/blog-img/' . $cover;

    if ($title && $content) {
        $sql = "UPDATE blog SET blog_title = '$title', blog_content = '$content' WHERE blog_id = '$blog_id'";
        $result = mysqli_query($GLOBALS['conn'], $sql);
        if (!$result) {
            echo mysqli_error($conn);
        } else {
            echo "<script>alert('Post edited successfully!')</script>";
        }
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