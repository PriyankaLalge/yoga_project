<?php require_once 'header.php'; ?>
<?php require_once 'custome_style.php'; ?>
<?php $page=6;require_once 'sidebar.php'; ?>
<?php $nav=6;require_once 'nav.php'; ?>

<?php  
# Create a connection
$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'http://localhost/yoga_project/Viewapi/view_client_api.php');
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);
# Get the response
$content = curl_exec($ch);
$client = json_decode($content);
$client_view = $client->client_view;
 //print_r($client_view);
?>
<?php 
if(isset($_POST['submit'])){
    $date = $_POST['date'];
    $data = array(
        'date' => $date,
    );
# Create a connection
$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'http://localhost/yoga_project/Viewapi/view_client_attend_api.php');
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);
# Get the response
$content = curl_exec($ch);
$client_attend = json_decode($content);
//$client_view = $client->client_view;
//print_r($client_attend);

    # Get the response
    $response = curl_exec($ch);
   //print_r($response);
 /*   curl_close($ch);
    $sql = "SELECT MAX(`c_attend_ID`) FROM c_attend";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $c_attend_ID = $row['MAX(`c_attend_ID`)'];*/
    }
?>
<div class="content">
    <div class="container-fluid">
       <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="content">
                 <form action="client_attendance.php" method="POST">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Select Date<span class="required" style="color:red;"> * </span></label>
                            <input type="date" class="form-control border-input datepicker" name="date" required >
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
    <?php if(isset($_POST['submit'])):?>    
        <div class="row card_style">
               <div class="card">
                <div class="col-1">
                    <div class="panel panel-default templatemo-content-widget white-bg no-padding templatemo-overflow-hidden" style="overflow:auto;">
                        <div class="panel-heading templatemo-position-relative" style="background-color: #ffffff;">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-4">
                                        <h3 class="text-uppercase">Client Attendance</h3>
                                    </div>
                                    <div class="col-md-8" style="margin-top:-2px;">
                                        <h3>
                                         <form action="client_attendance.php" method="POST">
                                            <div class="input-group pull-right">
                                                 <input type="text" class="form-control"  placeholder="Search..." id="teachersearch"  name="search">
                                                <span class="input-group-btn">
                                                    <button type="submit" name="submit" class="btn btn-success">Search</button>
                                                </span>
                                            </div>
                                         </form>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form action="../Insertapi/mark_client_attend_api.php" method="post">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered"  >
                                <thead>
                                    <tr style="font-weight:bold;" class="header font_tr">
                                        <th style="font-weight:bold;">Sr No.</th>
                                        <th style="font-weight:bold;">Client ID</th>
                                        <th style="font-weight:bold;">Name</th> 
                                        <th style="font-weight:bold;">Attendance</th> 
                                        <th style="font-weight:bold;">Package</th>
                                        <th style="font-weight:bold;">In Time</th>
                                        <th style="font-weight:bold;">Out Time</th>
                                    </tr>
                                </thead>
                                
                                <tbody id="myTable"><?php $i=0;foreach($client_view as $value): ?>
                                <input type="hidden" value="<?php echo $c_attend_ID;?>" name="c_attend_ID" >
                                <input type="hidden" value="<?php echo $date;?>" name="date" >
                                    <tr>
                                       <td><?php $i++;echo $i; ?></td>
                                        <td><a href="client_profile.php?c_id=<?php echo $value->c_ID; ?>"><?php echo $value->c_ID; ?></a></td>
                                        <input type="hidden" name="client_id[]" value="<?php echo $value->c_ID; ?>">
                                        <td><?php echo $value->c_name; ?></td>
                                        <td>
                                            
                                        </td>
                                        <td><?php echo $value->package; ?></td>
                                        <td><input type="time" name="in_time[]" value="00:00"/></td> 
                                        <td><input type="time" name="out_time[]" value="00:00"/></td>
                                    </tr><?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    <center><button type="submit" name="submit" class="btn btn-success"style="margin-top: 8px;">Submit</button></center>
                    </form> 
                    </div>
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
    
    