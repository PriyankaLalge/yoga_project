<?php
// Start the session
session_start();

?>
<?php include 'config.php'; ?>
<?php 

if(isset($_SESSION["username"])){
?>
<?php include 'header.php'; ?>
<?php $page=1;include 'sidebar.php'; ?>
<?php $nav=1;include 'nav.php'; ?>
<div class="content">
    <div class="container-fluid">
<!--card for add,client,add emplyee..etc-->
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="orange">
                        <i class="material-icons">person</i>
                    </div>
                    <div class="card-content">
                         <div class="stats">
                       <a href="client.php" ><p class="category">Client</p></a>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <a href="add_client.php"><i class="material-icons">plus_one</i> Add New Client</a> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="green">
                        <i class="material-icons">people</i>
                    </div>
                    <div class="card-content">
                        <p class="category">Employees</p>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <a href="add_employee.php"><i class="material-icons">plus_one</i> Add New Employee</a>
                        </div>
                    </div>
                </div>
            </div>
             <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="blue">
                        <i class="material-icons">group_add</i>
                    </div>
                    <div class="card-content">
                        <p class="category">Set of Batches</p>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <a href="add_batch.php"><i class="material-icons">plus_one</i> Add New Batches</a>									
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="blue">
                        <i class="material-icons">local_offer</i>
                    </div>
                    <div class="card-content">
                        <p class="category">Packages</p>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <a href="add_packages.php"><i class="material-icons">plus_one</i> Add New Packages</a>
                        </div>
                    </div>
                </div>
            </div> 
           <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="orange">
                       <i class="material-icons">done</i>
                    </div>
                    <div class="card-content">
                        <p class="category">Attendance</p>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <a href="add_trainer.php"><i class="material-icons">plus_one</i>
                <ul class="dropdown-menu">Attendance
                    <li  ><a href="client_attendance.php">Client Attendance</a></li>
                    <li ><a href="employee_attendance.php">Employee Attendance</a></li>
                    <li  ><a href="trainer_attendance.php">Trainer Attendance</a></li>
                </ul>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
             <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="green">
                   <i class="material-icons">notifications</i>
                    </div>
                    <div class="card-content">
                        <p class="category">Notification</p>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <a href="enquiry_table.php"><i class="material-icons">plus_one</i> View Notification</a>									
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="green">
                        <i class="material-icons">account_balance_wallet</i>
                    </div>
                    <div class="card-content">
                        <p class="category">Account</p>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <a href="money_income.php"><i class="material-icons">plus_one</i> Add New Account</a>
                        </div>
                    </div>
                </div>
            </div>
             <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="blue">
                   <i class="material-icons">sms</i>
                    </div>
                    <div class="card-content">
                        <p class="category">Enquiry</p>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <a href="enquiry_table.php"><i class="material-icons">plus_one</i> Add enquiry</a>									
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="blue">
                   <i class="material-icons">sms</i>
                    </div>
                    <div class="card-content">
                        <p class="category">Enquiry</p>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <a href="enquiry_table.php"><i class="material-icons">plus_one</i> Add enquiry</a>									
                        </div>
                    </div>
                </div>
            </div>-->
        </div>
    </div>
</div>
<!--footer and session end-->
<?php include 'footer.php'; ?>
<?php include 'script_include.php'; ?>
<?php }
else {header('Location: index.php');}
    //echo "<h1>Not a Valid user</h1>";
?>
