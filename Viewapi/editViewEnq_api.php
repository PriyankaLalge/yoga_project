<?php
require_once '../dbConfig/config.php';
$enq_ID = $_POST['enq_ID'];
$sql = "SELECT * FROM enquiry WHERE enq_ID = '$enq_ID'";
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