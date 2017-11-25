<?php 
/*
loc no 10-- //connect to database
loc no 19-- // query to database for UPDATE in employee table
loc no 20--//  connect query ? if it connected then execute alert record UPDATE successfully go to employee.php                                                       
loc no 24---  // else record not UPDATE
*/
require_once '../dbConfig/config.php';

$c_id = $_POST['c_id'];
$c_name = $_POST['c_name'];
$c_contact = $_POST['c_contact'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$DOB = $_POST['DOB'];
$Age = $_POST['Age'];
$Anniversary = $_POST['Anniversary'];
$c_address = $_POST['c_address'];
$Comments = $_POST['Comments'];
$Lead_By = $_POST['Lead_By'];
$package = $_POST['package'];
// $Register_ID = $_POST['Register_ID'];
$batch = $_POST['batch'];
$startdate = $_POST['startdate'];
$enddate = $_POST['enddate'];
//$status_payment = $_POST['status_payment'];
$c_fees = $_POST['c_fees'];
$Discount = $_POST['Discount'];
$received = $_POST['received'];
$balance = $_POST['balance'];
$fee_rem_date = $_POST['fee_rem_date'];
 $photo = $_POST['photo'];
    if(empty($photo['name'])){
        $pro_url = $photo;
    }
    else{
        $extension = explode("/",$photo['type']);
        $pro_url = "../assets/client_image/$c_id.$extension[1]";
        $name = file_get_contents($photo['tmp_name']);
        //$extension = explode("/",$photo['type']);
        file_put_contents("../assets/client_image/$c_id.$extension[1]",$name);
    }
    
    $sql = "UPDATE `client` SET `c_name`='$c_name',`gender`='$gender',`DOB`='$DOB',`Anniversary`='$Anniversary',`Age`='$Age',`address`='$c_address',`contact`='$c_contact',`fees`='$c_fees',`received`='$received',`discount`='$Discount',`balance`='$balance',`package`='$package',`startdate`='$startdate',`enddate`='$enddate',`email`='$email',`Lead_By`='$Lead_By',`photo`='$pro_url',`Comments`='$Comments',`batch_id`='$batch',`fee_rem_date`='$fee_rem_date' WHERE `c_ID`='$c_id'";
     
    if ($conn->query($sql) === TRUE)
        { 
        echo "<script>alert('successsFully Updated');window.location.href='clients.php';</script>";
//        echo "<script>alert('Employee information edited successfully')</script>";
    } else {  
            echo $c_id;
         echo("Error description: " . mysqli_error($conn));

    }
?>