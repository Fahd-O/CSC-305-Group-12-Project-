<?php

session_start();
If(isset($_SESSION['user_id']))
{
    unset($_SESSION['user_id']);
}

header("Location: login.php");
die;
?>