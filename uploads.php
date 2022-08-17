<?php

class Uploads {
    private $respond;

    public function uploadFile(string $user_file, string $user_filename, string $extension)
    {
        include("dbconnection.php");
        $con = dbconnection();
        $path = "incoming_files/$user_filename";

        if (!file_exists($path)) {
            mkdir($path);
        }

        $filename = $user_filename;
        $output_file_path = $path . "/$filename." . $extension;

        $file_handler = fopen($output_file_path, 'wb');

        fwrite($file_handler, base64_decode($user_file));

        fclose($file_handler);

        if (file_exists($output_file_path)) {
            $this->$respond = array(
                "status" => 1,
            );
        }
        else {
            $this->$respond = array(
                "status" => 1,
            );
        }

        // $query= "INSERT INTO `incoming`(`file_link`) VALUES ('$output_file_path')";

        // $exe=mysqli_query($con, $query);


        return json_encode($this->$respond);
    }
}

?>