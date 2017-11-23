<?php
require_once '../dbConfig/config.php';
$e_ID = $_POST['e_ID'];
$sql = "SELECT * FROM employee WHERE e_ID = '$e_ID'";
$result = $conn->query($sql);
$employee = array();
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
          array_push($employee,array('e_ID'=>$row['e_ID'],'e_name'=>$row['e_name'],'Gender'=>$row['Gender'],'DOB'=>$row['DOB'],'contact'=>$row['contact'],'anniversary'=>$row['anniversary'],'Email'=>$row['Email'],'date_joint'=>$row['date_joint'],'emp_reg'=>$row['emp_reg'],'date_reg'=>$row['date_reg'],'address'=>$row['address'],'comment'=>$row['comment'],'status'=>$row['status'],'photo'=>$row['photo'],'id_doc'=>$row['id_doc']));
    }
    $employee_view = array('employee_view'=>$employee);
    echo json_encode($employee_view);
} else {
    echo "0 results";
}
?>