<?php
// Start the session
/*session_start();
if(!empty($_SESSION)){*/
?>

<?php 
if(isset($_GET['e_ID'])){
    $data = array(
        'e_ID' => $_GET['e_ID'],
    );
    # Create a connection
    $url = 'http://localhost/yoga_project/Viewapi/view_employee_profile_api.php';
    $ch = curl_init($url);
    # Form data string
    $postString = http_build_query($data, '', '&');
    # Setting our options
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postString);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    # Get the response
    $content = curl_exec($ch);
    $employee = json_decode($content);
    $employee_view = $employee->employee_view;
    curl_close($ch);  
}
?>
<?php require_once 'header.php'; ?>
<?php require_once 'custome_style.php'; ?>
<?php $page=2;require_once 'sidebar.php'; ?>
<?php $nav=2;require_once 'nav.php'; ?>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
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
                                <img src="../assets/img/yoga.jpg" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                    <img class="avatar border-white" src="<?php echo $employee_view[0]->photo; ?>">
                                  
                                  <h5 class="title"><br>
                                  ID : <?php echo $employee_view[0]->e_ID;?><br>
                                    name : <?php echo $employee_view[0]->e_name; ?><br>
                                     Contact No: <?php echo $employee_view[0]->contact;?><br>
                                  </h5>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Employee Details</h4>
                            </div>
                            <input type="hidden" name="e_ID" value="<?php echo $_GET['e_ID'];?>">
                            <div class="content">
                                <ul class="list-unstyled team-members">
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-3">
                                                Email ID:
                                                <br>
                                            </div>
                                            <div class="col-xs-6">
                                                <b><?php echo $employee_view[0]->Email;?></b>
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
                                                <b><?php echo $employee_view[0]->Gender;?></b>
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
                                                <b><?php echo $employee_view[0]->DOB;?></b>
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
                                                <b><?php echo $employee_view[0]->anniversary;?></b>
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
                                                <b><?php echo $employee_view[0]->address;?></b>
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
                                                <b><?php echo $employee_view[0]->comment;?></b>
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
                                                <b><?php echo $employee_view[0]->date_joint;?></b>
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
                                                <b><?php echo $employee_view[0]->date_reg;?></b>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-*"><br>
                                                <center><a href="edit_employee_profile.php?e_ID=<?php echo $employee_view[0]->e_ID;?>"><button class="btn btn-success">Edit Profile</button></a></center>
                                            </div>
                                        </div>
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
    
    