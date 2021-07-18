<?php
require("connection.php");

$response = array();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $RollNo = $_POST["RollNo"];

    $sql = "SELECT * FROM user WHERE RollNo = '$RollNo'"; 
    $execute = mysqli_query($connect,$sql);
    $check = mysqli_affected_rows($connect);

    if($check > 0){
        $response["code"] = 1;
        $response["message"] = "Data available";
        $response["data"] = array();

        while($grab = mysqli_fetch_object($execute)){
            #$F["id"] = $grab -> id;
            $F["RollNo"] = $grab -> RollNo;
            $F["Name"] = $grab -> Name;
            $F["EmailId"] = $grab -> EmailId;
            $F["MobNo"] = $grab -> MobNo;
    
            array_push($response["data"],$F);
        }
    }else{
        $response["code"] = 0;
        $response["message"] = "Data not available";
    }

}else{
    $response["code"] = 0;
    $response["message"] = "No Post Data";

}

echo json_encode($response);
mysqli_close($connect);