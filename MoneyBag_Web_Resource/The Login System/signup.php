<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoneyBag | Signup</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="outline">

     <!-- Society Logo -->
     <div class="logo"> <a class="m">Money</a><a class="b">Bag</a><a class="tm">&trade;</a> </div> 
    
    <header>
        <nav class="nav-header-main">
           
            
            <ul>
            <li><a href="..\index.php" style="text-decoration:none; font-size:x-large">Home</a></li>
                
            </ul>
            
            <div class="signup-box">
                <main>
                <div class="wrapper-main">
                    <section class="section-default">

                    <h1 style="text-align: center; font-size: xx-large">SignUp</h1>

                    <?php
                            if(isset($_GET['error']))
                            {   $fields = '<form class="form-signup" action="includes/signup.inc.php" method="POST">

                                <label for="Username" class="un">Username:</label> 
                                <input type="text" name="uid" placeholder="Username">
        
                                <label for="email" class="un">E-mail:</label> 
                                <input type="text" name="mail" placeholder="E-mail"><br><br>
        
                                <label for="User Password" class="pw">Password:</label> 
                                <input type="password" name="pwd" placeholder="Password">
        
                                <label for="User Password" class="pw">Repeat Password:</label> 
                                <input type="password" name="pwd-repeat" placeholder="Repeat password"><br><br>
                                
                                <button type="submit" name="signup-submit" class="login-signupbutton">Signup</button><br>
                                
                                Already have an account ?<br><br> 
                                <a href="index.php" class="header-signup">Login</a><br><br>' ;
                                
                                if($_GET['error'] == "emptyfields")
                                {
                                    echo '<p class="signuperror">Fill in all fields !</p>'.$fields;
                                }
                                elseif($_GET['error'] == "invaliduidmail")
                                {
                                    echo '<p class="signuperror">Invalid username and e-mail !</p>'.$fields;
                                }
                                elseif($_GET['error'] == "invaliduid")
                                {
                                    echo '<p class="signuperror">Invalid username !</p>'.$fields;
                                }
                                elseif($_GET['error'] == "invalidmail")
                                {
                                    echo '<p class="signuperror">Invalid e-mail !</p>'.$fields;
                                }
                                elseif($_GET['error'] == "passwordcheck")
                                {
                                    echo '<p class="signuperror">Your passwords do not match !</p>'.$fields;
                                }
                                elseif($_GET['error'] == "usertaken")
                                {
                                    echo '<p class="signuperror">Username is already taken !</p>'.$fields;
                                }
                                elseif($_GET['error'] == "sqlerror")
                                {
                                    echo '<p class="signuperror">Critical SQL error encountered !</p>'.$fields;
                                }
                            }
                            elseif($_GET['signup'] == "success")
                            {
                                echo '<p class="signupsuccess">Signup Successful !</p>
                                <p>You can now login with your details on the login page</p>

                                <p>
                                <a class="lrbtn" href="index.php"> Ok </a> </p>';
                            }
                            else
                            {
                                echo '<form class="form-signup" action="includes/signup.inc.php" method="POST">

                                <label for="Username" class="un">Username:</label> 
                                <input type="text" name="uid" placeholder="Username">
        
                                <label for="email" class="un">E-mail:</label> 
                                <input type="text" name="mail" placeholder="E-mail"><br><br>
        
                                <label for="User Password" class="pw">Password:</label> 
                                <input type="password" name="pwd" placeholder="Password">
        
                                <label for="User Password" class="pw">Repeat Password:</label> 
                                <input type="password" name="pwd-repeat" placeholder="Repeat password"><br><br>
                                
                                <button type="submit" name="signup-submit" class="login-signupbutton">Signup</button><br>
                                
                                Already have an account ?<br><br> 
                                <a href="index.php" class="header-signup">Login</a><br><br>';
                            }
                    ?>

                    

                    </form>

                    </section>
                </div>
                </main>


            </div>
            
        </nav>
    </header>


    
<?php
    require "footer.php";
?>