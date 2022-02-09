<?php
    require('./conn.php');

    $userName=$decodedData['userName'];
    $password=$decodedData['password'];
    
    $SQL = "SELECT * FROM user WHERE userName = '$userName'";
    $exeSQL = mysqli_query($conn, $SQL);
    $checkEmail =  mysqli_num_rows($exeSQL);
    $row=mysqli_fetch_assoc($exeSQL);

    if ($checkEmail != 0) {
        $Message = "Login Successfully.!";
        $loginState=true;

    }else{
        $Message = "Login failed.!";
        $loginState=false;
    }
   
    $response[] = array("Message" => $Message,"userName"=>$userName,"loginState"=>$loginState);
    echo json_encode($response);



?>










