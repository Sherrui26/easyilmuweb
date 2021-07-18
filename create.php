<?php
require("connection.php");

$response = array();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $Title = $_POST["Title"];
    $Publisher = $_POST["Publisher"];
    $Year = $_POST["Year"];
    $Availability = $_POST["Availability"];

    $sql = "INSERT INTO book (Title,Publisher,Year,Availability) VALUES('$Title','$Publisher','$Year','$Availability')"; 
    $execute = mysqli_query($connect,$sql);
    $check = mysqli_affected_rows($connect);

    if($check > 0){
        $response["code"] = 1;
        $response["message"] = "Data stored successfully";
    }else{
        $response["code"] = 0;
        $response["message"] = "Fail to store data";
    }

}else{
    $response["code"] = 0;
    $response["message"] = "No Post Data";

}

echo json_encode($response);
mysqli_close($connect);