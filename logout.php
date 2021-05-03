<?php 
    session_save_path('C:\xampp\tmp');
    session_start();
    $_SESSION['auth'] = "false";
    header("Location: index.php");
?>