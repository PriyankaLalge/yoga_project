<?php 
require_once '../dbConfig/config.php';            //connect to database

if(isset( isset($_POST['date']) && isset($_POST['in_time']) ){ 
   
    $in_time = $_POST['in_time'];
    $out_time = $_POST['out_time'];
    $date = $_POST['date'];
    $timing = $_POST['timing'];
    $sql = "INSERT INTO c_attend ( in_time,date, timing,out_time)
        VALUES ( '$in_time','$date', '$timing', '$out_time')";      
// Insert variable into c_attend table 
    
     if ($conn->query($sql) === TRUE) {         
//checked does query is connected then execute next loop print as success
         $last_id = $conn->insert_id;
//$last_id = array('last_id'=>$last_id);
          
        ?> 
<div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria- hidden="true">&times;</span></button>
        <strong>Success!</strong> <?php echo "Last inserted Id is ".$last_id;  ?>
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
    } else {                                                // if query is not connected then print as unsuccessful
         
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
else {                                                              // if query is empty then print as no value                                                                                 found
    echo "<script> alert('no Value Found while adding Client') </script>";
}
?>