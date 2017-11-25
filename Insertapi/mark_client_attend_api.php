<?php 
require_once '../dbConfig/config.php';
$c_attend_ID = $_POST['c_attend_ID'];
$client_id = $_POST['client_id'];
//$absent_client = $_POST['absent_client'];
$attendance = implode(",",$_POST['attendance']);
$in_time = implode(",",$_POST['in_time']);
$out_time= implode(",",$_POST['out_time']);
$date=$_POST['date'];
 
$client_id = implode(",",$client_id);
$absent_client = implode(",",$absent_client);
$sql = "INSERT INTO c_attend_pa (c_attend_id, c_id,attendance,in_time,out_time,date)
        VALUES ('$c_attend_ID', '$client_id', '$attendance', '$in_time', '$out_time','$date')";
if ($conn->query($sql) === TRUE) {  
    echo 'inserted successfully';
  header('Location:../viewPage/client_attendance.php');
}
?>