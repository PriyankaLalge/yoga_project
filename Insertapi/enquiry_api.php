<?php 
/*
loc no 10-- //connect to database
loc no 22-- // query to database for insert data in enquiry table
loc no 31--// checked does query connect ? if it connected then execute                                                             next loop and print successfull
loc no 37--  // if query is not connected to databse then execute next loop and print as                                             unsuccessfull
loc no 58--   // if Query is empty then print as no value Found
*/
require_once '../dbConfig/config.php';
if(isset($_POST['fullName']) && isset($_POST['enqEmail']) && isset($_POST['contNo']) && isset($_POST['enqDate']) && isset($_POST['followDate']) && isset($_POST['followTime']) && isset($_POST['preFrence']) && isset($_POST['Comment'] )){

        $fullName = $_POST['fullName'];
        $enqEmail = $_POST['enqEmail'];
        $contNo = $_POST['contNo'];
        $enqDate = $_POST['enqDate'];
        $followDate = $_POST['followDate'];
        $followTime = $_POST['followTime'];
        $preFrence = $_POST['preFrence'];
        $Comment = $_POST['Comment'];
    $sql = "INSERT INTO `enquiry`(`fullName`, `enqEmail`, `contNo`, `enqDate`, `followDate`, `followTime`, `preFrence`, `Comment`) VALUES ('$fullName','$enqEmail','$contNo','$enqDate','$followDate','$followTime','$preFrence','$Comment')";
    if($conn->query($sql) === TRUE){
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
    }
    else{
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
else{
    echo "<script> alert('no Value Found while adding employee') </script>";
}
?>