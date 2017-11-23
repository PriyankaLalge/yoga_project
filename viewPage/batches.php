<?php require_once 'header.php'; ?>
<?php require_once 'custome_style.php'; ?>
<?php $page=3;require_once 'sidebar.php'; ?>
<?php $nav=3;require_once 'nav.php'; ?>

<!--select trainer api for batch-->
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
# Create a connection
$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'http://localhost/yoga_project/Viewapi/view_batch_api.php');
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);
# Get the response
$content = curl_exec($ch);
$batch = json_decode($content);
$batch_view = $batch->batch_view;
//print_r($batch_view);
?> 
<?php
if (isset($_POST['submit'])){
$data=array(
'batch_name'=>$_POST['batch_name'],
'batch_timing'=>$_POST['batch_timing'],
't_name'=>$_POST['t_name']
);
     $url = 'http://localhost/yoga_project/Insertapi/add_batch_api.php';
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
                        <h4 class="title">Add Batch</h4>
                    </div>
                    <form action="batches.php" method="post" >
                    <div class="content">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                <label>Batch Name<span class="required" style="color:red;"> * </span></label>
                                    <input type="text" class="form-control border-input UserName_field" name="batch_name" required>
                                </div>
                            </div>
                             <div class="col-md-4">
                                <div class="form-group">
                                <label>Name of the Batches<span class="required" style="color:red;"> * </span></label>
                                    <input type="text" class="form-control border-input UserName_field" name=""  required>
                                </div>
                            </div>
                             <div class="col-md-4">
                                <div class="form-group">
                                <label>Time<span class="required" style="color:red;"> * </span></label>
                                    <input type="text" class="form-control border-input UserName_field" name="batch_timing" required>
                                </div>
                            </div>
                            </div> 
                        <div class="row">
                             <div class="col-md-4">
                                 <div class="form-group">
                                     <label>Trainer<span class="required" style="color:red;"> * </span></label> 
                                     <select name="t_name" class="form-control border-input" required>
                                           <option >---------------Select---------------</option><?php foreach($employee_view as $value): {?>
                                       
                                         <option name="t_name"><?php echo $value->e_name; ?></option><?php } endforeach;?>
                                     </select>
                               
                                 </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Plan<span class="required" style="color:red;"> * </span></label>
                                    <input type="text" class="form-control border-input UserName_field" name=""  required >
                                </div>
                            </div>
                             <div class="col-md-2">
                                <div class="form-group">
                                    <br>
                                    <center><button type="submit" name="submit" class="btn btn-success" style="margin-top: 8px;">Add</button></center>
                                </div>
                            </div>
                            </div> 
                        </div>
                        </form>
                    </div>
                </div>
            </div>
       
                <div class="row card_style">
                       <div class="card">
                        <div class="col-1">
                            <div class="panel panel-default templatemo-content-widget white-bg no-padding templatemo-overflow-hidden" style="overflow:auto;">
                                <div class="panel-heading templatemo-position-relative" style="background-color: #ffffff;">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="col-md-4">
                                                <h3 class="text-uppercase">Batch Details</h3>
                                            </div>
                                            <div class="col-md-8" style="margin-top:-2px;">
                                                    <h3>
                                                     <form action="" method="GET">
                                                        <div class="input-group pull-right">
                                                             <input type="text" class="form-control"  placeholder="Search..." id="teachersearch"  name="search">
                                                            <span class="input-group-btn">
                                                                <button type="submit" class="btn btn-success">Search</button>
                                                            </span>
                                                        </div>
                                                     </form>
                                                    </h3>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered"  >
                                        <thead>
                                            <tr style="font-weight:bold;" class="header font_tr">
                                                <th style="font-weight:bold;">Sr No</th>
                                                <th style="font-weight:bold;">Batch name</th>
                                                <th style="font-weight:bold;">Name of the batch</th> 
                                                <th style="font-weight:bold;">Plan</th> 
                                                <th style="font-weight:bold;">Time</th>
                                                <th style="font-weight:bold;">Trainer</th>
                                            </tr>
                                        </thead>
                                        <tbody id="myTable"><?php $i=0;foreach($batch_view as $value):{?>
                                            <tr>
                                               <td><?php $i++; echo $i; ?></td>
                                                <td><a href=""><?php echo $value->batch_name;?></a></td>
                                                <td>b1</td>
                                                <td>Monthly</td>
                                                <td><?php echo $value->batch_timing;?></td> 
                                                <td><?php echo $value->e_name;?></td>
                                                 <td><a href="edit_batches.php"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a></td>
                                            </tr><?php }endforeach;?>
                                        </tbody>
                                    </table> 
                                </div>                          
                            </div>
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
    
    