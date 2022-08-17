<?php

include("dbconnection.php");

$con = dbconnection();


if (isset($_POST["particular"])) {

    $particular = $_POST["particular"];

}
else {
    return;
}

if (isset($_POST["agency"])) {

    $agency = $_POST["agency"];

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

if (isset($_POST["controlNumber"])) {

    $controlNumber = $_POST["controlNumber"];

}
else {
    return;
}

if (isset($_POST["date"])) {

    $date = $_POST["date"];

}
else {
    return;
}

if (isset($_POST["datemade"])) {

    $datemade = $_POST["datemade"];

}
else {
    return;
}

if (isset($_POST["file_link"])) {

    $file_link = $_POST["file_link"];

}
else {
    return;
}








$query= "INSERT INTO `incoming`(`particulars`, `agency`, `status`, `remarks`, `control number`, `date`, `datemade`, `file_link`) VALUES ('$particular', '$agency', '$status', '$remarks', '$controlNumber', '$date', '$datemade', '$file_link')";

$exe=mysqli_query($con, $query);

$arr = [];

if ($exe) {
    $arr["Success"] ="true";
}
else {
    $arr["Success"] ="false";
}

echo json_encode($arr);
//print(json_encode($arr));

?>