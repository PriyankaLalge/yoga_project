
<?php  
# Create a connection
$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'http://localhost/yoga_project/Viewapi/notifi_view_enquiry_api.php');
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);
# Get the response
$content = curl_exec($ch);
$enquiry = json_decode($content);
$enquiry_view_1 = $enquiry->enquiry_view;
$enq_count = $enquiry->count1;
?> 

<?php  
# Create a connection
$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'http://localhost/yoga_project/Viewapi/view_birth_anni_api.php');
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);
# Get the response
$content = curl_exec($ch);
$client_emplye = json_decode($content);
$client_view2 = $client_emplye->client_view;
$employee_view2 = $client_emplye->employee_view;
$count_c = $client_emplye->count_c;
$count_e = $client_emplye->count_e;
$count_final = $count_c + $count_e;
?>	   

<?php  
# Create a connection
$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'http://localhost/yoga_project/Viewapi/view_notify_pack_renw_api.php');
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);
# Get the response
$content = curl_exec($ch);
$client = json_decode($content);
$client_view_1 = $client->client_view;
 $pack_renw_count = $client->count2;
?>	

<?php  
# Create a connection
$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'http://localhost/yoga_project/Viewapi/view_notify_fee_remd_api.php');
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);
# Get the response
$content2 = curl_exec($ch);
$client2 = json_decode($content2);
$client_view_3 = $client2->client_view;
$fee_remd_count = $client2->count_3;
 // print_r($client_view);
?>	   

<div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
<!--                    <a class="navbar-brand" href="#">Dashboard</a>-->
                    <?php if($nav==0):?>
                            <a class="navbar-brand" href="#"><?php echo "Dashboard"; ?></a>
					    <?php endif;?>
                        <?php if($nav==1):?>
                            <a class="navbar-brand" href="#"><?php echo "Clients"; ?></a>
					    <?php endif;?>
                        <?php if($nav==2):?>
                            <a class="navbar-brand" href="#"><?php echo "Employees"; ?></a>
					    <?php endif;?>
                        <?php if($nav==3):?>
                            <a class="navbar-brand" href="#"><?php echo "Batches"; ?></a>
					    <?php endif;?>
                        <?php if($nav==4):?>
                            <a class="navbar-brand" href="#"><?php echo "Packages"; ?></a>
					    <?php endif;?>
                        <?php if($nav==5):?>
                            <a class="navbar-brand" href="#"><?php echo "Attendance"; ?></a>
					    <?php endif;?>
                        <?php if($nav==6):?>
                            <a class="navbar-brand" href="#"><?php echo "Client Attendance"; ?></a>
					    <?php endif;?>
                        <?php if($nav==7):?>
                            <a class="navbar-brand" href="#"><?php echo "Employee Attendance"; ?></a>
					    <?php endif;?>
                        
                        <?php if($nav==8):?>
                            <a class="navbar-brand" href="#"><?php echo "Trainer Attendance"; ?></a>
					    <?php endif;?>
                        <?php if($nav==9):?>
                            <a class="navbar-brand" href="#"><?php echo "Notifications"; ?></a>
					    <?php endif;?>
                        <?php if($nav==10):?>
                            <a class="navbar-brand" href="#"><?php echo "Accounts"; ?></a>
					    <?php endif;?>
                        <?php if($nav==11):?>
                            <a class="navbar-brand" href="#"><?php echo "Enquiry"; ?></a>
					    <?php endif;?>
                   
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                     <i class="fa fa-money fa-lg" aria-hidden="true"></i>
									<span class="badge"><?php echo $fee_remd_count; ?></span>
									<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <table class="table table-striped table-bordered"  >
                                        <thead>
                                            <tr style="font-weight:bold;" class="header font_tr">
                                                 <th style="font-weight:bold;">Fee_Reminder</th>
                                                <th style="font-weight:bold;">Name</th>
                                                <th style="font-weight:bold;">Fee_Balance</th>
                                                <th style="font-weight:bold;">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody id="myTable"><?php $i=0;foreach($client_view_3 as $value): { ?>
                                            <tr>
                                               <td><?php echo $value->fee_rem_date;?></td>
                                                <td><a href="client_profile.php?c_id=<?php echo $value->c_ID; ?>"><?php echo $value->c_name;?></a></td>
                                                <td><?php echo $value->balance;?></td>
                                                <td><font color="#db0e0e"><?php echo $value->status;?></font></td> 
                                            </tr><?php }endforeach;?>
                                        </tbody>
                                    </table> 
                            </ul>
                        </li> 
                         <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-birthday-cake fa-lg" aria-hidden="true"></i>
									<span class="badge"><?php echo $count_final; ?></span>
									<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                         <table class="table table-striped table-bordered"  >
                                        <thead>
                                            <tr style="font-weight:bold;" class="header font_tr">
                                                 <th style="font-weight:bold;">Name</th> 
                                                <th style="font-weight:bold;">Dateofbirth</th> 
                                                <th style="font-weight:bold;">Anniversary</th> 
                                                <th style="font-weight:bold;">Client/Employee</th>
                                            </tr>
                                        </thead>
                                        <tbody id="myTable"><?php $i=0;foreach($client_view2 as $value):  ?>
                                            <tr>
                                           
                                                 <td><a href="client_profile.php?c_id=<?php echo $value->c_ID; ?>"><?php echo $value->c_name;?></a></td>
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
                                            <?php $i=0;foreach($employee_view2 as $value_1):  ?>
                                            <tr>
                                               
                                                 <td><a href="employee_profile.php?e_ID=<?php echo $value_1->e_ID;?>"><?php echo $value_1->e_name;?></a></td>
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
                            </ul>
                        </li> 
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                     <i class="fa fa-database fa-lg" aria-hidden="true"></i>
									<span class="badge"><?php echo $pack_renw_count; ?></span>
									<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr style="font-weight:bold;" class="header font_tr">
                                                <th style="font-weight:bold;">Name</th>
                                                <th style="font-weight:bold;">Package</th> 
                                                <th style="font-weight:bold;">StartDate</th>
                                                <th style="font-weight:bold;">EndDate</th>
                                            </tr>
                                        </thead>
                                        <tbody id="myTable"><?php $i=0;foreach($client_view_1 as $value_1):  ?>
                                            <tr>
                                                <td><a href="client_profile.php?c_id=<?php echo $value_1->c_ID; ?>"><?php echo $value_1->c_name; ?></a></td>
                                                <td><?php echo $value_1->package;?></td>
                                                <td><?php echo $value_1->startdate; ?></td>
                                                <td><?php echo $value_1->enddate; ?></td>
                                            </tr><?php endforeach;?>
                                        </tbody>
                                    </table> 
                            </ul>
                        </li> 
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-pencil-square fa-lg" aria-hidden="true"></i>
									<span class="badge"><?php echo $enq_count; ?></span>
									<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <table class="table table-striped table-bordered"  >
                                        <thead>
                                            <tr style="font-weight:bold;" class="header font_tr">
                                                <th style="font-weight:bold;">Name</th>
                                                <th style="font-weight:bold;">Mobile</th> 
                                                <th style="font-weight:bold;">FollowUp</th>
                                                <th style="font-weight:bold;">Comment</th>
                                            </tr>
                                        </thead>
                                        <tbody id="myTable"><?php $i=0;foreach($enquiry_view_1 as $value):  ?>
                                            <tr>
                                                <td><?php echo $value->fullName; ?></td>
                                                 <td><?php echo $value->contNo;?></td>
                                                <td><?php echo $value->followDate; ?></td>
                                                <td><?php echo $value->Comment; ?></td>
                                            </tr><?php endforeach;?>
                                        </tbody>
                                    </table> 
                              </ul>
                        </li> 
                        
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                  <i class="fa fa-user fa-lg" aria-hidden="true"></i>
									<p>Profile</p>
									<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Username</a></li>
                                <li><a href="../">Sign Out</a></li>
                                
                              </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
  