<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "root";
$dBName = "MoneyBag.";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn)
{
    die("Connection to Database failed: ".mysqli_connect_error());
}