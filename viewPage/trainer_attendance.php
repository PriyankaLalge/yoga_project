<?php require_once 'header.php'; ?>
<?php require_once 'custome_style.php'; ?>
<?php $page=8;require_once 'sidebar.php'; ?>
<?php $nav=8;require_once 'nav.php'; ?>
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
<!--select Batch api for batch-->
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
    /*if(isset($_POST['submit'])){
        //$batch_id = $_POST['batch_id'];
        $date = $_POST['date'];
        $timing = $_POST['timing'];
        $data = array(
            'batch_id' => $batch_id,
            'date' => $date,
            'timing' => $timing
        );
        //print_r($data);
        # Create a connection
        $url = 'http://localhost/yoga_project/add_clientbatch_attend_api.php';
        $ch = curl_init($url);
        # Form data string
        $postString = http_build_query($data, '', '&');
        # Setting our options
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postString);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        # Get the response
        $response = curl_exec($ch);
        //print_r($response);
        curl_close($ch);
        $sql = "SELECT MAX(`c_attend_ID`) FROM c_attend";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $c_attend_ID = $row['MAX(`c_attend_ID`)'];
        }*/
        ?>
        <div class="content">
            <div class="container-fluid">
               <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="content">
                        <form action="trainer_attendance.php" method="POST">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Select Date<span class="required" style="color:red;"> * </span></label>
                                    <input type="date" class="form-control border-input datepicker" name="date" required >
                                </div>
                            </div>
                             <div class="col-md-4">
                                 <div class="form-group">
                                     <label>Trainer<span class="required" style="color:red;"> * </span></label> 
                                     <select name="" class="form-control border-input" required>
                                         <option value="">---------------Select---------------</option>
                                         <?php foreach($employee_view as $value):?>
                                         <option value="followdate"><?php echo $value->e_name;?></option>
                                         <?php endforeach;?>
                                     </select>
                                 </div>
                            </div>
                             <div class="col-md-2">
                                <div class="form-group">
                                    <br>
                                    <center><button type="submit" name="submit" class="btn btn-success" style="margin-top: 8px;">Submit</button></center>
                                </div>
                            </div>                    
                        </div>
                        </form>    
                    </div>
                </div>
            </div>
        </div>
        <?php if (isset($_POST['submit'])):?>
            <div class="row card_style">
               <div class="card">
                <div class="col-1">
                    <div class="panel panel-default templatemo-content-widget white-bg no-padding templatemo-overflow-hidden" style="overflow:auto;">
                        <div class="panel-heading templatemo-position-relative" style="background-color: #ffffff;">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-4">
                                        <h3 class="text-uppercase">Trainer Attendance</h3>
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
                                        <th style="font-weight:bold;">Sr No.</th>
                                        <th style="font-weight:bold;">Trainer ID</th>
                                        <th style="font-weight:bold;">Name</th> 
                                        <th style="font-weight:bold;">Batch Name</th> 
                                        <th style="font-weight:bold;">In Time</th>
                                        <th style="font-weight:bold;">Out Time</th>
                                        <th style="font-weight:bold;">Total No. of Hours</th>
                                    </tr>
                                </thead>
                                <tbody id="myTable"><?php $i;foreach($employee_view as $value):?><?php foreach($batch_view as $value1):?>
                                    <tr>
                                       <td><?php $i++;echo $i;?></td>
                                        <td><a href=""><?php echo $value->e_ID; ?></a></td>
                                        <td><?php echo $value->e_name; ?></td>
                                        <td><?php if($value->e_name==$value1->e_name){echo $value1->batch_name; }?></td>
                                        <td><input type="time" name="in_time" ></td> 
                                        <td><input type="time" name="out_time" ></td>
                                        <td>5</td>
                                    </tr><?php endforeach;?><?php endforeach;?>
                                </tbody>
                            </table> 
                        </div>                          
                    </div>
                    <center><button type="submit" class="btn btn-success" name="submit" style="margin-top: 8px;">Submit</button></center>
                </div>
            </div>
        </div>
        <?php endif;?>
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
    
    