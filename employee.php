<?php
// Start the session
/*session_start();
if(!empty($_SESSION)){*/
?>
<?php  
# Create a connection
$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'http://localhost/yoga_project/view_employee_api.php');
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);
# Get the response
$content = curl_exec($ch);
$employe = json_decode($content);
$employee_view = $employe->employee_view;
?> 

<?php require_once 'header.php'; ?>
<?php require_once 'custome_style.php'; ?>
<?php $page=2;require_once 'sidebar.php'; ?>
<?php $nav=2;require_once 'nav.php'; ?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
        <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="content">
                        <div class="row">
                            <div class="col-xs-5">
                                <div class="icon-big icon-success text-center">
                                  <i class="fa fa-users" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="col-xs-7">
                                <div class="numbers">
                                  <a href="employee.php"><p>Employee</p></a> 
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <hr />
                            <div class="stats">
                                 <a href="add_employee.php"><i class="fa fa-plus" aria-hidden="true"></i>Add new Employee</a> 
                            </div>
                        </div>
                    </div>
                </div>
<!--
                 <div class="col-lg-3 col-sm-6">
                    <div class="card">
                        <div class="content" >
                            <div class="row">
                                <div class="col-xs-5">
                                    <div class="icon-big icon-danger text-center">
                                      <i class="fa fa-user" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="col-xs-7">
                                    <div class="numbers">
                                      <a href="employee.php"><p>Employee</p></a> 
                                    </div>
                                </div>
                            </div>
                            <div class="footer">
                                <hr />
                                <div class="stats">
                                     <a href="employee_profile.php"><i class="fa fa-plus" aria-hidden="true"></i>Employee Profile</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
-->
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
                                        <h3 class="text-uppercase">Employee Details</h3>
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
                                        <th style="font-weight:bold;">Email Id.</th> 
                                        <th style="font-weight:bold;">Status.</th>

                                    </tr>
                                </thead>
                                <tbody id="myTable"><?php $i=0;foreach($employee_view as $value): { ?>
                                    <tr>
                                       <td><?php $i++; echo $i;?></td>
                                        <td><a href="employee_profile.php?e_ID=<?php echo $value->e_ID;?>"><?php echo $value->e_name;?></a></td>


                                        <td><?php echo $value->contact;?></td>
                                        <td><?php echo $value->Email;?></td>
                                        <td><?php echo $value->status;//$value->e_name;?></td>
                                        <td><a href="edit_employee_profile.php?e_ID=<?php echo $value->e_ID; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
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
<?php
/*}
else {header('Location: index.php');}*///echo "<h1>No User Logged In</h1>";
?>    
    