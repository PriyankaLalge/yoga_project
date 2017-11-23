<?php
// Start the session
/*session_start();
if(!empty($_SESSION)){*/
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
if(isset($_POST['submit']))
{ 
    if(isset($_POST['batch']))
    {
        $data =array('batch'=>$_POST['batch']);
    }
}
?>
<?php  
# Create a connection
$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'http://localhost/yoga_project/Viewapi/view_client_api.php');
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);
# Get the response
$content = curl_exec($ch);
$client = json_decode($content);
$client_view = $client->client_view;
 // print_r($client_view);
?>	   

<?php require_once 'header.php'; ?>
<?php require_once 'custome_style.php'; ?>
<?php $page=1;require_once 'sidebar.php'; ?>
<?php $nav=1;require_once 'nav.php'; ?>
<!--card for add client,client payment,client attendance-->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
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
<!--
                     <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-success text-center">
                                          <i class="fa fa-user" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                          <a href="clients.php"><p>Client</p></a> 
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                         <a href="client_profile.php"><i class="fa fa-plus" aria-hidden="true"></i>Client Profile</a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                    
-->
                </div>
                <div class="row card_style">
                       <div class="card">
                        <div class="col-1">
                            <div class="panel panel-default templatemo-content-widget white-bg no-padding templatemo-overflow-hidden" style="overflow:auto;">
                                <div class="panel-heading templatemo-position-relative" style="background-color: #ffffff;">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="col-md-4">
                                                <h3 class="text-uppercase">Client Details</h3>
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
                                                <th style="font-weight:bold;">Name</th>
                                                <th style="font-weight:bold;">Contact No.</th> 
                                                <th style="font-weight:bold;">Batch Name</th> 
                                                <th style="font-weight:bold;">Payment</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody id="myTable"><?php $i=1; foreach($client_view as $value ): foreach($batch_view as $value1 ):
                                        if ($value->batch_id == $value1->batch_id){?>
                                            <tr><?php //print_r($value); ?>
                                               <td>1</td>
                                                <td><a href="client_profile.php?c_id=<?php echo $value->c_ID; ?>"><?php echo $value->c_name; ?></a></td>
                                                <td><?php echo $value->contact; ?></td>
                                                <td><?php echo $value1->batch_name; ?></td>
                                                <td>Waiting</td>
                                                <td><a href="edit_client_profile.php?c_id=<?php echo $value->c_ID; ?>"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a></td>
                                            </tr><?php }endforeach;?><?php endforeach;?>

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
    background-image: url('../assets/img/search.png');
    background-position: 11px 7px; 
    background-repeat: no-repeat;
    background-size: 21px;
    padding-left: 35px;
}

</style>
<?php
/*}
else 
    header('Location: index.php');*/
    //echo "<h1>No User Logged In</h1>";
?>    
    