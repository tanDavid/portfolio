<?php
include("dbFunctions.php");
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>doDeleteUser</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
    </head>
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
    <body>
        <div class="card" style="margin: 0 auto; margin-top: 100px; padding: 10px; width: 320px;height: 240px; text-align: center;">
            <a style="opacity: 10">Login</a>
            <hr style="background-color: darkblue;">
            <?php
            if (isset($_SESSION['user_id'])) {
                $userId = $_SESSION['user_id'];

           
//fghfghfhfhg
                $query = "delete from sleep where user_id='$userId'";
                $status = mysqli_query($link, $query) or die(mysqli_error($link));

                if ($status) {
                    $message = "SUCCESFULLY";
                    $message2 = "<br>Deleted Your Sleep Data";
                    header('Refresh: 2; url=settingsPage.php');
                } else {
                    $message = "Deleted Sleep Data FAILED";
                }
                echo json_encode($message);
                echo json_encode($message2);
            }
            ?>
        </div>
    </body>
</html>

