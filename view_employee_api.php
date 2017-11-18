<?php 
/*
loc no 7-- //connect to database
loc no 8-- // query to database for SELECT in Employee table
loc no 19--//  0 result
*/
include 'config.php';
$sql = "SELECT * FROM employee ORDER BY e_ID DESC";
$result = $conn->query($sql);
$employee = array();
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        array_push($employee,array('e_ID'=>$row['e_ID'],'e_name'=>$row['e_name'],'Gender'=>$row['Gender'],'DOB'=>$row['DOB'],'contact'=>$row['contact'],'anniversary'=>$row['anniversary'],'Email'=>$row['Email'],'date_joint'=>$row['date_joint'],'emp_reg'=>$row['emp_reg'],'date_reg'=>$row['date_reg'],'id_doc'=>$row['id_doc'],'address'=>$row['address'],'comment'=>$row['comment'],'photo'=>$row['photo']));
    }
    $employee_view = array('employee_view'=>$employee);
    echo json_encode($employee_view);
} else {
    echo "0 results";
}
?>