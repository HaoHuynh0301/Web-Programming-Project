<?php
require_once("./php/db-connector.php");

if (isset($_POST['create'])) {
    $title = textboxValue("title");
    $content = textboxValue("content");

    if ($title && $content) {
        $sql = "insert into blog(blog_title, blog_content) values('$title','$content')";

        if (!mysqli_query($GLOBALS['conn'], $sql)) {
            sendNotification("error", "Please insert data");
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
