<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
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
                    url: "getData.php",
                    cache: false,
                    dataType: "JSON",
                    success: function (response) {

                        var message = "";
                        for (i = 0; i < response.length; i++) {

                            message += "<tr>"
                                    + "<th scope='row'>" + response[i].sleep_id + "</th>"
                                    + "<td>" + response[i].date + "</td>"
                                    + "<td>" + response[i].sleep_time + "</td>"
                                    + "<td>" + response[i].wake_time + "</td>"
                                    + "<td>" + response[i].hours_slept + "</td>"
                                 
                                    + "</td>"
                                    + "</tr>";
                        }


                        $("#tableData tbody").html(message);
                    },
                    error: function (obj, textStatus, errorThrown) {
                        console.log("Error" + textStatus + ":" + errorThrown);
                        message = "No sleep data recorded <br> Please enter new sleep"
                        $("#output").html(message);
                    }
                });
                $.ajax({
                    type: "GET",
                    url: "getUser.php",
                    cache: "false",
                    dataType: "JSON",
                    success: function (response) {
                        var message = "";
                        for (a = 0; a < response.length; a++) {
                            message += "Welcome " + response[a].fullname + "!";
                        }
                        $("#welcUser").html(message);

                    },
                    error: function (obj, textStatus, errorThrown) {
                        console.log("Error" + textStatus + ": " + errorThrown);
                    }
                });

            }

        </script>

        <script>
            function openForm() {
                document.getElementById("myForm").style.display = "block";
            }

            function closeForm() {
                document.getElementById("myForm").style.display = "none";
            }
        </script>
    </head>

    <body id="page-top">
        <!-- Page Wrapper -->
        <div id="wrapper">
            <?php
            include 'navbar.php';
            ?>
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">


                </div>

                <!-- Content Row -->
                <div class="row">

                    <!-- View Statistics-->
                    <div class="col-xl-3 col-md-6 mb-4" >
                        <div class="card border-left-danger shadow h-100 py-2" style="background-color: white; box-shadow: 8px 8px 50px #000;">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Click <a href="HomePage.php">HERE</a> To View General</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">

                                            <h4>Statistics</h4>

                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-chart-bar fa-2x text-gray-300" style="margin-top: 10px"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Improve your sleep-->
                    <div class="col-xl-3 col-md-6 mb-4" href="sleepAdvice.html">
                        <div class="card border-left-success shadow h-100 py-2" href="sleepAdvice.html" style="background-color: white">
                            <div class="card-body" href="sleepAdvice.html">
                                <div class="row no-gutters align-items-center" >
                                    <div class="col mr-2" >
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1" href="sleepAdvice.html">Click <a href="sleepAdvice.html">here</a> to Find out</div>
                                        <div class="h5 mb-0 text-gray-800"> How to Improve your sleep <b>based on your data</b></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-address-book fa-2x text-gray-300" href="sleepAdvice.html"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- View Charts -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2" style="background-color: white">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Click <a href="chartsPage.php" style="color: red">here</a> To View In</div>
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <div class="h5 mb-0 mr-3   text-gray-800">Charts</div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-chart-pie fa-2x text-gray-300" style="margin-top: 15px;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- etc -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2"style="background-color: white">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Click <a href="cantSleepPage.php">here</a> to read</div>
                                        <div class="h5 mb-0 text-gray-800">An Article based on sleep</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-popup" id="myForm" >
                    <form action="doSleep.php" method="POST" class="form-container">
                        <h1 style='color: darkblue;'>How Did You Sleep Last Night?</h1>

                        <label><b>Date (DD MM)</b></label>
                        <input type="text" placeholder="E.g. 25 Jan" name="date" class='date' required>

                        <label><b>Time Slept (24Hrs)</b></label>
                        <input type="number" placeholder="E.g. 2300" name="sleep_time" class='sleep_time' required>

                        <br></br>
                       
                        <label><b>Time Woken (24Hrs)</b></label>
                        <input type="number" placeholder="E.g. 0900" name="wake_time" class="wake_time" required>

                        <br></br>
                        <button type="submit" class="btn">Submit</button>
                        <button type="submit" class="btn cancel" onclick="closeForm()">Cancel</button>
                    </form>
                </div>

                <!-- Data CARD -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card" style="box-shadow: 8px 8px 50px #000;" >
                            <div class="card-header" style="background-color: gray; color: white; border-radius: 5px;">
                                Overview
                            </div>
                            <div class="card-body" style="background-color: lightgrey;">
                                <div id = "dataChange" class="table-striped" style="background-color: white; border-radius: 10px">
                                    <table id="tableData" class="tableData" style="width: 100%">
                                        <thead class="bg-dark text-white" style="text-align: center">
                                            <tr>
                                                <th scope="col">Sleep Id</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Sleep Time</th>
                                                <th scope="col">Wake Time</th>
                                                <th scope="col">Hours Slept</th>
                                            </tr>
                                        </thead>
                                        <tbody style="text-align: center; color: black">


                                        </tbody>
                                    </table>
                                    <div id="output" class="output" style="text-align: center; color: orange"></div>
                                </div>
                            </div>
                            <div class="card-footer" style="background-color: lightgrey;">
                                <button class="open-button d-none d-sm-inline-block btn btn-sm btn-info shadow-sm" style="border-radius: 50px; margin-left: 45% " onclick="openForm()"><i
                                        class="fas fa-plus fa-sm text-white-50"></i> Enter New Sleep</button>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
         <!-- Footer -->
        <footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge" style='text-align: center; color: white'>
            <i class="fa fa-facebook-official w3-hover-opacity"></i>
            <i class="fa fa-instagram w3-hover-opacity"></i>



            <i class="fa fa-linkedin w3-hover-opacity"></i>
            <p class="w3-medium">Powered by <a href="https://davidoodoodoo.wixsite.com/tandavid" style="color: lightblue" target="_blank">David Tan (The Creator)</a></p>
        </footer>

    </body> 
</html>
