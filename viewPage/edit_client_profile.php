<?php
if(isset($_GET['c_id'])){
    $data = array(
        'c_id' => $_GET['c_id'],
    );
    # Create a connection
    $url = 'http://localhost/yoga_project/Viewapi/editViewClient_api.php';
    $ch = curl_init($url);
    # Form data string
    $postString = http_build_query($data, '', '&');
    # Setting our options
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postString);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    # Get the response
    $content = curl_exec($ch);
    $client = json_decode($content);
    $client_view = $client->client_view;
    curl_close($ch);
}
if(isset($_POST['edit_client'])){
    if(empty($_FILES['cpro_img']['name'])){
        $photo1 = $_POST['c_photo'];
    }
    else{
        $photo1 = $_FILES['cpro_img'];
    }
    $data = array( 
        'c_id' =>$_POST['c_id'],
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
         'photo' => $photo1
    );
    # Create a connection
    $url = 'http://localhost/yoga_project/Editapi/edit_client_api.php';
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
                <div class="row">
                       <div class="col-lg-8 col-md-7">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Client</h4>
                            </div>
                            <div class="content">
                                <form action="edit_client_profile.php" method="post" enctype="multipart/form-data">
                                    <input type="hidden" value="<?php echo $_GET['c_id'] ?>" name="c_id" />
                                    <input type="hidden" name="c_photo" value="<?php echo $client_view[0]->photo;?>" >
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Name <span class="required" style="color:red;"> * </span></label>
                                                <input type="text" class="form-control border-input surnameInput" placeholder="name" name="c_name" value="<?php echo $client_view[0]->c_name;?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Contact No. <span class="required" style="color:red;"> * </span></label>
                                                <input type="text" maxlength="10" class="form-control border-input phoneInput" placeholder="Contact No." name="c_contact" value="<?php echo $client_view[0]->contact;?>">
                                            </div>
                                        </div>
                                         <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address <span class="required" style="color:red;"> * </span></label>
                                                <input type="email" class="form-control border-input UserName_field" placeholder="Email" name="email" value="<?php echo $client_view[0]->email;?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Gender <span class="required" style="color:red;"> * </span></label>
                                            <div>
                                                <select  class="form-control student_admission border-input"  name="gender" required>
                                                    <option><?php echo $client_view[0]->gender;?></option>
                                                    <option value="">---------------Gender---------------</option>
                                                    <option value="regularcourse">Female</option>
                                                    <option value="crashcourse">Male</option>  
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Date of birth <span class="required" style="color:red;"> *   </span></label>
                                            <input type="date" class="form-control border-input"      name="DOB" value="<?php echo $client_view[0]->DOB;?>" required>
                                           </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Age<span class="required" style="color:red;"> * </span></label>
                                                <input type="text" class="form-control border-input phoneInput"  name="Age" value="<?php echo $client_view[0]->Age;?>" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                         <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Anniversary<span class="required" style="color:red;"> *   </span></label>
                                            <input type="date" class="form-control border-input"      name="Anniversary" value="<?php echo $client_view[0]->Anniversary;?>" required>
                                           </div>
                                        </div>
                                        <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Lead By<span class="required" style="color:red;"> * </span></label>
                                            <div>
                                                <select  class="form-control student_admission border-input"  name="Lead_By" required>
                                                    <option value="<?php echo $client_view[0]->Lead_By;?>"><?php echo $client_view[0]->Lead_By;?></option>
                                                    <option value="">---------------Select---------------</option>
                                                    <option value="regularcourse">rakesh</option>
                                                    <option value="crashcourse">Mahesh</option>  
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Address <span class="required" style="color:red;"> * </span></label>
                                                <textarea rows="1" class="form-control border-input" name="c_address"><?php echo $client_view[0]->address;?>
                                                </textarea>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="row">
                                          <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Comments<span class="required" style="color:red;"> * </span></label>
                                                <textarea rows="1" class="form-control border-input" name="Comments"><?php echo $client_view[0]->Comments;?>
                                                </textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Profile Photo<span class="required" style="color:red;"> * </span></label>
                                                <input type="file" class="form-control border-input" name="cpro_img" accept="image/*"  value="">
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
                                                    <?php foreach($packages_view as $package): 
                                                        if($client_view[0]->package == $package->Cat_ID){
                                                            ?>
                                                    <option value="<?php echo $package->Cat_ID; ?>"><?php echo $package->Category; ?></option><option value="">---------------Select---------------</option>
                                                    <?php
                                                        }else{
                                                    ?>
                                                    <option value="<?php echo $package->Cat_ID; ?>"><?php echo $package->Category; ?></option>
                                                    <?php } endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div> 
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Batch Name<span class="required" style="color:red;"> * </span></label>
                                            <div>
                                                <select  class="form-control student_admission border-input"  name="batch" required>
                                                    <?php foreach($batch_view as $batch):  if($client_view[0]->batch_id == $batch->batch_id){?>
                                                    <option value="<?php echo $batch->batch_id; ?>"><?php echo $batch->batch_name; ?></option><option value="">---------------Select---------------</option>
                                                    <?php }else{?>
                                                    
                                                    
                                                    <option value="<?php echo $batch->batch_id; ?>"><?php echo $batch->batch_name; ?></option>
                                            <?php }endforeach; ?>  
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                      <div class="row">
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Start Date <span class="required" style="color:red;"> *   </span></label>
                                            <input type="date" class="form-control border-input datepicker"      name="startdate" value="<?php echo $client_view[0]->startdate;?>" required>
                                           </div>
                                        </div>
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label>End Date <span class="required" style="color:red;"> *   </span></label>
                                            <input type="date" class="form-control border-input datepicker"      name="enddate" value="<?php echo $client_view[0]->enddate;?>" required>
                                           </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Total Fees <span class="required" style="color:red;"> * </span></label>
                                                <input type="text" class="form-control border-input phoneInput" placeholder="name" name="c_fees" value="<?php echo $client_view[0]->fees;?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Discount<span class="required" style="color:red;"> * </span></label>
                                                <input type="text" class="form-control border-input phoneInput" placeholder="Contact No." name="Discount" value="<?php echo $client_view[0]->discount;?>">
                                            </div>
                                        </div>
                                          <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Recieved<span class="required" style="color:red;"> * </span></label>
                                                <input type="text" class="form-control border-input phoneInput" placeholder="name" name="received" value="<?php echo $client_view[0]->received;?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Balance<span class="required" style="color:red;"> * </span></label>
                                                <input type="text" class="form-control border-input phoneInput" placeholder="Contact No." name="balance" value="<?php echo $client_view[0]->balance;?>">
                                            </div>
                                        </div>
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label>Fees Reminder Date <span class="required" style="color:red;"> *   </span></label>
                                                  <input type="date" class="form-control border-input "  name="fee_rem_date" value="<?php echo $client_view[0]->fee_rem_date;?>" required>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <input type="submit" name="edit_client" class="btn btn-info btn-fill btn-wd">
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
  

    
    