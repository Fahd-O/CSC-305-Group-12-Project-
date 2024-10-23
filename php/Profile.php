<?php
    session_start();
    include("Connection.php");
    include("Function.php");

    $user_data = check_login($con);

?>

<!-- html codes... -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> WebCode </title>
    <link rel="stylesheet" href="loginPro.css" >
</head>
<body class="outline">
    
    <h1 style="text-align: center;">
        User Profile
    </h1>

    <img src="Profile.png"/> <br><br><br>

    <a href="Logout.php"> Logout </a>

    <br><br><br><br>
    Hello, <?php echo $user_data['user_name']; ?>


    <footer class="page_footer"><!-- Displays footer, usually Copyrights --> 
        Made With Expertise &copy; WebCode.Inc&trade; 
    </footer>

</body>
</html>

