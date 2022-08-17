<?php

function dbconnection()
{
$conn = mysqli_connect('localhost', 'root', '', 'practice');
return $conn;
}



?>