<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="images/logo.PNG" rel="icon">
        <title>Profile Settings</title>
        <link href="stylesheet/popupForm.css" rel="stylesheet" type="text/css"/>
        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="stylesheet/editprofilecss.css" rel="stylesheet" type="text/css"/>
        <!--        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">-->

        <!-- Custom styles for this template-->
        <!--        <link href="css/sb-admin-2.css" rel="stylesheet" type="text/css"/>-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>

        <script src="js/jquery-ui.min.js" type="text/javascript"></script>

        <script>
            $(document).ready(function () {
                reload_table();
            });
            function reload_table() {
                $.ajax({

                    type: "GET",
                    url: "getUser.php",
                    cache: false,
                    dataType: "JSON",
                    success: function (response) {

                        var message = "";
                        for (i = 0; i < response.length; i++) {

                            message += "<form action='doEdit.php' method='POST'>"
                                    + "<input class='fullname' name='fullname' type='text' placeholder='" + response[i].fullname + "'>"
                                    + "<input class='email' name='email' type='email' placeholder='" + response[i].email + "'>"
                                    + "<input class='username' name='username' type='text' placeholder='" + response[i].username + "'>"
                                    + "<input class='password' name='password' type='password' placeholder='Enter New Password'>"
                                    + "<input type='submit' value='EDIT'>"

                                    + "</form>";

                        }


                        $("#editForm").html(message);
                    },
                    error: function (obj, textStatus, errorThrown) {
                        console.log("Error" + textStatus + ":" + errorThrown);

                    }
                });


            }

        </script>

    </head>

    <body id="page-top">
        <!-- Page Wrapper -->
        <div id="wrapper">
            <!-- Sidebar -->
            <ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: red">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="aboutSleepHelper.php">
                    <div class="sidebar-brand-icon rotate-n-15">

                        <div class=" " style="color: white; font-size: 30px; font-family: Brush Script MT">Sleep<sup>Helper</sup></div>
                    </div>
                </a>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item">
                    <a class="nav-link" href="HomePage.php">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>My Sleep Tracker</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Options
                </div>

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link " href="settingsPage.php" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Settings</span>
                    </a>

                </li>




                <li class="nav-item active">
                    <a class="nav-link collapsed" href="editProfile.php" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-user-circle"></i>
                        <span>Edit Profile</span></a>
                </li>



                <!-- Nav Item - Utilities Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link  " href="aboutSleepHelper.php" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                        <i class="fas fa-fw fa-info"></i>
                        <span>About Sleep Helper</span>
                    </a>
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Custom Utilities:</h6>
                            <a class="collapse-item" href="utilities-color.html">Colors</a>
                            <a class="collapse-item" href="utilities-border.html">Borders</a>
                            <a class="collapse-item" href="utilities-animation.html">Animations</a>
                            <a class="collapse-item" href="utilities-other.html">Other</a>
                        </div>
                    </div>
                </li>




                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                

            </ul>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-dark topbar mb-4 static-top shadow">

                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>

                        <!-- Topbar Search -->
                        <div class="title">
                            <h1 class="h3 mb-0 text-white-800" style="color: lightblue; font-weight: bold"><a class="welcUser" id="welcUser"></a></h1>
                        </div>



                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">




                            <a href="login.php" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm" style="height:10%; margin-top: 5px; margin-left: 10px"><i
                                    class="fas fa-sign-out-alt fa-sm text-white-50"></i> Logout</a>

                            <div class="topbar-divider d-none d-sm-block"></div>

                            <!-- Nav Item - User Information -->


                        </ul>

                    </nav>
                    <!-- End of Topbar -->






                    <div class="wrapper" style="margin-left: 7%;">

                        <h1 style="color: white; text-shadow: 2px 2px gray;">My Profile</h1>

                        <div class="editForm" id="editForm">
                            <!--                    <form action="doRegister.php" method="POST">
                                                    <input class="fullname" name='fullname' type="text" placeholder="Enter Your Full Name">
                                                    <input class="email" name='email' type="email" placeholder="Enter email">
                                                    <input class="username" name='username' type="text" placeholder="Enter Username">
                                                    <input class="password" name="password" type="password" placeholder="Enter Password">
                                                    <input type="submit" value="EDIT">
                                                    <button type="submit" class="cancel"  style="border: none;
                                                            outline: none;
                                                            height: 40px;
                                                            background: lightcoral;
                                                            color: white;
                                                            font-size: 10px; 
                                                            font-weight: bold;
                                                            width: 100%;"><a href="HomePage.php">Cancel</a></button>
                                                </form>-->
                        </div>




                    </div>
                    <div id="overlay-area"></div>
                    <!-- Footer -->
                    <footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge" style='text-align: center; color: white; padding-top: 40%'>
                        <i class="fa fa-facebook-official w3-hover-opacity"></i>
                        <i class="fa fa-instagram w3-hover-opacity"></i>



                        <i class="fa fa-linkedin w3-hover-opacity"></i>
                        <p class="w3-medium">Powered by <a href="https://davidoodoodoo.wixsite.com/tandavid" style="color: lightblue" target="_blank">David Tan (The Creator)</a></p>
                    </footer>
                    </body> 
                    </html>
