<?php 
/*
loc no 10-- //connect to database
loc no 19-- // query to database for UPDATE in employee table
loc no 20--//  connect query ? if it connected then execute alert record UPDATE successfully go to employee.php                                                       
loc no 24---  // else record not UPDATE
*/
require_once '../dbConfig/config.php';
 echo $eid = $_POST['emp_ID'];
if(isset($_POST['emp_ID']) && isset($_POST['e_name'])/*  && isset($_POST['e_surname']) && isset($_POST['address']) && isset($_POST['contact'])*/ ){
     $eid = $_POST['emp_ID'];
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
    /*{
    header('Location: employee.php');
        echo "sucessful";
    }
    else {
       header('Location: edit_employee_profile.php');
        echo "Edit sucessful unsucessfully";
    }
}else{
    echo "Edit unsucessfully";
    header('Location: edit_employee_profile.php');
}*/
        
        { header('Location: employee.php');
        ?> 
<div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria- hidden="true">&times;</span></button>
        <strong>Success!</strong> Employee information Updated successfully!
    
</div>
<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove(); 
        });
    }, 1000)
</script>
    <?php
        echo "<script>alert('Client created successfully')</script>";
    } else {  header('Location: edit_employee_profile.php');
         
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

    }
}
else {  header('Location: edit_employee_profile.php');
    echo "<script> alert('no Value Found while adding employee') </script>";
}
?>
?>