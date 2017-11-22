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
    $url = 'http://localhost/yoga_project/Viewapi/editViewEmp_api.php';
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
if(isset($_POST['edit_emp'])){
    $data = array(
            'e_ID' => $_POST['e_ID'],
            'e_name' => $_POST['e_name'],
            'Gender' => $_POST['Gender'],
            'DOB' => $_POST['DOB'],
            'contact' => $_POST['contact'],
            'anniversary' => $_POST['anniversary'],
            'Email' => $_POST['Email'],
            'date_joint' => $_POST['date_joint'] ,
            'emp_reg' => $_POST['emp_reg'],
            'date_reg' => $_POST['date_reg'],
            'status' => $_POST['status'],
            'id_doc' => '$doc_url',
            'address' => $_POST['address'],
            'comment' => $_POST['comment'],
            'photo' => 'photo'
    );
    # Create a connection
    $url = 'http://localhost/yoga_project/Editapi/edit_employee_api.php';
    $ch = curl_init($url);
    # Form data string
    $postString = http_build_query($data, '', '&');
    # Setting our options
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postString);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    # Get the response
    $response = curl_exec($ch);
    print_r($response);
    curl_close($ch);  
}
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
                        <form action="edit_employee_profile.php" method="POST">
                            <input type="hidden" name="e_ID" value="<?php echo $_GET['e_ID'];?>" >
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Name <span class="required" style="color:red;"> * </span></label>
                                        <input type="text" class="form-control border-input surnameInput"  name="e_name" value="<?php echo $employee_view[0]->e_name; ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Contact No. <span class="required" style="color:red;"> * </span></label>
                                        <input type="text" maxlength="10" class="form-control border-input phoneInput" name="contact" value="<?php echo $employee_view[0]->contact; ?>"  required>
                                    </div>
                                </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address </label>
                                        <input type="email" class="form-control border-input UserName_field" name="Email" value="<?php echo $employee_view[0]->Email; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                <div class="form-group">
                                    <label>Gender <span class="required" style="color:red;"> * </span></label>
                                    <div>
                                        <select  class="form-control student_admission border-input"  name="Gender" required>
                                            <option ><?php echo $employee_view[0]->Gender; ?></option>
                                            <option >---------Gender---------</option>
                                            <option name="Gender" value="male">Male</option>
                                            <option name="Gender" value="female">Female</option>  
                                        </select>
                                    </div>
                                </div>
                            </div>
                                <div class="col-md-4">
                                <div class="form-group">
                                    <label>Date of birth <span class="required" style="color:red;"> *   </span></label>
                                    <input type="date" class="form-control border-input datepicker" name="DOB" value="<?php echo $employee_view[0]->DOB; ?>" required>
                                   </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Anniversary</label>
                                        <input type="date" class="form-control border-input"  name="anniversary" value="<?php echo $employee_view[0]->anniversary; ?>" >
                                    </div>
                                </div>
                        </div>
                          
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Employee ID <span class="required" style="color:red;"> * </span></label>
                                        <input type="text" class="form-control border-input phoneInput" value="<?php echo $employee_view[0]->emp_reg; ?>" name="emp_reg" required>
                                    </div>
                                </div>  
                                 <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Date of joining<span class="required" style="color:red;"> * </span></label>
                                        <input type="date" class="form-control border-input "  name="date_joint" value="<?php echo $employee_view[0]->date_joint; ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Date of registration<span class="required" style="color:red;"> * </span></label>
                                        <input type="date" class="form-control border-input "  name="date_reg" value="<?php echo $employee_view[0]->date_reg; ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                            <div class="form-group">
                                <label>Status <span class="required" style="color:red;"> * </span></label>
                                <div>
                                    <select  class="form-control student_admission border-input" name="status" required>
                                        <option ><?php echo $employee_view[0]->status; ?></option>
                                        <option name="status" value="employee">Employee</option>
                                        <option name="status" value="trainer">Trainer</option>  
                                    </select>
                                </div>
                            </div>
                            </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Profile Image<span class="required" style="color:red;"> * </span></label>
                                        <input type="file" class="form-control border-input"  name="pro_img">
                                    </div>
                                </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                        <label>ID Doc<span class="required" style="color:red;"> * </span></label>
                                        <input type="file" class="form-control border-input"  name="id_doc">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Address <span class="required" style="color:red;"> * </span></label>
                                        <textarea rows="1" name="address" class="form-control border-input"><?php echo $employee_view[0]->address; ?>
                                        </textarea>
                                    </div>
                                </div> 
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Comments </label>
                                        <textarea rows="1" name="comment" class="form-control border-input"><?php echo $employee_view[0]->comment; ?>
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" name="edit_emp" class="btn btn-info btn-fill btn-wd">Save</button>
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
    
    