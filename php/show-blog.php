<?php
require_once("./php/db-connector.php");

function getData()
{
    $sql = "SELECT * FROM blog";
    $result = mysqli_query($GLOBALS['conn'], $sql);

    if (mysqli_num_rows($result) > 0) {
        return $result;
    }
}