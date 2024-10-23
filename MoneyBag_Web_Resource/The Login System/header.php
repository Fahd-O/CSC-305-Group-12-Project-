<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoneyBag | Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="outline">

     <!-- Society Logo -->
     <div class="logo"> <a class="m">Money</a><a class="b">Bag</a><a class="tm">&trade;</a> </div> 
    
    <header>
        <nav class="nav-header-main">
           
            
            <br><br><a href="..\index.php" class="homebtn">• Home</a><br>

            <h1 style="text-align: center;font-size:xx-large;">
                User Profile
            </h1>
          
            
                <?php
                    #some profile codes implemented from Bro Ibrahim(Algorithm)
                    if(isset($_SESSION['userId']))
                    {
                        $servername = "localhost";
                        $dBUsername = "root";
                        $dBPassword = "root";
                        $dBType = "mysql";
                        $dBName = "MoneyBag.";

                        $string = $dBType . ":host=". $servername .";dbname=". $dBName;
                        $conn = new PDO($string,$dBUsername,$dBPassword);

                        #session_start();
                        $data['username'] = $_SESSION["userUid"];

                        $query = "SELECT uidUsers, emailUsers FROM MoneyBag_Registered_User_Info_Table WHERE uidUsers = :username";

                        $stmt = $conn->prepare($query);

                        $result = $stmt->execute($data);

                            $data = $stmt->fetchAll(PDO::FETCH_OBJ);
                            echo '<p style="text-align: center;font-size:xx-large; color:rgba(0, 0, 0, 0.623)"> Assalaamu alaykum warahmatullahi wabarakaatuh ya '.$data[0]->uidUsers;
            
                       echo '<p class="login-status">You are logged in !</p>

                       <img src="../img./UProfile..png" alt="Dummy User Profile Image"
                       width="1280px" height="800px">

                       <form action="includes/logout.inc.php" method="POST">
                       
                       <button type="submit" name="logout-submit" class="logoutbutton">Logout</button>

                       </form>';
                    }
                    else
                    {
                        if($_GET['error'] == "emptyfields")
                        {
                            echo'<p style="text-align: center; font-size: x-large; color:red">Fields cannot be empty !</p>';
                        }
                        elseif($_GET['error'] == "sqlerror")
                        {
                            echo '<p style="text-align: center; font-size: x-large; color:red">Critical SQL error encountered !</p>';
                        } 
                        elseif($_GET['error'] == "nouser")
                        {
                            echo '<p style="text-align: center; font-size: x-large; color:red">User not registered !</p>';
                        }
                        elseif($_GET['error'] == "wrongpwd")
                        {
                            echo '<p style="text-align: center; font-size: x-large; color:red">Incorrect password !</p>';
                        }

                        echo '<p class="login-status">You are logged out !</p>
                        <div class="login-box">
                        
                            <form action="includes/login.inc.php"       method="POST">
                            <h1 style="text-align: center; font-size: xx-large">
                                Login 
                            </h1>
                            <p style="font-size: x-large;"> 
                                Enter your username and password to login...
                            </p>
                            <p>
                                <label for="Username" class="un">Username:</label> 
                                <input type="text" name="mailuid" placeholder="Username/E-mail...">
                            </p>
                            <p>
                                <label for="User Password" class="pw">Password:</label> 
                                <input type="password" name="pwd" placeholder="Password">
                            </p>

                            <button type="submit" name="login-submit" class="login-signupbutton" >Login</button>

                            </form>

                            Don‛t have an account yet ?<br><br> 
                            <a href="signUp.php" class="header-signup">Signup</a><br><br>

                        </div>';
                    }

                    
                ?>

              
        </nav>
    </header>