<?php  
# Create a connection
$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'http://localhost/yoga_project/Viewapi/view_birth_anni_api.php');
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);
# Get the response
$content = curl_exec($ch);
$client_emplye = json_decode($content);
$client_view = $client_emplye->client_view;
$employee_view = $client_emplye->employee_view;
?>	   


<?php require_once 'header.php'; ?>
<?php require_once 'custome_style.php'; ?>
<?php $page=9;require_once 'sidebar.php'; ?>
<?php $nav=9;require_once 'nav.php'; ?>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                     <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content" >
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-success text-center">
                                         <i class="fa fa-database" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                          <a href="notifications.php"><p>Notifications</p></a> 
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                         <a href="notifications.php"><i class="fa fa-plus" aria-hidden="true"></i>Package Renewal</a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                    
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content" >
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-info text-center">
                                      <i class="fa fa-money" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                        <a href="notifications.php"><p>Notifications</p></a> 
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                         <a href="fees_reminder.php"><i class="fa fa-plus" aria-hidden="true"></i>Fees Reminder</a> 
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
                                     <i class="fa fa-calendar" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                        <a href="notifications.php"><p>Notifications</p></a> 
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                         <a href="followup_date.php"><i class="fa fa-plus" aria-hidden="true"></i>FollowUp Date</a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content" style="box-shadow: 0 2px 2px rgb(128, 191, 209)!important;">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-warning text-center">
                                      <i class="fa fa-birthday-cake" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                        <a href="notifications.php"><p>Notifications</p></a> 
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                         <a href="birthday_anniversary.php"><i class="fa fa-plus" aria-hidden="true"></i>Birthday And Anniversary</a> 
                                    </div>
                                </div>
                            </div>
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
                                                <h3 class="text-uppercase">Birthday And Anniversary</h3>
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
                                                <th style="font-weight:bold;">Email</th>
                                                <th style="font-weight:bold;">Mobile</th>
                                                <th style="font-weight:bold;">Gender</th>
                                                <th style="font-weight:bold;">Date of birth</th> 
                                                <th style="font-weight:bold;">Anniversary</th> 
                                                <th style="font-weight:bold;">Client/Employee</th>
                                            </tr>
                                        </thead>
                                        <tbody id="myTable"><?php $i=0;foreach($client_view as $value):  ?>
                                            <tr>
                                               <td><?php $i++; echo $i;?></td>
                                                 <td><a href=""><?php echo $value->c_name;?></a></td>
                                                <td><?php echo $value->email;?></td>
                                                <td><?php echo $value->contact;?></td>
                                                <td><?php echo $value->gender;?></td>
                                                <?php if($value->DOB == date('Y-m-d')){ ?>
                                                <td><font color="#db0e0e"><?php echo $value->DOB;?></font></td>
                                                <?php }else{ ?>
                                                <td><?php echo $value->DOB;?></td> 
                                                <?php } ?>
                                                <?php if($value->Anniversary == date('Y-m-d')){ ?>
                                                <td><font color="#4eac07"><?php echo $value->Anniversary;?></font></td>
                                                <?php }else{ ?>
                                                <td><?php echo $value->Anniversary;?></td> 
                                                <?php } ?>
                                                <td>Client</td>
                                            </tr><?php endforeach;?>
                                            <?php $i=0;foreach($employee_view as $value_1):  ?>
                                            <tr>
                                                <td><?php $i++; echo $i;?></td>
                                                 <td><a href=""><?php echo $value_1->e_name;?></a></td>
                                                <td><?php echo $value_1->Email;?></td>
                                                <td><?php echo $value_1->contact;?></td>
                                                <td><?php echo $value_1->Gender;?></td>
                                                 <?php if($value_1->DOB == date('Y-m-d')){ ?>
                                                <td><font color="#db0e0e"><?php echo $value_1->DOB;?></font></td>
                                                <?php }else{ ?>
                                                <td><?php echo $value_1->DOB;?></td> 
                                                <?php } ?>
                                                <?php if($value_1->anniversary == date('Y-m-d')){ ?>
                                                <td><font color="#4eac07"><?php echo $value_1->anniversary;?></font></td>
                                                <?php }else{ ?>
                                                <td><?php echo $value_1->anniversary;?></td> 
                                                <?php } ?>
                                                <td>Employee</td>
                                            </tr><?php endforeach;?>
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

    
    