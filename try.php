<?php


include("dbconnection.php");

$con = dbconnection();

if ($con-> connect_error) {

    die("Connection Error " . $conn->connect_error);
}

$from = '08/17/2022';
$until = '08/17/2022';

$sql = "SELECT * from incoming  WHERE `date` BETWEEN '$from' AND '$until'";

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



?>