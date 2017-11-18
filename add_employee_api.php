<?php 
include 'config.php';
/*
line no 2-- //connect to database
 line no 17-- // query to database for insert data in Employee table
  line no 20--// checked does query connect ? if it connected then execute                                                        next loop and print successfull
 line no 35--  // if query is not connected to databse then execute next loop and print as                                             unsuccessfull
 line no 55--   // if Query is empty then print as no value fount
*/
if(isset($_POST['e_name'])  && isset($_POST['comment'])  && isset($_POST['Gender']) /*&& isset($_POST['submit'])*/ ){
    
        $e_name = $_POST['e_name'];
        $Gender = $_POST['Gender'];
        $DOB = $_POST['DOB'];
        $contact = $_POST['contact'];
        $anniversary = $_POST['anniversary'];
        $Email = $_POST['Email'];
        $date_joint = $_POST['date_joint'];
        $emp_reg = $_POST['emp_reg'];
        $date_reg = $_POST['date_reg'];
        $id_doc = $_POST['id_doc'];
        $address = $_POST['address'];
        $comment = $_POST['comment'];
        $photo = $_POST['photo'];
       /* $status = 'unpaid';
        $id_name = $_POST['id_name'];
        $id_no = $_POST['id_no'];*/
    
   $sql = "INSERT INTO `employee` (`e_name`, `Gender`, `DOB`, `contact`, `anniversary`, `Email`,`date_joint`, `emp_reg`,`date_reg`,`id_doc`, `address`, `comment`, `photo`) VALUES ('$e_name', '$Gender', '$DOB', '$contact', '$anniversary', '$Email', '$date_joint', '$emp_reg', '$date_reg', '$id_doc', '$address','$comment', '$photo')";
    
    if ($conn->query($sql) === TRUE) {
        ?> 
<div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria- hidden="true">&times;</span></button>
        <strong>Success!</strong> Employee information added successfully!
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

        
//        echo "While adding Client <br> Error: " . $sql . "<br>" . $conn->error;
    }
}
else {
    echo "<script> alert('no Value Found while adding employee') </script>";
}
?>