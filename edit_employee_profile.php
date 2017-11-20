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
 //print_r($row);
?>
<?php require_once 'header.php'; ?>
<?php require_once 'custome_style.php'; ?>
<?php $page=2;require_once 'sidebar.php'; ?>
<?php  $nav=2;require_once 'nav.php'; ?>

<div class="content">
    <div class="container-fluid">
<!--
      <div class="row">
        <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="content" style="box-shadow: 0 2px 2px rgb(128, 191, 209)!important;">
                        <div class="row">
                            <div class="col-xs-5">
                                <div class="icon-big icon-success text-center">
                                  <i class="fa fa-users" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="col-xs-7">
                                <div class="numbers">
                                  <a href="teams.php"><p>Team</p></a> 
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <hr />
                            <div class="stats">
                                 <a href="add_team.php"><i class="fa fa-plus" aria-hidden="true"></i>Add new Team</a> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
-->
        <div class="row">
               <div class="col-lg-8 col-md-7">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Edit Employee</h4>
                    </div>
                    <div class="content">
                        <form action="edit_employee_api.php" method="POST">
                            <input type="hidden" name="emp_ID" value="<?php echo $id;?>" >
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name <span class="required" style="color:red;"> * </span></label>
                                        <input type="text" class="form-control border-input surnameInput"  name="e_name" value="<?php echo $row['e_name'] ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Contact No. <span class="required" style="color:red;"> * </span></label>
                                        <input type="text" class="form-control border-input phoneInput" name="contact" value="<?php echo $row['contact'] ?>"  required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address </label>
                                        <input type="email" class="form-control border-input UserName_field" name="Email" value="<?php echo $row['Email'] ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label>Gender <span class="required" style="color:red;"> * </span></label>
                                    <div>
                                        <select  class="form-control student_admission border-input"  name="Gender" required>
                                            <option ><?php echo $row['Gender'] ?></option>
                                            <option >---------------Gender---------------</option>
                                            <option name="Gender" value="male">Male</option>
                                            <option name="Gender" value="female">Female</option>  
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="row">
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label>Date of birth <span class="required" style="color:red;"> *   </span></label>
                                    <input type="date" class="form-control border-input datepicker" name="DOB" value="<?php echo $row['DOB'] ?>" required>
                                   </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Anniversary</label>
                                        <input type="date" class="form-control border-input"  name="anniversary" value="<?php echo $row['anniversary'] ?>" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Employee Id <span class="required" style="color:red;"> * </span></label>
                                        <input type="text" class="form-control border-input phoneInput" value="<?php echo $row['emp_reg'] ?>" name="emp_reg" required>
                                    </div>
                                </div>  
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Date of joining<span class="required" style="color:red;"> * </span></label>
                                        <input type="date" class="form-control border-input "  name="date_joint" value="<?php echo $row['date_joint'] ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                               <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Date of registration<span class="required" style="color:red;"> * </span></label>
                                        <input type="date" class="form-control border-input "  name="date_reg" value="<?php echo $row['date_reg'] ?>" required>
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label>ID Doc<span class="required" style="color:red;"> * </span></label>
                                        <input type="file" class="form-control border-input "  name="id_doc" value="<?php echo $row['id_doc'] ?>" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Address <span class="required" style="color:red;"> * </span></label>
                                        <textarea rows="2" name="address" class="form-control border-input "><?php echo $row['address'];?>
                                        </textarea>
                                    </div>
                                </div> 
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Comments </label>
                                        <textarea rows="2" name="comment" class="form-control border-input " ><?php echo $row['comment']; ?>
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-info btn-fill btn-wd">Save</button>
                            </div>
                            <div class="clearfix"></div>
                        </form>
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
    
    