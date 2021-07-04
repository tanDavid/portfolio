<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include "dbFunctions.php"; 
session_start();

$username = $_SESSION['username'];


$query = "SELECT * FROM sleep S INNER JOIN user U ON S.user_id = U.user_id WHERE S.user_id = U.user_id AND U.username = '$username' ORDER BY S.sleep_id ";



$result = mysqli_query($link, $query);

while($row = mysqli_fetch_assoc($result)){
    $data[] = $row;
}
 
mysqli_close($link);


echo json_encode($data);

?>