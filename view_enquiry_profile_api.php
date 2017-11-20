<?php 
/*
loc no 7-- //connect to database
loc no 9- // query to database for SELECT in enquiry table
loc no 19--//  0 result
*/
include 'config.php';
$enq_id = $_POST['enq_id'];
$sql = "SELECT * FROM enquiry WHERE token_no = '$enq_id';";
$result = $conn->query($sql);
$enquiry = array();
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        array_push($enquiry,array('token_no'=>$row['token_no'],'name'=>$row['name'],'surname'=>$row['surname'],'email'=>$row['email'],'contact'=>$row['contact'],'followupdate'=>$row['followupdate'],'followuptime'=>$row['followuptime'],'message'=>$row['message'],'date'=>$row['date']));
    }
    $enquiry_view = array('enquiry_view'=>$enquiry);
    echo json_encode($enquiry_view);
} else {
    echo "0 results";
}
?>
