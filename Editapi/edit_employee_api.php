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
    $id_doc =  $_POST['id_doc'];
     $address= $_POST['address'];
     $comment = $_POST['comment'];
    $photo = $_POST['photo'];
    $status = $_POST['status'];
    if(empty($photo['name'])){
        $pro_url = $photo;
    }
    else{
        $extension = explode("/",$photo['type']);
        $pro_url = "../assets/empl_image/$eid.$extension[1]";
        $name = file_get_contents($photo['tmp_name']);
        //$extension = explode("/",$photo['type']);
        file_put_contents("../assets/empl_image/$eid.$extension[1]",$name);
    }
    if(empty($id_doc['name'])){
        $pro_url_1 = $id_doc;
    }
    else{
        echo "not empty";
        $extension_1 = explode("/",$id_doc['type']);
        $pro_url_1 = "../assets/empl_doc/$eid.$extension_1[1]";
        $name_1 = file_get_contents($id_doc['tmp_name']);
         file_put_contents("../assets/empl_doc/$eid.$extension_1[1]",$name_1);
    }
    $sql = "UPDATE `employee` SET `e_name`='$e_name',`Gender`='$Gender',`DOB`='$DOB',`contact`='$contact',`anniversary`='$anniversary',`Email`='$Email',`date_joint`='$date_joint',`emp_reg`='$emp_reg',`date_reg`='$date_reg',`address`='$address',`comment`='$comment',`id_doc`='$pro_url_1',`photo`='$pro_url',`status`='$status' WHERE `e_ID` = $eid";
     
    if ($conn->query($sql) === TRUE)
        { 
        echo "<script>alert('successsFully Updated');window.location.href='employee.php';</script>";
//        echo "<script>alert('Employee information edited successfully')</script>";
    } else {  
            
          echo "<script>alert('unsuccessfully entry')</script>";

    }
?>