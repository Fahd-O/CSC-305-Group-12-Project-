<!-- Designed by Bro Ibrahim(Algorithm) -->
<?php

// require "./TheLoginSystem/includes/dbh.inc.php";

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "root";
$dBType = "mysql";
$dBName = "MoneyBag.";

$string = $dBType . ":host=". $servername .";dbname=". $dBName;
$conn = new PDO($string,$dBUsername,$dBPassword);

session_start();
$data['username'] = $_SESSION["userUid"];

$query = "SELECT uidUsers, emailUsers FROM MoneyBag_Registered_User_Info_Table WHERE uidUsers = :username";

$stmt = $conn->prepare($query);

$result = $stmt->execute($data);

    $data = $stmt->fetchAll(PDO::FETCH_OBJ);
     echo $data[0]->uidUsers;
?>


<!-- html codes -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> MoneyBag | Profile </title>
    <link rel="stylesheet" href="loginPro.css" >
</head>
<body class="outline">
    
    <h1 style="text-align: center;">
        User Profile
    </h1>

    <img src="UProfile..png"/>


    <footer class="page_footer"><!-- Displays footer, usually Copyrights --> 
        Made With Expertise by Group 12 Somewhere On Earth &copy; CopyRight Group 12. All rights reserved.    
    </footer>

</body>
</html>