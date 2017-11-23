<?php
require_once '../dbConfig/config.php';
$c_id = $_POST['c_id'];
$sql = "SELECT * FROM client WHERE c_ID = '$c_id'";
$result = $conn->query($sql);
$client = array();
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
          array_push($client,array('c_ID'=>$row['c_ID'],'c_name'=>$row['c_name'],'gender'=>$row['gender'],'DOB'=>$row['DOB'],'Anniversary'=>$row['Anniversary'],'Age'=>$row['Age'],'address'=>$row['address'],'contact'=>$row['contact'],'fees'=>$row['fees'],'received'=>$row['received'],'discount'=>$row['discount'],'balance'=>$row['balance'],'package'=>$row['package'],'startdate'=>$row['startdate'],'enddate'=>$row['enddate'],'email'=>$row['email'],'Lead_By'=>$row['Lead_By'],'photo'=>$row['photo'],'Comments'=>$row['Comments'],'batch_id'=>$row['batch_id']));
    }
    $client_view = array('client_view'=>$client);
    echo json_encode($client_view);
} else {
    echo "0 results";
}
?>