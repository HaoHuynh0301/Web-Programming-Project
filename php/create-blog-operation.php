<?php
require_once("./php/db-connector.php");
error_reporting(0);
session_save_path('C:\xampp\tmp');
session_start();

if(empty($_SESSION["auth"]) || $_SESSION["auth"] == 'false') {
    header('Location: login.php');
}

if (isset($_POST['create'])) {
    $title = textboxValue("title");
    $content = textboxValue("content");

    if ($title && $content) {
        $user_id = $_SESSION['user_id'];
        $sql = "insert into blog(blog_title, blog_content, user_id) values('$title','$content', $user_id)";
        mysqli_query($GLOBALS['conn'], $sql);
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
