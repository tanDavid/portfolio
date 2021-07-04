<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.


fghjkl;lkjhgfdfghjkl
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login Page</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="stylesheet/loginCss.css" rel="stylesheet" type="text/css"/>
        <link href="images/logo.PNG" rel="icon">
    </head>
    <body>
        <h1 style="color: lightgray; margin-top: 25px; font-family: Brush Script MT">Sleep Helper</h1>
        <div class="wrapper">
            
            <h1 style="color: lightblue">Log In</h1>
            <form action="doLogin.php" method="POST">
                <input name='username' type="text" placeholder="Enter Username" id='username'>
                <input name="password" type="password" placeholder="Enter Password" id='password'>
                <input type="submit" value="LOGIN">
            </form>
             


            <div class="bottom-text">
                <input type="checkbox" name="remember" checked="checked"> Remember Me
                <a href="register.php">Don't Have an Account?</a>
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
