<?php
    require 'connect.php';
    session_start();
    if(isset($_COOKIE['email']))
    {
        $_SESSION['user_id'] = $_COOKIE['user_id'] ;
        $_SESSION['first_name'] = $_COOKIE['first_name'] ;
    }
?>