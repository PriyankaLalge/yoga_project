<?php require_once 'header.php'; ?>
<?php require_once 'custome_style.php'; ?>
<?php $page=3;require_once 'sidebar.php'; ?>
<?php $nav=3;require_once 'nav.php'; ?>
<?php
if(isset($_GET['batch_id'])){
    $data=array(
    'batch_id'=>$_GET['batch_id']);
    # Create a connection
    $url = 'http://localhost/yoga_project/Viewapi/view_edit_batch_api.php';
    $ch = curl_init($url);
    # Form data string
    $postString = http_build_query($data, '', '&');
    # Setting our options
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postString);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    # Get the response
    $content = curl_exec($ch);
    $batch = json_decode($content);
   $batch_view = $batch->batch_view;
    curl_close($ch);
}
?>
<?php  
# Create a connection
$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'http://localhost/yoga_project/Viewapi/view_trainer_api.php');
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);
# Get the response
$content = curl_exec($ch);
$employe = json_decode($content);
$employee_view = $employe->employee_view;
//print_r($employee_view);
?>
<?php
if(isset($_POST['submit'])&&isset($_POST['batch_id'])){
$data=array(
'batch_id'=>$_POST['batch_id'],
'batch_name'=>$_POST['batch_name'],
'batch_timing'=>$_POST['batch_timing'],
'name_of_batch'=>$_POST['name_of_batch'],
'plan'=>$_POST['plan'],
't_name'=>$_POST['t_name']    
);
# Create a connection
    $url = 'http://localhost/yoga_project/Editapi/edit_batch_api.php';
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
        <div class="content">
            <div class="container-fluid">
               <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Edit Batch</h4>
                    </div>
                    <form action="edit_batches.php" method="POST">
                    <div class="content">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                <label>Batch Name<span class="required" style="color:red;"> * </span></label>
                                    <input type="text" class="form-control border-input UserName_field" name="batch_name" value="<?php echo $batch_view[0]->batch_name ;?>" required>
                                    <input type="hidden" name="batch_id" value="<?php echo $batch_view[0]->batch_id;?>">
                                </div>
                            </div>
                             <div class="col-md-4">
                                <div class="form-group">
                                <label>Name of the Batches<span class="required" style="color:red;"> * </span></label>
                                    <input type="text" class="form-control border-input UserName_field" name="name_of_batch" value="<?php echo $batch_view[0]->name_of_batch ;?>" >
                                </div>
                            </div>
                             <div class="col-md-4">
                                <div class="form-group">
                                <label>Time<span class="required" style="color:red;"> * </span></label>
                                    <input type="text" class="form-control border-input UserName_field" name="batch_timing" value="<?php echo $batch_view[0]->batch_timing ;?>" required>
                                </div>
                            </div>
                            </div> 
                        <div class="row">
                             <div class="col-md-4">
                                 <div class="form-group">
                                     <label>Trainer<span class="required" style="color:red;"> * </span></label> 
                                     <select name="t_name" class="form-control border-input" required>
                                         <option name="t_name" value="<?php echo $batch_view[0]->e_name ;?>" ><?php echo $batch_view[0]->e_name ;?></option>
                                         <option >---------------Select---------------</option>
                                         <?php foreach($employee_view as $value):?>
                                          <option name="t_name" ><?php echo $value->e_name;?></option><?php endforeach;?>
                                     </select>
                               
                                 </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Plan<span class="required" style="color:red;"> * </span></label>
                                    <input type="text" class="form-control border-input UserName_field" name="plan" value="<?php echo $batch_view[0]->plan ;?>" >
                                </div>
                            </div>
                             <div class="col-md-2">
                                <div class="form-group">
                                    <br>
                                    <center><button type="submit" name="submit" class="btn btn-success" style="margin-top: 8px;">Update</button></center>
                                </div>
                            </div>
                            </div> 
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </div>

     <?php require_once 'footer.php'; ?>
  <?php require_once 'script_include.php'; ?>
  
<style> 
input[id=teachersearch] {
    width: 5px;
    box-sizing: border-box;
    border: 1px solid #c5e2ea;;
    border-radius: 50px;
    font-size: 16px;
    background-color: white;
    background-image: url('assets/img/search.png');
    background-position: 11px 7px; 
    background-repeat: no-repeat;
    background-size: 21px;
    padding-left: 35px;
}

</style>
    
    