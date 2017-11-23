<?php 
require_once '../dbConfig/config.php';           //connect to database
/*if(isset($_POST['c_name'])){*/

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
    
    $sql = "INSERT INTO `client`(`c_name`, `gender`, `DOB`, `Anniversary`, `Age`, `address`, `contact`, `fees`, `received`, `balance`, `package`, `startdate`, `enddate`, `email`, `Lead_By`, `Comments`, `batch_id`, `discount`) VALUES ('$c_name','$gender','$DOB','$Anniversary','$Age','$c_address','$c_contact','$c_fees','$received','$balance','$package','$startdate','$enddate','$email','$Lead_By','$Comments','$batch','$Discount')";
                                                           // query to database for insert data in      client table
    if ($conn->query($sql) === TRUE) {              // checked does query connect ? if it connected then execute                                                        next loop and print successfull
        ?> 
<div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria- hidden="true">&times;</span></button>
        <strong>Success!</strong> Client information added successfully!
</div>
<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove(); 
        });
    }, 1000)
</script>
    <?php
       //echo "<script>alert('Client created successfully')</script>";
    } else {                            // if query is not connected to databse then execute next loop and print as                                             unsuccessfull
         
        ?> 
<div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria- hidden="true">&times;</span></button>
        <strong>Success!</strong> Sorry! unsuccessful entry
</div>
<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove(); 
        });
    }, 1000);
</script>
    <?php

        
        echo "While adding Client <br> Error: " . $sql . "<br>" . $conn->error;
    }
/*}
else {                                                      // if Query is empty then print as no value fount
    echo "<script> alert('no Value Found while adding Client') </script>";
}*/
?>