<?php 
/*
loc no 10-- //connect to database
loc no 19-- // query to database for UPDATE in employee table
loc no 20--//  connect query ? if it connected then execute alert record UPDATE successfully go to employee.php                                                       
loc no 24---  // else record not UPDATE
*/
require_once '../dbConfig/config.php';

     $eid = $_POST['e_ID'];
     $e_name = $_POST['e_name'];
     $Gender = $_POST['Gender'];
     $DOB = $_POST['DOB'];
     $contact = $_POST['contact'];
     $anniversary = $_POST['anniversary'];
     $Email = $_POST['Email'];
     $date_joint= $_POST['date_joint'];
     $emp_reg = $_POST['emp_reg'];
     $date_reg = $_POST['date_reg'];
     //$id_doc = $_POST['id_doc'];
     $address= $_POST['address'];
     $comment = $_POST['comment'];
     //$photo= $_POST['photo'];
   
     $sql = "UPDATE `employee` SET `e_name`='$e_name',`Gender`='$Gender',`DOB`='$DOB',`contact`='$contact',`anniversary`='$anniversary',`Email`='$Email',`date_joint`='$date_joint',`emp_reg`='$emp_reg',`date_reg`='$date_reg',`address`='$address',`comment`='$comment' WHERE `e_ID` = $eid";
     
    if ($conn->query($sql) === TRUE)
    
        { 
       echo "<script>alert('successsFully Updated');window.location.href='employee.php';</script>";
//        echo "<script>alert('Employee information edited successfully')</script>";
    } else {  
            
          echo "<script>alert('unsuccessfully entry')</script>";

    }
?>