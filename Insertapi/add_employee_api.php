<?php 

/*
line no 2-- //connect to database
 line no 17-- // query to database for insert data in Employee table
  line no 20--// checked does query connect ? if it connected then execute                                                        next loop and print successfull
 line no 35--  // if query is not connected to databse then execute next loop and print as                                             unsuccessfull
 line no 55--   // if Query is empty then print as no value fount
*/
require_once '../dbConfig/config.php';
if(isset($_POST['e_name'])  && isset($_POST['Gender'])  && isset($_POST['DOB']) && isset($_POST['contact']) && isset($_POST['anniversary']) && isset($_POST['Email']) && isset($_POST['date_joint']) && isset($_POST['emp_reg']) && isset($_POST['date_reg']) && isset($_POST['status']) && isset($_POST['address']) && isset($_POST['comment']) ){
    
    $e_name = $_POST['e_name'];
    $Gender = $_POST['Gender'];
    $DOB = $_POST['DOB'];
    $contact = $_POST['contact'];
    $anniversary = $_POST['anniversary'];
    $Email = $_POST['Email'];
    $date_joint = $_POST['date_joint'] ;
    $emp_reg = $_POST['emp_reg'];
    $date_reg = $_POST['date_reg'];
    $status = $_POST['status'];
    $id_doc =  $_POST['id_doc'];
    $address = $_POST['address'];
    $comment = $_POST['comment'];
    $photo = $_POST['photo'];
    
    $extension_1 = explode("/",$id_doc['type']);
    $pro_url_1 = "../assets/empl_doc/$e_name$$contact.$extension_1[1]";
    
    $extension = explode("/",$photo['type']);
    $pro_url = "../assets/empl_image/$e_name$$contact.$extension[1]";
   /* $name = file_get_contents($photo['tmp_name']);
    $extension = explode("/",$photo['type']);
    file_put_contents("$e_name.$extension[1]",$name);    */          
   $sql = "INSERT INTO `employee` (`e_name`, `Gender`, `DOB`, `contact`, `anniversary`, `Email`,`date_joint`, `emp_reg`,`date_reg`,`status`,`id_doc`, `address`, `comment`, `photo`) VALUES ('$e_name', '$Gender', '$DOB', '$contact', '$anniversary', '$Email', '$date_joint', '$emp_reg', '$date_reg', '$status', '$pro_url_1', '$address','$comment', '$pro_url')";
    
    if ($conn->query($sql) === TRUE) {
        $name = file_get_contents($photo['tmp_name']);
        //$extension = explode("/",$photo['type']);
        file_put_contents("../assets/empl_image/$e_name$$contact.$extension[1]",$name);  
        
         $name_1 = file_get_contents($id_doc['tmp_name']);
         file_put_contents("../assets/empl_doc/$e_name$$contact.$extension_1[1]",$name_1);
        
        
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
//               echo "<script>alert('Employee not created')</script>";
    }
}
else {
    echo "<script> alert('no Value Found while adding employee') </script>";
}
?>