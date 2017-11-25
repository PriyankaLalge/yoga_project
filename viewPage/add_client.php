<?php 
if(isset($_POST['submit'])){
    $data = array( 
        'c_name' => $_POST['c_name'],
        'c_contact' => $_POST['c_contact'],
        'email' => $_POST['email'],
        'gender' => $_POST['gender'],
        'DOB' => $_POST['DOB'],
        'Age' => $_POST['Age'],
        'Anniversary' => $_POST['Anniversary'],
        'c_address' => $_POST['c_address'],
        'Comments' => $_POST['Comments'],
        'Lead_By' => $_POST['Lead_By'],
        'package' => $_POST['package'],
        // $Register_ID = $_POST['Register_ID'];
        'batch' => $_POST['batch'],
        'startdate' => $_POST['startdate'],
        'enddate' => $_POST['enddate'],
         //$status_payment = $_POST['status_payment'];
         'c_fees' => $_POST['c_fees'],
         'Discount' => $_POST['Discount'],
         'received' => $_POST['received'],
         'balance' => $_POST['balance'],
         'fee_rem_date' => $_POST['fee_rem_date'],
         'photo' => $_FILES['cpro_img']

        );
    $url = 'http://localhost/yoga_project/Insertapi/add_client_api.php';
    $ch = curl_init($url);
    # Form data string
    $postString = http_build_query($data, '', '&');
    # Setting our options
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postString);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    # Get the response
    $response = curl_exec($ch);
    curl_close($ch);    
}
?>
<?php  
# Create a connection
$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'http://localhost/yoga_project/Viewapi/view_batch_api.php');
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);
# Get the response
$content = curl_exec($ch);
$batch = json_decode($content);
$batch_view = $batch->batch_view;
?>
<?php  
# Create a connection
$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'http://localhost/yoga_project/Viewapi/view_packages_api.php');
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);
# Get the response
$content = curl_exec($ch);
$packages = json_decode($content);
$packages_view = $packages->packages_view;
?>
<?php require_once 'header.php'; ?>
<?php require_once 'custome_style.php'; ?>
<?php $page=1;require_once 'sidebar.php'; ?>
<?php $nav=1;require_once 'nav.php'; ?>

<div class="content">
    <div class="container-fluid">
        <?php if(isset($_POST['submit'])){ print_r($response); }?>
      <div class="row">
        <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="content" style="box-shadow: 0 2px 2px rgb(128, 191, 209)!important;">
                        <div class="row">
                            <div class="col-xs-5">
                                <div class="icon-big icon-warning text-center">
                                   <i class="fa fa-user-plus" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="col-xs-7">
                                <div class="numbers">
                                  <a href="clients.php"><p>Clients</p></a>  

                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <hr />
                            <div class="stats">
                              <a href="add_client.php"><i class="fa fa-plus" aria-hidden="true"></i>Add new Client</a>  
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
                        <h4 class="title">Add Client</h4>
                    </div>
                    <div class="content">
                        <form action="add_client.php" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Name <span class="required" style="color:red;"> * </span></label>
                                        <input type="text" class="form-control border-input surnameInput" placeholder="name" name="c_name" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Contact No. <span class="required" style="color:red;"> * </span></label>
                                        <input type="text" maxlength="10" class="form-control border-input phoneInput" placeholder="Contact No." name="c_contact" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address <span class="required" style="color:red;"> * </span></label>
                                        <input type="email" class="form-control border-input UserName_field" placeholder="Email" name="email">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                <div class="form-group">
                                    <label>Gender <span class="required" style="color:red;"> * </span></label>
                                    <div>
                                        <select  class="form-control student_admission border-input"  name="gender" required>
                                            <option value="">---------Gender---------</option>
                                            <option name="gender" value="male">Male</option>
                                            <option name="gender" value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                                 <div class="col-md-4">
                                <div class="form-group">
                                    <label>Date of birth <span class="required" style="color:red;"> *   </span></label>
                                    <input type="date" class="form-control border-input " name="DOB" required>
                                   </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Age<span class="required" style="color:red;"> * </span></label>
                                        <input type="text" class="form-control border-input phoneInput"  name="Age"  required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                 <div class="col-md-4">
                                <div class="form-group">
                                    <label>Anniversary<span class="required" style="color:red;"> *   </span></label>
                                    <input type="date" class="form-control border-input "   name="Anniversary" required>
                                   </div>
                                </div>
                                 <div class="col-md-4">
                                <div class="form-group">
                                    <label>Lead By<span class="required" style="color:red;"> * </span></label>
                                    <div>
                                        <select  class="form-control student_admission border-input"  name="Lead_By" required>
                                            <option name="Lead_By">---------Select---------</option>
                                            <option name="Lead_By" value="regularcourse">rakesh</option>
                                            <option name="Lead_By" value="crashcourse">Mahesh</option>  
                                        </select>
                                    </div>
                                </div>
                            </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Address <span class="required" style="color:red;"> * </span></label>
                                        <textarea rows="1" class="form-control border-input" name="c_address" placeholder="Mention Your address here">
                                        </textarea>
                                    </div>
                                </div> 
                            </div>
                            <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Comments<span class="required" style="color:red;"> * </span></label>
                                        <textarea rows="1" class="form-control border-input" name="Comments" placeholder="Mention Your Comments here" >
                                        </textarea>
                                    </div>
                                </div> 
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Profile Photo<span class="required" style="color:red;"> * </span></label>
                                        <input  type="file" class="form-control border-input" name="cpro_img" accept="image/*">
                                      
                                    </div>
                                </div> 
                            </div>
                        <hr>
                            <div class="row">
                                 <div class="col-md-6">
                                <div class="form-group">
                                    <label>Package Type<span class="required" style="color:red;"> * </span></label>
                                    <div>
                                        <select  class="form-control student_admission border-input"  name="package" required>
                                            <option >---------------Select---------------</option>
                                            <?php foreach($packages_view as $package): ?>
                                            <option  name="package" value="<?php echo $package->Cat_ID; ?>"><?php echo $package->Category; ?></option>
                                            <?php endforeach; ?> 
                                        </select>
                                    </div>
                                </div>
                            </div> 
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label>Batch Name<span class="required" style="color:red;"> * </span></label>
                                    <div>
                                        <select  class="form-control student_admission border-input" name="batch" required>
                                            <option value="">---------------Select---------------</option>
                                            <?php foreach($batch_view as $batch): ?>
                                            <option name="batch" value="<?php echo $batch->batch_id; ?>"><?php echo $batch->batch_name; ?></option>
                                            <?php endforeach; ?> 
                                        </select>
                                    </div>
                                </div>
                                </div>
                            </div>
                              <div class="row">
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label>Start Date <span class="required" style="color:red;"> *   </span></label>
                                    <input type="date" class="form-control border-input "   name="startdate" required>
                                   </div>
                                </div>
                                 <div class="col-md-6">
                                <div class="form-group">
                                    <label>End Date <span class="required" style="color:red;"> *   </span></label>
                                    <input type="date" class="form-control border-input "  name="enddate" required>
                                   </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Total Fees <span class="required" style="color:red;"> * </span></label>
                                        <input type="text" class="form-control border-input phoneInput" placeholder="Fees" id="total_fees" name="c_fees" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Discount<span class="required" style="color:red;"> * </span></label>
                                        <input type="text" id="discount" class="form-control border-input phoneInput" placeholder="Contact No." name="Discount" >
                                    </div>
                                </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Recieved<span class="required" style="color:red;"> * </span></label>
                                        <input type="text" id="recieved" class="form-control border-input phoneInput" placeholder="received fees" name="received" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Balance<span class="required" style="color:red;"> * </span></label>
                                        <input type="text" id="balance" onfocus="calc_balance()" class="form-control border-input phoneInput" placeholder="Contact No." name="balance" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label>Fees Reminder Date <span class="required" style="color:red;"> *   </span></label>
                                    <input type="date" class="form-control border-input "  name="fee_rem_date" required>
                                   </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <input type="submit" name="submit" class="btn btn-info btn-fill btn-wd">
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
//}
//else{ 
//echo '<script language="javascript">';
//echo 'alert("Access denied");window.location = "client.php" </script>';
//}}
//
//else //echo "<h1>No User Logged In</h1>";
//{header('Location: index.php');}
?> 

    
    