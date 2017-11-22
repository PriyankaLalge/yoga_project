<?php 
/*
loc no 8-- //connect to database
loc no 13-- // query to database for SELECT in admin table
loc no 19--//  if connect query ? if it connected then execute alert record login successfully     loc no 21---// else alert('Please enter valid username and password')
*/
require_once '../dbConfig/config.php';
if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        echo "admin";
    }
    else {
        echo "Notadmin";
    }
        
}
else {
    echo "<script>alert('DataBase is Empty')</script>";
}
return;
/*else {
    echo "<script> alert('no Value Found while logging IN') </script>";
}*/
?> 