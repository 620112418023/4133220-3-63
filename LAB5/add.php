<?php
require "./conDB.php";

$id = $_GET["id"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="add2db.php" method="post">
        <?php
        try{
            $strSQL = "SELECT * FROM MEMBER  WHERE member_id = '$id' ";
            $members = $conn -> query($strSQL);
            $member = $members->fetch_array();

            $strSQL ="SELECT * FROM td_subject";
            $subjects = $conn -> query($strSQL);
        }
        catch (Exception $e){
            echo $e-> getMessage();

        }   
        ?>
        id :<input type="text" value= "" readonly><br>
        name : <span><?=$member[0].$member[1] ?></span><br>
        subject: <select name ="sudject_id">
            <option value = "">-กรุณาเลือก-</option>
            <?php
            while ($subjects = $subjects -> fetch_array()) {
            ?>
                <option value ="<?=$subjects[0]?>"><?=$subjects[1]?></option>
            <?php
            }
            ?>    
    </select><br>
    <button type ="submit">ADD</button>
    </form>
</body>

</html>