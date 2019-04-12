<?php
    
    $name = $_POST['name'];
    $company = $_POST['company'];
    $investment = $_POST['investment'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];
    $email = $_POST['email'];
    $alt = $_POST['alt'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "lpg";

// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        echo("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO `apply` (`ID`, `name`, `company`, `investment`, `phone`, `email`, `alt`, `state`, `city`, `address`, `pincode`) VALUES (NULL, '$name', '$company', '$investment', '$phone', '$email', '$alt' ,'$state', '$city', '$address', '$pincode');";

    if ($conn->query($sql) === TRUE) {
        echo "success";
        
    } else {
        echo "fail => " . $conn->error;
    }

    $conn->close();

?>