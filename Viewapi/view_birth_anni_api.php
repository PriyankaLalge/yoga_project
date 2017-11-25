<?php 
/*
loc no 7-- //connect to database
loc no 11-- // query to database for SELECT in client table
loc no 18--//  0 result
*/
require_once '../dbConfig/config.php'; 
$today = date('Y-m-d');
$sql1 = "SELECT * FROM `client` WHERE `DOB`='$today' OR `Anniversary`= '$today'";
$sql2 = "SELECT * FROM `employee` WHERE `DOB`='$today' OR `anniversary`='$today'";
$result1 = $conn->query($sql1);
$result2 = $conn->query($sql2);
$client = array();
$employee = array();
if ($result1->num_rows > 0) {
    // output data of each row
    while($row = $result1->fetch_assoc()) {
array_push($client,array('c_ID'=>$row['c_ID'],'c_name'=>$row['c_name'],'gender'=>$row['gender'],'DOB'=>$row['DOB'],'Anniversary'=>$row['Anniversary'],'Age'=>$row['Age'],'address'=>$row['address'],'contact'=>$row['contact'],'fees'=>$row['fees'],'received'=>$row['received'],'discount'=>$row['discount'],'balance'=>$row['balance'],'package'=>$row['package'],'startdate'=>$row['startdate'],'enddate'=>$row['enddate'],'email'=>$row['email'],'Lead_By'=>$row['Lead_By'],'photo'=>$row['photo'],'Comments'=>$row['Comments'],'batch_id'=>$row['batch_id']));
    }
}
    if ($result2->num_rows > 0) {
    // output data of each row
    while($row = $result2->fetch_assoc()) {
 array_push($employee,array('e_ID'=>$row['e_ID'],'e_name'=>$row['e_name'],'Gender'=>$row['Gender'],'DOB'=>$row['DOB'],'contact'=>$row['contact'],'anniversary'=>$row['anniversary'],'Email'=>$row['Email'],'date_joint'=>$row['date_joint'],'emp_reg'=>$row['emp_reg'],'status'=>$row['status'],'date_reg'=>$row['date_reg'],'id_doc'=>$row['id_doc'],'address'=>$row['address'],'comment'=>$row['comment'],'photo'=>$row['photo']));
    }
    $birth_anni = array('client_view'=>$client ,'employee_view'=>$employee,'count_c'=>$result1->num_rows,'count_e'=>$result2->num_rows);
    echo json_encode($birth_anni);
} else {
    echo "0 results";
}
?>
