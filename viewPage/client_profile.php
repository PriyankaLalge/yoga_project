<?php  
if(isset($_GET['c_id'])){
    $data = array(
        'c_ID' => $_GET['c_id'],
    );
# Create a connection

 $url = 'http://localhost/yoga_project/Viewapi/view_client_profile_api.php';
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
?>	 

<?php require_once 'header.php'; ?>
<?php require_once 'custome_style.php'; ?>
<?php $page=1;require_once 'sidebar.php'; ?>
<?php $nav=1;require_once 'nav.php'; ?>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                     <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content" style="box-shadow: 0 2px 2px rgb(128, 191, 209)!important;">
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
                    
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-info text-center">
                                      <i class="fa fa-database" aria-hidden="true"></i>
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
                                         <a href="package_history.php"><i class="fa fa-plus" aria-hidden="true"></i>Package History</a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-danger text-center">
                                       <i class="fa fa-legal" aria-hidden="true"></i>
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
                                         <a href="fitness_history.php"><i class="fa fa-plus" aria-hidden="true"></i>Fitness History</a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-warning text-center">
                                       <i class="fa fa-money" aria-hidden="true"></i>
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
                                         <a href="client_payment_history.php"><i class="fa fa-plus" aria-hidden="true"></i>Payment History</a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
               
              <div class="row">
                       <div class="col-lg-4 col-md-5">
                        <div class="card card-user">
                            <div class="image">
                                <img src="../assets/img/yoga.jpg" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                    <img class="avatar border-white" src="<?php echo $client_view[0]->photo; ?>">
                                  
                                  <h5 class="title"><br>
                                     ID:<?php echo $client_view[0]->c_ID;?><br>
                                    Name: <?php echo $client_view[0]->c_name;?><br>
                                    Contact No. <?php echo $client_view[0]->contact;?>
                                  </h5>
                                </div>
                            </div>
                        </div>
                             <div class="card">
                            <div class="header">
                                <h4 class="title">Fee Details</h4>
                            </div>
                            <div class="content">
                                <ul class="list-unstyled team-members">
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-6">
                                              Total Fees
                                                <br>
                                            </div>
                                            <div class="col-xs-3 text-right">
                                                <b><?php echo $client_view[0]->fees;?></b>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-6">
                                               Discount
                                                <br>
                                            </div>
                                            <div class="col-xs-3 text-right">
                                                <b><?php echo $client_view[0]->discount;?></b>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-6">
                                               Recieved
                                                <br>
                                            </div>
                                            <div class="col-xs-3 text-right">
                                                <b><?php echo $client_view[0]->received;?></b>
                                            </div>
                                        </div>
                                    </li> 
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-6">
                                              Balance
                                                <br>
                                            </div>
                                            <div class="col-xs-3 text-right">
                                                <b><?php echo $client_view[0]->balance;?></b>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Client Details</h4>
                            </div>
                             <input type="hidden" name="c_ID" value="<?php echo $_GET['c_id'];?>" >
                            <div class="content">
                                <ul class="list-unstyled team-members">
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-3">
                                                Email ID:
                                                <br>
                                            </div>
                                            <div class="col-xs-9">
                                                <b><?php echo $client_view[0]->email;?></b>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-3">
                                           Gender:
                                                <br>
                                            </div>
                                            <div class="col-xs-6 ">
                                                <b><?php echo $client_view[0]->gender;?></b>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-3">
                                                Date of Birth:
                                                <br>
                                            </div>
                                            <div class="col-xs-6 ">
                                                <b><?php echo $client_view[0]->DOB;?></b>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-3">
                                               Anniversary:
                                                <br>
                                            </div>
                                            <div class="col-xs-9">
                                                <b><?php echo $client_view[0]->Anniversary;?></b>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-3">
                                             Address:
                                                <br>
                                            </div>
                                            <div class="col-xs-6">
                                                <b><?php echo $client_view[0]->address;?></b>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-3">
                                             Comments:
                                                <br>
                                            </div>
                                            <div class="col-xs-9">
                                                <b><?php echo $client_view[0]->Comments;?></b>
                                            </div>
                                        </div>
                                    </li>
                                    <br>
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-3">
                                              Package Type:
                                                <br>
                                            </div>
                                            <div class="col-xs-9">
                                                <b><?php echo $client_view[0]->c_name;?></b>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-3">
                                             Batch Name:
                                                <br>
                                            </div>
                                            <div class="col-xs-9">
                                                <b><?php echo $client_view[0]->c_name;?></b>
                                            </div>
                                        </div>
                                    </li> 
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-3">
                                             Start Date:
                                                <br>
                                            </div>
                                            <div class="col-xs-9">
                                                <b><?php echo $client_view[0]->startdate;?></b>
                                            </div>
                                        </div>
                                    </li> 
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-3">
                                             End Date:
                                                <br>
                                            </div>
                                            <div class="col-xs-9">
                                                <b><?php echo $client_view[0]->enddate;?></b>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-*"><br>
                                                <center><a href="edit_client_profile.php?c_id=<?php echo $client_view[0]->c_ID;?>"><button class="btn btn-success">Edit Profile</button></a></center>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
    </div>

     <?php require_once 'footer.php'; ?>
  <?php require_once 'script_include.php'; ?>
  

    
    