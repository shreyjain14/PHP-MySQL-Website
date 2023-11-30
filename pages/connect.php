<?php

    $username = $_POST['username'];
    $password = $_POST['password'];

    $conn = new mysqli("localhost", "root", "", "shreyweb");
    $query = "INSERT INTO regis VALUES ('$username','$password')";

    if(mysqli_query($conn,$query)){
        echo "Data sucessfully stored";
    } else {
        echo "Error";
    }

    mysqli_close($conn);

?>