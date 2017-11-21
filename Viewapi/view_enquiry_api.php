<?php 
/*
loc no 7-- //connect to database
loc no 8- // query to database for SELECT in enquiry table
loc no 18--//  0 result
*/
require_once '../dbConfig/config.php';
$sql = "SELECT * FROM enquiry ORDER BY enq_ID DESC";
$result = $conn->query($sql);
$enquiry = array();
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        array_push($enquiry,array('enq_ID'=>$row['enq_ID'],'fullName'=>$row['fullName'],'enqEmail'=>$row['enqEmail'],'contNo'=>$row['contNo'],'enqDate'=>$row['enqDate'],'followDate'=>$row['followDate'],'followTime'=>$row['followTime'],'preFrence'=>$row['preFrence'],'Comment'=>$row['Comment'],));
    }
    $enquiry_view = array('enquiry_view'=>$enquiry);
    echo json_encode($enquiry_view);
} else {
    echo "0 results";
}
?>
