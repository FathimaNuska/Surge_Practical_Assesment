<?php
        require('./conn.php');

        $fullName=$decodedData['fullName'];
        $email=$decodedData['email'];
        $userName=$decodedData['userName'];
        $password=$decodedData['password'];
    

    $SQL = "SELECT * FROM user WHERE userName = '$userName'";
    $exeSQL = mysqli_query($conn, $SQL);
    $checkEmail =  mysqli_num_rows($exeSQL);

    if ($checkEmail != 0) {
    $Message = "Already registered";
    } 
    else {

        $InsertQuerry = "INSERT INTO user(fullName, email, userName, password) VALUES('$fullName','$email','$userName','$password')";

        $R = mysqli_query($conn, $InsertQuerry);

    if ($R) {
        $Message = "Complete--!";
    } else {
        $Message = "Error";
    }
    }
    $response[] = array("Message" => $Message);

    echo json_encode($response);








?>










