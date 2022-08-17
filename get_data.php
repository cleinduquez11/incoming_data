<?php

include("dbconnection.php");

$con = dbconnection();

if ($con-> connect_error) {

    die("Connection Error " . $conn->connect_error);
}


if (isset($_POST["search"]) == '' ) {
    
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
     $search = $_POST["search"];

    $sql = "SELECT * from incoming  WHERE `incoming`.`agency` = '$search' OR `incoming`.`particulars` = '$search' OR `incoming`.`control number` = '$search' OR `incoming`.`status` = '$search' ORDER BY `incoming`.`date` DESC";


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