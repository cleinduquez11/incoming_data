<?php

include("dbconnection.php");

$con = dbconnection();


if (isset($_POST["id"])) {

    $id = $_POST["id"];

}
else {
    return;
}

if (isset($_POST["status"])) {

    $status = $_POST["status"];

}
else {
    return;
}
if (isset($_POST["remarks"])) {

    $remarks = $_POST["remarks"];

}
else {
    return;
}




$query= "UPDATE `incoming` SET `status` = '$status', `remarks` = '$remarks' WHERE `incoming` . `id` = $id";

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