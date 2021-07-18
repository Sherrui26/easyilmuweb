<?php

require_once 'connection.php';

$type = $_GET['item_type'];
    
if (isset($_GET['RollNo'])) {
    $key = $_GET["RollNo"];
    if ($type == 'users') {
        $query = "SELECT * FROM user WHERE name LIKE '%$key%'";
        $result = mysqli_query($connect, $query);
        $response = array();
        while( $row = mysqli_fetch_assoc($result) ){
            array_push($response, 
            array(
                'RollNo'=>$row['RollNo'], 
                'Name'=>$row['Name'], 
                'EmailId'=>$row['EmailId']) 
            );
        }
        echo json_encode($response);   
    }
}else{
            $result["code"] = 0;
            $result["message"] = "Error";

            echo json_encode($result);
            mysqli_close($connect);
            }
    

    ?>

