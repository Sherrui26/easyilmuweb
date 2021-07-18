<?php
require("connection.php");

$response = array();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $RollNo = $_POST["RollNo"];

    $sql = "DELETE FROM user WHERE RollNo = '$RollNo'"; 
    $execute = mysqli_query($connect,$sql);
    $check = mysqli_affected_rows($connect);

    if($check > 0){
        $response["code"] = 1;
        $response["message"] = "User deleted successfully";
    }else{
        $response["code"] = 0;
        $response["message"] = "Fail to delete user";
    }

}else{
    $response["code"] = 0;
    $response["message"] = "No Post Data";

}

echo json_encode($response);
mysqli_close($connect);