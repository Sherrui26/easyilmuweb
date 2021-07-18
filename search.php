<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
   
    $RollNo = $_POST["RollNo"];

    require_once 'connection.php';

    $sql = "select * from user where RollNo='$RollNo'";
   
    $response = mysqli_query($connect,$sql);

    $result = array();
    $result['read'] = array();

    if(mysqli_num_rows($response) === 1){
        if($row = mysqli_fetch_assoc($response)){
            $h['RollNo'] = $row['RollNo'];
            $h['Name'] = $row['Name'];
            $h['EmailId'] = $row['EmailId'];
            $h['MobNo'] = $row['MobNo'];

            array_push($result['read'],$h);

            $result["code"] = 1;
            $result["message"] = "User found";

            echo json_encode($result);
            mysqli_close($connect);
        }else{
            $result["code"] = 0;
            $result["message"] = "Error";

            echo json_encode($result);
            mysqli_close($connect);
            }
        }
    }

    ?>

