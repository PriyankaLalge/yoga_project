<?php 
/*
loc no 8-- //connect to database
loc no 17-- // query to database for UPDATE in enquiry table
loc no 18--//  connect query ? if it connected then execute alert record UPDATE successfully go to enquiry_table.php                                                       
loc no 21---  // else record not UPDATE
*/

require_once '../dbConfig/config.php';
if(isset($_POST['fullName']) && isset($_POST['enq_ID']) && isset($_POST['enqEmail']) && isset($_POST['contNo']) && isset($_POST['enqDate']) && isset($_POST['followDate']) && isset($_POST['followTime']) && isset($_POST['preFrence']) && isset($_POST['Comment'] )){
         $id = $_POST['enq_ID'];
        $fullName = $_POST['fullName'];
        $enqEmail = $_POST['enqEmail'];
        $contNo = $_POST['contNo'];
        $enqDate = $_POST['enqDate'];
        $followDate = $_POST['followDate'];
        $followTime = $_POST['followTime'];
        $preFrence = $_POST['preFrence'];
        $Comment = $_POST['Comment'];
    $sql = "UPDATE `enquiry` SET `fullName`='$fullName',`enqEmail`='$enqEmail',`contNo`='$contNo',`enqDate`='$enqDate',`followDate`='$followDate',`followTime`='$followTime',`preFrence`='$preFrence',`Comment`='$Comment' WHERE `enq_ID` = '$id'";
    if($conn->query($sql) === TRUE){
          echo "<script>alert('successsFully Updated');window.location.href='enquiry.php';</script>";
    }
    else{
         echo "While adding Client <br> Error: " . $sql . "<br>" . $conn->error;
    }
}else{
    echo "no variable found";
}





//include 'config.php';
//if(isset($_POST['e_token']) && isset($_POST['e_name']) && isset($_POST['e_mail'])&& isset($_POST['e_contact'])&& isset($_POST['e_message'])&& isset($_POST['e_date'])&& isset($_POST['followupdate'])){
//    $e_token= $_POST["e_token"];
//     $e_name = $_POST['e_name'];
//     $e_mail = $_POST['e_mail'];
//     $e_contact = $_POST['e_contact'];
//     $e_message = $_POST['e_message'];
//     $e_date = $_POST['e_date'];
//     $status = $_POST['status'];
//     $followupdate = $_POST['followupdate'];
//    $sql = "UPDATE `enquiry` SET `token_no` = '$e_token', `name` = '$e_name', `status` = '$status', `contact` = '$e_contact', `message` = '$e_message', `message` = '$e_message', `followupdate` = '$followupdate', `date` = '$e_date' WHERE `enquiry`.`token_no` = '$e_token';";
//    if ($conn->query($sql) === TRUE) {
//        header('Location: enquiry_table.php');
//    }
//    else{
//      echo "Code Not Updated";
//    }
//}
?>