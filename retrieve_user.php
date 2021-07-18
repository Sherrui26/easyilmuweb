<?php
require("connection.php");
$sql = "SELECT * FROM user";
$execute = mysqli_query($connect,$sql);
$check = mysqli_affected_rows($connect);

if($check > 0){
    $response["code"] = 1;
    $response["message"] = "Data is ready";
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
    $response["message"] = "Data is not ready";

}

echo json_encode($response);
mysqli_close($connect);