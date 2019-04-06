<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "lpgdxs";

$con = mysqli_connect($host, $user, $pass, $db) or die("Connection Failed");
echo "Connection Successfull";
?>