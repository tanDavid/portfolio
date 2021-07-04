 <?php
include "dbFunctions.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>doSleep</title>
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
            Sleep
            <hr style="background-color: darkblue;">
            <?php
            session_start();
            $date = $_POST['date'];
            $sleepTime = $_POST['sleep_time'];
            $wakeTime = $_POST['wake_time'];

            $userId = $_SESSION['user_id'];
            $username = $_SESSION['username'];

            $hours = $wakeTime - $sleepTime;
            if ($hours < 0) {
                $hours = $hours * -1;
            }
            
             
            
            $queryInsert = "INSERT INTO sleep(user_id, date, sleep_time, wake_time, hours_slept)
                        VALUES ($userId, '$date',$sleepTime,$wakeTime, $hours) ";
            
            $resultInsert = mysqli_query($link, $queryInsert) or die(mysqli_error($link));
            $message = "Congratulations, you have successfully inserted a new sleep data";
            $message .= "<br/> You can now <a href='HomePage.php'>View General Statistics.</a>";



            echo $message;


            mysqli_close($link);
            ?>
        </div>
    </body>
</html>

