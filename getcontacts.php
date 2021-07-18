<?php

require_once 'connect.php';

$type = $_GET['item_type'];
    
if (isset($_GET['key'])) {
    $key = $_GET["key"];
    if ($type == 'users') {
        $query = "SELECT * FROM user WHERE RollNo LIKE '%$key%'";
        $result = mysqli_query($conn, $query);
        $response = array();
        while( $row = mysqli_fetch_assoc($result) ){
            array_push($response, 
            array(
                'RollNo'=>$row['RollNo'], 
                'Name'=>$row['Name'], 
                'EmailId'=>$row['EmailId'],
                'MobNo' => $row['MobNo']) 
            );
        }
        echo json_encode($response);   
    }
}else {
    if ($type == 'users') {
        $query = "SELECT * FROM user";
        $result = mysqli_query($conn, $query);
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
}

mysqli_close($conn);

?>
