<?php 
include 'config.php';
/*
line no 2-- //connect to database
 line no 17-- // query to database for insert data in Employee table
  line no 20--// checked does query connect ? if it connected then execute                                                        next loop and print successfull
 line no 35--  // if query is not connected to databse then execute next loop and print as                                             unsuccessfull
 line no 55--   // if Query is empty then print as no value fount
*/
if(isset($_POST['e_name'])){
    
        $e_name = $_POST['e_name'];
        $e_surname = $_POST['e_surname'];
        $Gender = $_POST['Gender'];
        $DOB = $_POST['DOB'];
        $Age = $_POST['Age'];
        $Title = $_POST['Title'];
        $Salary = $_POST['Salary'];
        $Register_ID = $_POST['Register_ID'];
        $address = $_POST['address'];
        $contact = $_POST['contact'];
        $Email = $_POST['Email'];
        $photo = $_POST['photo'];
        $status = 'unpaid';
        $id_name = $_POST['id_name'];
        $id_no = $_POST['id_no'];
    
   $sql = "INSERT INTO `trainer` (`e_name`, `e_surname`, `Gender`, `DOB`, `Age`, `Title`, `Salary`, `Register_ID`, `address`, `contact`, `Email`,  `photo`, `status`, `id_name`, `id_no`) VALUES ('$e_name', '$e_surname', '$Gender', '$DOB', '$Age', '$Title', '$Salary', '$Register_ID', '$address', '$contact', '$Email','$photo', '$status','$id_name', '$id_no')";
    
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