<?php


include("dbconnection.php");

$con = dbconnection();

if ($con-> connect_error) {

    die("Connection Error " . $conn->connect_error);
}


$sql = "SELECT * from incoming  WHERE `date` BETWEEN '08/10/2022' AND '08/20/2022'";

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