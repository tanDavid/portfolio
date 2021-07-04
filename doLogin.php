
<!DOCTYPE html>
<html>
    <head>
        <title>doLogin</title>
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
            include("dbFunctions.php");
            session_start();


            if (isset($_POST['username'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];


                $query = "SELECT * FROM user WHERE username='$username' AND password=SHA1('$password')";

                $result = mysqli_query($link, $query) or die(mysqli_error($link));

                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_array($result);
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['user_id'] = $row['user_id'];
                    $result = mysqli_query($link, $query);
                    $row = mysqli_fetch_assoc($result);


                    $msg = "<b>You have successfully logged in.<b><br>";
                    $msg .= "<a style='font-weight: normal'>If page deos not go to home page in 5 seconds</a>";
                    $msg .= "<br><a href='HomePage.php'>Click Here</a>";
                    header('Refresh: 2; url=HomePage.php');
                } else {
                    $row = mysqli_fetch_assoc($result);
                    $_SESSION['id'] = $row['id'];
                    $msg = "You have entered the wrong username or password.<br><br> ";
                    $msg .= "<a href='login.php'>Please Login again</a>";
                }
            }
            if (isset($msg)) {

                echo $msg;
            }
            ?>
        </div>
    </body>
</html>

