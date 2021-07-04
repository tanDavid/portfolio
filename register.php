<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="stylesheet/registerCss.css" rel="stylesheet" type="text/css"/>
        <link href="images/logo.PNG" rel="icon">
<!--        <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="js/jquery-ui.min.js" type="text/javascript"></script>
        <script src="js/jquery.validate.min.js" type="text/javascript"></script>-->
<!--        <style>
            form .error {
                color: #ff0000;
            }
        </style>
        <script>
            $(document).ready(function () {

                $("form").validate({
                    rules: {
                        username: {
                            required: true,
                        },
                        password: {
                            required: true,
                            pattern: /^[0-9a-zA-Z]{8,}$/
                        },
                        fullname: {
                            required: true,
                            pattern: /^[a-zA-Z]$/
                        },
                        email: {
                            required: true,
                            pattern: /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/
                        },
                    },
                    messages: {
                        username: {
                            required: "Please enter your username",
                        },
                        password: {
                            required: "Please enter a password",
                            pattern: "Password must contain at least lowercase, uppercase letters, numbers and minimum 8 characters!"
                        },
                        fullname: {
                            required: "Enter your fullname!",
                            pattern: "please enter a valid name"
                        },
                        email: {
                            required: "Enter your email!",
                            pattern: "Please enter a valid email"
                        },

                    },
                    submitHandler: function () {
                        return true;
                    }
                });
            });
        </script>-->
    </head>
    <body>
        <h1 style="color: lightgray; margin-top: 25px; font-family: Brush Script MT">Sleep Helper</h1>

        <div class="wrapper">

            <h1 style="color: lightcoral">Register</h1>
            
            <form action="doRegister.php" method="POST">
                <input class="fullname" name='fullname' type="text" placeholder="Enter Your Full Name">
                <input class="email" name='email' type="email" placeholder="Enter email">
                <input class="username" name='username' type="text" placeholder="Enter Username">
                <input class="password" name="password" type="password" placeholder="Enter Password">
                <input type="submit" value="REGISTER">
            </form>
            <div class="bottom-text">
                <a href="login.php">Already Have an Account?</a>
            </div>

            <div class="socials">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-pinterest"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
            </div>

        </div>
        <div id="overlay-area"></div>
    </body>
</html>
