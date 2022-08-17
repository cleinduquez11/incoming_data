<?php

include('uploads.php');

$data = json_decode(file_get_contents('php://input'), true);

$user_file = $data['user_file'];
$user_file_name = $data['user_file_name'];
$user_file_extension = $data['user_file_extension'];


if ($user_file != NULL && $user_file_name != NULL && $user_file_extension != NULL) {
    $uploads = new Uploads();

    echo $uploads->uploadFile($user_file, $user_file_name,$user_file_extension);
    
    
}


?>