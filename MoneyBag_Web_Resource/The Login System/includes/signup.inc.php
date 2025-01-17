<?php

if (isset($_POST['signup-submit']))
{
    require 'dbh.inc.php';

    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];


    if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat))
    {
        header("Location: ../signup.php?error=emptyfields&uid=".$username."&mail=".$email);   

        exit();
    }
    //This "FILTER_VALIDATE_EMAIL" was in quotation marks before, an error was thrown, so I now had to remove the quotation marks, perhaps that was due to change in PHP version or something else.
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9\s]*$/", $username))
    {
        header("Location: ../signup.php?error=invaliduidmail"); 

        exit();
    }    //may need to put this: FILTER_VALIDATE_EMAIL, in quotation marks
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        header("Location: ../signup.php?error=invalidmail&uid=".$username); 

        exit();
    }
    else if (!preg_match("/^[a-zA-Z0-9\s]*$/", $username))
    {
        header("Location: ../signup.php?error=invaliduid&mail=".$email); 

        exit();
    }
    elseif ($password !== $passwordRepeat)
    {
        header("Location: ../signup.php?error=passwordcheck&uid=".$username."&mail=".$email); 

        exit();
    }
    else
    {
        $sql = "SELECT uidUsers FROM MoneyBag_Registered_User_Info_Table WHERE uidUsers=?";
        $stmt = mysqli_stmt_init($conn);

        $sql2 = "SELECT emailUsers FROM MoneyBag_Registered_User_Info_Table WHERE emailUsers=?";
        $stmt2 = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql) || !mysqli_stmt_prepare($stmt2, $sql2))
        {
            header("Location: ../signup.php?error=sqlerror"); 

            exit();
        }
        else
        {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultcheck = mysqli_stmt_num_rows($stmt);

            mysqli_stmt_bind_param($stmt2, "s", $email);
            mysqli_stmt_execute($stmt2);
            mysqli_stmt_store_result($stmt2);
            $resultcheck2 = mysqli_stmt_num_rows($stmt2);

            if ($resultcheck > 0)
            {
                header("Location: ../signup.php?error=usertaken&mail=".$email); 

                exit();
            }
            elseif ($resultcheck2 > 0)
            {
                header("Location: ../signup.php?error=emailtaken&uid=".$username); 

                exit();
            }
            else
            {
                $sql = "INSERT INTO MoneyBag_Registered_User_Info_Table (uidUsers, emailUsers, pwdUsers) VALUES (?, ?, ?)";

                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql))
                {
                    header("Location: ../signup.php?error=sqlerror"); 

                    exit();
                }
                else
                {//may need to put this: PASSWORD_DEFAULT, in quotation marks
                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

                    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../signup.php?signup=success"); 

                    exit();
                }

            }
        }
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else
{
    header("Location: ../signup.php"); 

    exit();
}