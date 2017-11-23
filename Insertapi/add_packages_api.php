<?php 
require_once '../dbConfig/config.php';
if(isset($_POST['Category']) && isset($_POST['Active']) && isset($_POST['Name_of_package']) && isset($_POST['Time']) && isset($_POST['batch']) && isset($_POST['Description']) ){          
    
    $Category = $_POST['Category'];
    $Active = $_POST['Active'];
    $Name_of_package = $_POST['Name_of_package'];
    $Time = $_POST['Time'];
    $batch = $_POST['batch'];
    $Description = $_POST['Description'];
    $Fee = $_POST['Fee'];
    
    $sql = "INSERT INTO `packages` (`Category`, `Active`, `Name_of_package`, `Time`, `batch`, `Description`,`Fee`) VALUES ('$Category', '$Active', '$Name_of_package', '$Time' ,'$batch','$Description','$Fee')";            
                                                         
     if ($conn->query($sql) === TRUE) {                      
        ?> 
<div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria- hidden="true">&times;</span></button>
        <strong>Success!</strong> package information added successfully!
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
    echo "<script> alert('no Value Found while adding packages') </script>";
}
?>