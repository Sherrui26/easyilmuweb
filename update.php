<?php
require("connection.php");

$response = array();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $MobNo = $_POST["MobNo"];
    $RollNo = $_POST["RollNo"];
    $Name = $_POST["Name"];
    $EmailId = $_POST["EmailId"];

    $sql = "UPDATE user SET RollNo = '$RollNo',Name = '$Name',EmailId='$EmailId' WHERE MobNo = '$MobNo'"; 
    $execute = mysqli_query($connect,$sql);
    $check = mysqli_affected_rows($connect);

    if($check > 0){
        $response["code"] = 1;
        $response["message"] = "Data Changed Successfully";
    }
    else{
        $response["code"] = 0;
        $response["message"] = "Fail To Change Data";
    }
}else{
    $response["code"] = 0;
    $response["message"] = "No Post Data";

}

echo json_encode($response);
mysqli_close($connect);