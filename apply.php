<?php
    
    $name = $_POST['name'];
    $company = $_POST['company'];
    $investment = intval($_POST['investment']);
    $phone = ($_POST['phone']);
    $address = $_POST['address'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "lpg";

// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO `apply` (`ID`, `name`, `company`, `investment`, `phone`, `state`, `city`, `address`, `pincode`) VALUES (NULL, '$name', '$company', '$investment', '$phone', '$state', '$city', '$address', '$pincode');";

    if ($conn->query($sql) === TRUE) {
        echo "success";
        
    } else {
        echo "fail";
    }

    $conn->close();

?>