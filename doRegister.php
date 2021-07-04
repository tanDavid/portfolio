<?php
include "dbFunctions.php";
?>


<!DOCTYPE html>
<html>
    <head>
        <title>doRegister</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <style>
            body{
                margin: 0;
                padding: 0;
                background-image: url(images/loginBack.jpg);
                -webkit-background-size: cover;
                background-size: cover;
                font-family: Poppins;
            }
            .card{
                opacity: 0.9;
                color: #000;
                top: 10%;
                left: 50%;
                padding: 60px 30px;
                position: absolute;
                transform: translate(-50%, -50%);
                box-sizing: border-box;
                box-shadow: 8px 8px 50px #000;
            }
        </style>
    </head>
    <body>
        <div class="card" style="margin: 0 auto; margin-top: 100px; padding: 10px; width: 320px;height: 240px; text-align: center;">
            Registration
            <hr style="background-color: darkblue;">
            <?php
            session_start();
            $userName = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $fullName = $_POST['fullname'];

            if ($username == "" or $password == "" or $email == "" or $fullName == "") {
                $message = "There was an empty field, please refill the form.";
            } else {
 
                $queryCheck = "SELECT * FROM user
                    WHERE username='$userName'";
                $resultCheck = mysqli_query($link, $queryCheck) or die(mysqli_error($link));

                if (mysqli_num_rows($resultCheck) == 1) {
                    $message = "Username already exists!";
                    $message .= "<br/> Please try to <a href='register.php'>register</a> again.";
                } else {
                   
                    $queryInsertUser = "INSERT INTO user (username, password, fullname, email)
                        VALUES ('$userName',SHA1('$password'),'$fullName','$email')";
                    $resultInsert = mysqli_query($link, $queryInsertUser) or die;
                    $message = "Congratulations " . $userName . " , you have successfully registered an account with Sleep Helper";
                    $message .= "<br/> You can now <a href='login.php'>login.</a>";
                
                    header('Refresh: 2; url=login.php');
                }
            }

            echo $message;
            
            
            mysqli_close($link);
            ?>
        </div>
    </body>
</html>

