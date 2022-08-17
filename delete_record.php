<?php

include("dbconnection.php");

$con = dbconnection();


if (isset($_POST["id"])) {

    $id = $_POST["id"];

}
else {
    return;
}




$query= "DELETE FROM `incoming` WHERE `incoming` . `id` = $id";

$exe=mysqli_query($con, $query);

$arr = [];

if ($exe) {
    $arr["Success"] ="true";
}
else {
    $arr["Success"] ="false";
}

echo json_encode($arr);

?>