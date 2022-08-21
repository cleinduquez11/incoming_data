<?php

include("dbconnection.php");

$con = dbconnection();


if (isset($_POST["id"])) {

    $id = $_POST["id"];

}
else {
    return;
}

if (isset($_POST["particulars"])) {

    $particulars = $_POST["particulars"];
    $query= "UPDATE `incoming` SET `particulars` = '$particulars' WHERE `incoming`.`id` = $id";

$exe=mysqli_query($con, $query);

}
else {
    return;
}

if (isset($_POST["agency"])) {

    $agency = $_POST["agency"];
    $query= "UPDATE `incoming` SET `agency` = '$agency' WHERE `incoming` . `id` = $id";

$exe=mysqli_query($con, $query);

}
else {
    return;
}

if (isset($_POST["mayors"])) {

    $mayors = $_POST["mayors"];
    $query= "UPDATE `incoming` SET `mayors` = '$mayors' WHERE `incoming` . `id` = $id";

$exe=mysqli_query($con, $query);

}
else {
    return;
}


if (isset($_POST["administrators"])) {

    $administrators = $_POST["administrators"];
    $query= "UPDATE `incoming` SET `administrators` = '$administrators' WHERE `incoming` . `id` = $id";

$exe=mysqli_query($con, $query);

}
else {
    return;
}

if (isset($_POST["controlNumber"])) {

    $controlNumber = $_POST["controlNumber"];
    $query= "UPDATE `incoming` SET `control number` = '$controlNumber' WHERE `incoming` . `id` = $id";

$exe=mysqli_query($con, $query);

}
else {
    return;
}

if (isset($_POST["otmcontrolNumber"])) {

    $otmcontrolNumber = $_POST["otmcontrolNumber"];
    $query= "UPDATE `incoming` SET `otmcontrolNumber` = '$otmcontrolNumber'  WHERE `incoming` . `id` = $id";

$exe=mysqli_query($con, $query);

}
else {
    return;
}

if (isset($_POST["date"])) {

    $date = $_POST["date"];
    $query= "UPDATE `incoming` SET `date` = '$date' WHERE `incoming` . `id` = $id";

$exe=mysqli_query($con, $query);

}
else {
    return;
}
if (isset($_POST["datemade"])) {

    $datemade = $_POST["datemade"];
    $query= "UPDATE `incoming` SET `datemade` = '$datemade' WHERE `incoming` . `id` = $id";

$exe=mysqli_query($con, $query);

}
else {
    return;
}













// $query= "UPDATE `incoming` SET `particulars` = '$particulars', `agency` = '$agency', `mayors` = '$mayors', `administrators` = '$administrators', `control number` = '$controlNumber' , `otmcontrolNumber` = '$otmcontrolNumber', `date` = '$date', `datemade` = '$datemade' WHERE `incoming` . `id` = $id";

// $exe=mysqli_query($con, $query);

$arr = [];

if ($exe) {
    $arr["Success"] ="true";
}
else {
    $arr["Success"] ="false";
}

echo json_encode($arr);

?>