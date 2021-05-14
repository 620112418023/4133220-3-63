<?php
require "../conDB.php";
$id = $_POST['id'];
$name =$_POST['name'];
$sname =$_POST['sname'];
$dob =$_POST['dob'];


try{
   echo $SQL ="INSERT INTO tb_member
    VALUES ('$id','$name','$sname','$dob')
    ";
    $conn->query($SQL);
}
catch(Exception $e){
    $e->getMessage();
}

?>