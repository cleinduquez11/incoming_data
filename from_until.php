<?php

include("dbconnection.php");

$con = dbconnection();

if ($con-> connect_error) {

    die("Connection Error " . $conn->connect_error);
}


if (isset($_POST["from"]) == '' AND isset($_POST["until"]) == '' ) {
    
    $sql = "SELECT * from incoming  ORDER BY `incoming`.`date` DESC";
   
   $result = $con->query($sql);
   
   $response = array();
   
   if ($result->num_rows > 0) {
   
       while($row = $result->fetch_assoc())
       {
           array_push($response, $row);
       }
   }
   
   $con->close();
   
   header('Content-Type: application/json' );
   echo json_encode($response);
   
   
   }
   
   else {
        $from = $_POST["from"];
        $until = $_POST["until"];
   
 $sql = "SELECT * from incoming  WHERE `date` BETWEEN '$from' AND '$until' ORDER BY `incoming`.`date` DESC";
   
       $result = $con->query($sql);
   
   $response = array();
   
   if ($result->num_rows > 0) {
   
       while($row = $result->fetch_assoc())
       {
           array_push($response, $row);
       }
   }
   
   $con->close();
   
   header('Content-Type: application/json' );
   echo json_encode($response);
   
   }
   
   

?>