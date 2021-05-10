<?php
include("./php/db-connector.php");
// error_reporting(0);
session_save_path('C:\xampp\tmp');
session_start();

if(empty($_SESSION["auth"]) || $_SESSION["auth"] == 'false') {
    header('Location: login.php');
}

if (isset($_POST['submit'])) {
    $title = textboxValue("title");
    $content = textboxValue("content");
    $cover = $_FILES["cover_img"]['name'];

	$target = './php/upload-img/blog-img/' . $cover;

    if ($title && $content) {
        move_uploaded_file($_FILES["cover_img"]['tmp_name'], $target);
        $user_id = $_SESSION['user_id'];
        $sql = "insert into blog(blog_title, blog_content, user_id, blog_img) values('$title', '$content', '$user_id', '$cover')";
        $result = mysqli_query($GLOBALS['conn'], $sql);
        if (!$result) {
            echo mysqli_error($conn);
        } else {
            echo "<script>alert('Post created successfully!')</script>";
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

function sendNotification($classname, $text)
{
    $noti = "<h6 class='$classname'>$text</h6>";
    echo $noti;
}
