<?php

$user = 'root';
$password = 'root';
$db = 'inventory';
$host = 'localhost';
$port = 8889;

if(!$con = mysqli_connect($user,$password,$db,$host,$port))
{
    die("Connection failed, as in it failed to connect, as in !");
}

/*
$dbhost ="localhost";
$dbuser ="root";
$dbpass ="root";
$dbname ="SIWES_Task_Login_db";


if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("Connection failed, as in it failed to connect, as in !");
}
*/

?>