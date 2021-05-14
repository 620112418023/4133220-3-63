<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

$host = "sql104.byethost3.com";
$user = "b3_28403706";
$pass = "0917282840";
$db= "b3_28403706_MEMBER";

try{
    $conn = new mysqli($host,$user,$pass,$db);
    // echo "Connected !!";
}
catch (Exception $e) {
    echo $e->getMessage();
}

?>