<?php
// Start the session
/*session_start();
if(!empty($_SESSION)){
if(($_SESSION['permission']!='operator') && ($_SESSION['permission']!='user')){*/
/*user access contrl by session*/
?>
<?php require_once 'header.php'; ?>
<?php require_once 'custome_style.php'; ?>
<?php $page=2;require_once 'sidebar.php'; ?>
<?php $nav=2;require_once 'nav.php'; ?>

    <div class="content">
    <div class="container-fluid">
  
        
<?php 
if(isset($_POST['submit'])){

    $data = array( 
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
            'id_doc' =>  $_FILES['id_doc'],
            'address' => $_POST['address'],
            'comment' => $_POST['comment'],
            'photo' => $_FILES['pro_img']
        );
   

    $url = 'http://localhost/yoga_project/Insertapi/add_employee_api.php';
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
                                  <a href="employee.php"><p>Employee</p></a> 
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <hr />
                            <div class="stats">
                                 <a href="add_employee.php"><i class="fa fa-plus" aria-hidden="true"></i>Add new Employee</a> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
               <div class="col-lg-8 col-md-7">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Add Employee</h4>
                    </div>
                    <div class="content">
                    <form action="add_employee.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Name <span class="required" style="color:red;"> * </span></label>
                                    <input type="text" class="form-control border-input surnameInput" placeholder="name" name="e_name" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Contact No. <span class="required" style="color:red;"> * </span></label>
                                    <input type="text" maxlength="10" class="form-control border-input phoneInput" placeholder="Contact No." name="contact">
                                </div>
                            </div>
                             <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address <span class="required" style="color:red;"> * </span></label>
                                    <input type="email" class="form-control border-input UserName_field " placeholder="Email" name="Email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                            <div class="form-group">
                                <label>Gender <span class="required" style="color:red;"> * </span></label>
                                <div>
                                    <select  class="form-control student_admission border-input" name="Gender" required>
                                        <option >---------Gender---------</option>
                                        <option name="Gender" value="male">Male</option>
                                        <option name="Gender" value="female">Female</option>  
                                    </select>
                                </div>
                            </div>
                        </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                <label>Date of birth <span class="required" style="color:red;"> * </span></label>
                                <input type="date" class="form-control border-input datepicker" name="DOB" required>
                               </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Anniversary<span class="required" style="color:red;"> * </span></label>
                                    <input type="date" class="form-control border-input datepicker"  name="anniversary"  required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Employee ID <span class="required" style="color:red;"> * </span></label>
                                    <input type="text" class="form-control border-input phoneInput" placeholder="" name="emp_reg">
                                </div>
                            </div>  
                             <div class="col-md-4">
                                <div class="form-group">
                                    <label>Date of joining<span class="required" style="color:red;"> * </span></label>
                                    <input type="date" class="form-control border-input datepicker"  name="date_joint"  required>
                                </div>
                            </div>
                             <div class="col-md-4">
                                <div class="form-group">
                                    <label>Date of registration<span class="required" style="color:red;"> * </span></label>
                                    <input type="date" class="form-control border-input datepicker"  name="date_reg"required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                            <div class="form-group">
                                <label>Status <span class="required" style="color:red;"> * </span></label>
                                <div>
                                    <select  class="form-control student_admission border-input" name="status" required>
                                        <option >status</option>
                                        <option name="status" value="employee">Employee</option>
                                        <option name="status" value="trainer">Trainer</option>  
                                    </select>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label>Profile Image<span class="required" style="color:red;"> * </span></label>
                                <input type="file" class="form-control border-input "  name="pro_img" accept="image/*" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label>ID docs<span class="required" style="color:red;"> * </span></label>
                                <input type="file" class="form-control border-input" name="id_doc" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Address <span class="required" style="color:red;"> * </span></label>
                                    <textarea rows="2" class="form-control border-input" name="address">
                                    </textarea>
                                </div>
                            </div> 
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Comments <span class="required" style="color:red;"> * </span></label>
                                    <textarea rows="2" class="form-control border-input" name="comment">
                                    </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" name="submit" class="btn btn-info btn-fill btn-wd">Submit</button>
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
  else{  
echo '<script language="javascript">';
echo 'alert("Access denied");window.location = "employee.php" </script>';
  }
}
else 
    header('Location: index.php');*///echo "<h1>No User Logged In</h1>";
?>

    
    