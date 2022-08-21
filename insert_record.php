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

if (isset($_POST["mayors"])) {

    $mayors = $_POST["mayors"];

}
else {
    return;
}
if (isset($_POST["administrators"])) {

    $administrators = $_POST["administrators"];

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

if (isset($_POST["otmcontrolNumber"])) {

    $otmcontrolNumber = $_POST["otmcontrolNumber"];

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

if (isset($_POST["file_name"])) {

    $file_name = $_POST["file_name"];

}
else {
    return;
}









$query= "INSERT INTO `incoming`(`particulars`, `agency`, `mayors`, `administrators`, `control number`,`otmcontrolNumber`, `date`, `datemade`, `file_link` , `file_name`) VALUES ('$particular', '$agency', '$mayors', '$administrators', '$controlNumber','$otmcontrolNumber', '$date', '$datemade', '$file_link', '$file_name')";

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