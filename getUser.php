<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include "dbFunctions.php"; 
session_start();

$username = $_SESSION['username'];
$query = "SELECT * FROM user U WHERE U.username = '$username'";
$result = mysqli_query($link, $query);

while($row = mysqli_fetch_assoc($result)){
    $user[] = $row;
}
 
mysqli_close($link);

echo json_encode($user);

?>