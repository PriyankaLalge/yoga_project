<?php 
/*
loc no 10-- //connect to database
loc no 22-- // query to database for insert data in enquiry table
loc no 31--// checked does query connect ? if it connected then execute                                                             next loop and print successfull
loc no 37--  // if query is not connected to databse then execute next loop and print as                                             unsuccessfull
loc no 58--   // if Query is empty then print as no value Found
*/

include 'config.php';
if(isset($_POST['token_no'])/* && isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['age']) && isset($_POST['email']) && isset($_POST['contact'])  && isset($_POST['date']) && isset($_POST['followupdate']) && isset($_POST['followuptime'])&& isset($_POST['message'])*/){

     $token_no = $_POST['token_no'];
     $name = $_POST['name'];
     $surname = $_POST['surname'];
     $email = $_POST['email'];
     $contact = $_POST['contact'];
     $date = $_POST['date'];
     $followupdate = $_POST['followupdate'];
     $followuptime = $_POST['followuptime'];
    $message = $_POST['message'];
    
    $sql = "INSERT INTO `enquiry` (`token_no`, `name`,`surname`, `email`, `contact`, `date`, `followupdate`,`followuptime`, `message`, `status`) VALUES ('$token_no', '$name','$surname', '$email', '$contact', '$date', '$followupdate','$followuptime', '$message', 'pending')";
    if ($conn->query($sql) === TRUE) {
        ?> 
<div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria- hidden="true">&times;</span></button>
        <strong>Success!</strong> Enquiry has been added successfully!
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
    } else {
         
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
}
else {
    echo "<script> alert('no Value Found while adding enquiry') </script>";
}
?>