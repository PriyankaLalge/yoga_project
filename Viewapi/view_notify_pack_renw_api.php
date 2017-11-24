<?php 
/*
loc no 7-- //connect to database
loc no 11-- // query to database for SELECT in client table
loc no 18--//  0 result
*/
require_once '../dbConfig/config.php'; 
$date1 = date('Y-m-d', strtotime("+1 days"));
$date2 = date('Y-m-d', strtotime("+2 days"));
$date3 = date('Y-m-d', strtotime("+3 days"));
$today = date('Y-m-d');
$sql = "SELECT * FROM client WHERE enddate = '$date1' OR enddate = '$date2' OR enddate = '$date3' OR enddate = '$today'";
$result = $conn->query($sql);
$client = array();
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
array_push($client,array('c_ID'=>$row['c_ID'],'c_name'=>$row['c_name'],'gender'=>$row['gender'],'DOB'=>$row['DOB'],'Anniversary'=>$row['Anniversary'],'Age'=>$row['Age'],'address'=>$row['address'],'contact'=>$row['contact'],'fees'=>$row['fees'],'received'=>$row['received'],'discount'=>$row['discount'],'balance'=>$row['balance'],'package'=>$row['package'],'startdate'=>$row['startdate'],'enddate'=>$row['enddate'],'email'=>$row['email'],'Lead_By'=>$row['Lead_By'],'photo'=>$row['photo'],'Comments'=>$row['Comments'],'batch_id'=>$row['batch_id']));
    }
    $client_view = array('client_view'=>$client,'count2'=>$result->num_rows);
    echo json_encode($client_view);
} else {
    echo "0 results";
}
?>
