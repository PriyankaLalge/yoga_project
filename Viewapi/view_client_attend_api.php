<?php 
/*
loc no 7-- //connect to database
loc no 11-- // query to database for SELECT in client table
loc no 18--//  0 result
*/
$date = $_GET['date'];
require_once '../dbConfig/config.php'; 
$sql = "SELECT * FROM c_attend_pa WHERE `date` = '$date'";
$result = $conn->query($sql);
$client_attend = array();
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
array_push($client_attend,array('c_pa_ID'=>$row['c_pa_ID'],'c_id'=>$row['c_id'],'attendance'=>$row['attendance'],'in_time'=>$row['in_time'],'out_time'=>$row['out_time'],'date'=>$row['date']));
    }
    $client_attend_view = array('client_attend'=>$client_attend);
    echo json_encode($client_attend_view);
    //header('location:../viewPage/view_client_attend.php');
} else {
    echo "0 results";
}
?>
