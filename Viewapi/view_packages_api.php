
<?php 
/*
loc no 7-- //connect to database
loc no 11-- // query to database for SELECT in batch_ID table
loc no 18--//  0 result
*/
require_once '../dbConfig/config.php';
   $sql = "SELECT * FROM `packages` ORDER By Cat_ID";
    $result=$conn->query($sql);
    $packages=array();
    if ($result->num_rows >0){
     // output data of each row
    while($row = $result->fetch_assoc()){
   array_push($packages,array('Cat_ID'=>$row['Cat_ID'],'Category'=>$row['Category'],'Active'=>$row['Active'],'Name_of_package'=>$row['Name_of_package'],'Time'=>$row['Time'],'batch'=>$row['batch'],'Description'=>$row['Description'],'fee'=>$row['fee']));
    }
       $packages_view = array('packages_view'=>$packages);
        echo json_encode($packages_view);
    } else {
    echo "0 results";
}
?>