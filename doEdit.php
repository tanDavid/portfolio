<?php
include "dbFunctions.php";
session_start();
?>


<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="images/logo.PNG" rel="icon">
        <title>Sleep Helper</title>
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
                    <a class="nav-link" href="settingsPage.php" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
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
                    <a class="nav-link " href="aboutSleepHelper.php" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
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

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>

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


                    <div class="wrapper">

                        <h1 style="color: white">My Profile</h1>

                        <div style="text-align: center; color: lightblue; margin-top: 30px; font-size: 25px;">
                            <?php
                            
                            $userName = $_POST['username'];
                            $password = $_POST['password'];
                            $email = $_POST['email'];
                            $fullName = $_POST['fullname'];

                            $userId = $_SESSION['user_id'];

                            if ($username == "" or $password == "" or $email == "" or $fullName == "") {
                                $message = "There was an empty field, please refill the form.";
                            } else {
                                $query = "update user set username='$userName', password= sha1('$password'), fullname='$fullName', email='$email'"
                                        . " where user_id='$userId'";
                                $status = mysqli_query($link, $query) or die(mysqli_error($link));
                                if ($status) {
                                    $response["success"] = "1";
                                    $message2 = "You Have succesfully updated your profile";
                                    $message = "<br></br><a href=login.php> Please Click Here To Login Again</a>";
                                } else {
                                    $response["success"] = "0";
                                    $message = "Failed Please <a href=HomePage.php>Try Again</a>";
                                }
                            }

                            echo $message2;
                            echo $message;


                            mysqli_close($link);
                            ?>
                        </div>
                    </div>
                    <div id="overlay-area"></div>
                    </body>
                    </html>

