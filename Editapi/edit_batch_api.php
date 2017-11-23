<?php 

/*
loc no 10-- //connect to database
loc no 14-- // query to database for UPDATE in batch table
loc no 18--//  connect query ? if it connected then execute alert record UPDATE successfully go to batch.php                                                       
loc no 20---  // else record not UPDATE
*/
require_once '../dbConfig/config.php';
if(isset($_POST['batch_id']) && isset($_POST['batch_name']) && isset($_POST['batch_timing'])){
    $id = $_POST["batch_id"];
     $batch_name = $_POST['batch_name'];
     $batch_timing = $_POST['batch_timing'];
     $name_of_batch = $_POST['name_of_batch'];
     $plan = $_POST['plan'];
     $e_name = $_POST['t_name'];
    $sql = "UPDATE `batch` SET `batch_name` = '$batch_name', `batch_timing` = '$batch_timing' , `e_name` = '$e_name',`name_of_batch` = '$name_of_batch',`plan` = '$plan' WHERE `batch`.`batch_id` = '$id'";
    if ($conn->query($sql) === TRUE) {
         echo "<script>alert('successsFully Updated');window.location.href='batches.php';</script>";
        //header('Location: viewPage/batches.php');
    }
    else{
        echo "<script>alert('Updated UnccesssFully');window.location.href='edit_batches.php';</script>";
      //echo "Code Not Updated";
    }
}
?>
