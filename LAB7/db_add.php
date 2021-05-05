<?php
require "./conDB.php";
$id = $_POST['id'];
$name =$_POST['name'];
$snmae =$_POST['sname'];
$dob =$_POST['dob'];


try{
    $SQL ="INSERT INTO tb_member
    VALUES ('$id','$name','$same','$dob')
    ";
    $conn->query($SQL);
}
catch(Exception $e){
    $e->getMessage();
}

?>