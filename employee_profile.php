<?php
// Start the session
/*session_start();
if(!empty($_SESSION)){*/
?>

<?php 
include 'config.php';
$id = $_GET['e_ID'];
$sql = "SELECT * FROM employee WHERE e_ID = '$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
    $name=$row['e_name'];
 
?>
<?php require_once 'header.php'; ?>
<?php require_once 'custome_style.php'; ?>
<?php $page=2;require_once 'sidebar.php'; ?>
<?php $nav=2;require_once 'nav.php'; ?>

        <div class="content">
            <div class="container-fluid">
                
                <div class="row">
                     <!--<div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content" style="box-shadow: 0 2px 2px rgb(128, 191, 209)!important;">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-success text-center">
                                          <i class="fa fa-user" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                          <a href="employee.php"><p>Employee</p></a> 
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                         <a href="employee_profile.php"><i class="fa fa-plus" aria-hidden="true"></i>Employee Profile</a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                             <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-warning text-center">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                          <a href="trainer_attendance.php"><p>Trainer Attendance</p></a> 
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                         <a href="trainer_attendance.php"><i class="fa fa-plus" aria-hidden="true"></i> View Trainer Attendance</a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                           <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-danger text-center">
                                        <i class="fa fa-hand-paper-o" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                          <a href="employee_attendance.php"><p>Employee Attendance</p></a> 
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                         <a href="employee_attendance.php"><i class="fa fa-plus" aria-hidden="true"></i> View Employee Attendance</a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                           <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-success text-center">
                                         <i class="fa fa-tasks" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                          <a href="employee.php"><p>Employee</p></a> 
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                         <a href="daily_activity.php"><i class="fa fa-plus" aria-hidden="true"></i>Daily Activity</a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               <!-- </div>
                
                <div class="row">-->
                 <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-info text-center">
                                       <i class="fa fa-money" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                          <a href="employee.php"><p>Employee</p></a> 
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                         <a href="employee_payment_history.php"><i class="fa fa-plus" aria-hidden="true"></i>Payment History</a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
              <div class="row">
                       <div class="col-lg-4 col-md-5">
                        <div class="card card-user">
                            <div class="image">
                                <img src="assets/img/yoga.jpg" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                    <img class="avatar border-white" src="<?php echo $row['photo'];?>">
                                  
                                  <h4 class="title"><br>
                                     <a >ID : <?php echo $row['e_ID']; ?></a><br>
                                      <a >name : <?php echo $row['e_name']; ?></a><br>
                                     <a >Contact No: <?php echo $row['contact']; ?></a><br>
                                  </h4>
                                </div>
                            </div>

                        </div>
                    </div>
 <!--           Array ( [e_ID] => 12 [e_name] => ganesh [Gender] => male [DOB] => 2017-11-11 [contact] => 234 [anniversary] => 2017-11-20 [Email] => asd@ad.df [date_joint] => 2017-11-04 [emp_reg] => sdf [date_reg] => 2017-11-04 [id_doc] => assets/empl_doc/ganesh12.pdf [address] => sdf [comment] => sdf [photo] => assets/empl_image/ganesh12.jpg ) -->     
                    <div class="col-lg-8 col-md-7">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Employee Details</h4>
                            </div>
                            <div class="content">
                                <ul class="list-unstyled team-members">
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-3">
                                                Email ID:
                                                <br>
                                            </div>
                                            <div class="col-xs-6">
                                                <b><?php echo $row['Email']; ?></b>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-3">
                                           Gender:
                                                <br>
                                            </div>
                                            <div class="col-xs-6 ">
                                                <b><?php echo $row['Gender']; ?></b>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-3">
                                                Date of Birth:
                                                <br>
                                            </div>
                                            <div class="col-xs-6 ">
                                                <b><?php echo $row['DOB']; ?></b>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-3">
                                               Anniversary:
                                                <br>
                                            </div>
                                            <div class="col-xs-9">
                                                <b><?php echo $row['anniversary']; ?></b>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-3">
                                             Address:
                                                <br>
                                            </div>
                                            <div class="col-xs-6">
                                                <b><?php echo $row['address']; ?></b>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-3">
                                             Comments:
                                                <br>
                                            </div>
                                            <div class="col-xs-9">
                                                <b><?php echo $row['comment']; ?></b>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-3">
                                                Date of Joining:
                                                <br>
                                            </div>
                                            <div class="col-xs-9">
                                                <b><?php echo $row['date_joint']; ?></b>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-3">
                                             Last Working Date:
                                                <br>
                                            </div>
                                            <div class="col-xs-9">
                                                <b><?php echo $row['date_reg']; ?></b>
                                            </div>
                                        </div>
                                    </li>
                                <!--    <li>
                                        <div class="row">
                                            <div class="col-xs-3">
                                               ID Documents
                                                <br>
                                            </div>
                                            
                                            <div class="col-xs-6">
                                                <b><?php echo $row['id_doc']; ?></b>
                                            </div>
                                        </div>
                                    </li>-->
                                    <li>
                                        <form action="edit_employee_profile.php" method="get">
                                        <div class="row">
                                            <div class="col-xs-*"><br>
                                                <input  type="hidden" name="e_ID" value="<?php echo $row['e_ID'];?>"  >
                                                <center><a href="edit_employee_profile.php?e_ID<?php echo $row['e_ID'];?>"><button class="btn btn-success">Edit Profile</button></a></center>
                                            </div>
                                        </div>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
    </div>

     <?php require_once 'footer.php'; ?>
  <?php require_once 'script_include.php'; ?>
  
<?php
/*}
else  {header('Location: index.php');}*/// echo "<h1>No User Logged In</h1>";
?>
    
    