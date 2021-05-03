<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$host = "sql310.byethost14.com";
$user = "b14_28370754";
$pass = "123456789";
$db= "b14_28370754_member";

try{
    $conn = new mysqli($host,$user,$pass,$db);
    // echo "Connected !!";
}
catch (Exception $e) {
    echo $e->getMessage();
}

?>