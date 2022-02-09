<?php

    $conn=mysqli_connect('localhost','root','','my_app');
    $encodedData=file_get_contents('php://input');
    $decodedData=json_decode($encodedData,true);
?>