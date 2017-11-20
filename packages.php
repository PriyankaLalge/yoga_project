<?php
// Start the session
/*session_start();
if(!empty($_SESSION)){
if(($_SESSION['permission']!='operator') && ($_SESSION['permission']!='user')){*/
/*start of user access control by session*/

?>
<!--api for view batch detail while adding new packages-->
<?php  
# Create a connection
$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'http://localhost/yoga_project/view_batch_api.php');
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);
# Get the response
$content = curl_exec($ch);
$batch = json_decode($content);
$batch_view = $batch->batch_view;
//$batch_view = $batch->batch_view;
?>

<!--database connection-->

    <div class="content">
        <div class="container-fluid">
            <?php 
            if(isset($_POST['submit']) && isset($_POST['Catogary'])){ 
                $data = array(
                        'Catogary' => $_POST['Catogary'],
                        'Active' => $_POST['Active'],
                        'Name_of_plan' => $_POST['Name_of_plan'],
                        'Time_unit' => $_POST['Time_unit'],
                        'batch' => $_POST['batch'],
                        'Description' => $_POST['Description'],
                        'Fee' => $_POST['Fee']
                    );
                    # Create a connection
                    $url = 'http://localhost/yoga_project/add_packages_api.php';
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
<?php include 'config.php'; ?>
<?php require_once 'header.php'; ?>
<?php require_once 'custome_style.php'; ?>
<?php $page=4;require_once 'sidebar.php'; ?>
<?php $nav=4;require_once 'nav.php'; ?>

<div class="content">
    <div class="container-fluid">
       <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h4 class="title">Add Packages</h4>
            </div>
            <div class="content">
                <form action="packages.php" method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                        <label>Category<span class="required" style="color:red;"> * </span></label>
                            <input type="text" class="form-control border-input UserName_field" name="Catogary" required>
                        </div>
                    </div>
                     <div class="col-md-4">
                        <div class="form-group">
                        <label>Active<span class="required" style="color:red;"> * </span></label>
                            <input type="text" class="form-control border-input UserName_field" name="Active" required>
                        </div>
                    </div>
                     <div class="col-md-4">
                        <div class="form-group">
                        <label>Name of the Package<span class="required" style="color:red;"> * </span></label>
                            <input type="text" class="form-control border-input UserName_field" name="Name_of_plan" required>
                        </div>
                    </div>
                    </div> 
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Time<span class="required" style="color:red;"> * </span></label>
                            <input type="text" class="form-control border-input UserName_field" name="Time_unit" required >
                        </div>
                    </div> 
                     <div class="col-md-4">
                         <div class="form-group">
                             <label>Select Plan<span class="required" style="color:red;"> * </span></label> 
                             <select name="batch" class="form-control border-input" required>
                                 <option value="">---------------Select---------------</option>
                                 <option value="followdate">fgutyu</option>
                                 <option value="followdate">fgutyu</option>
                             </select>

                         </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Fees<span class="required" style="color:red;"> * </span></label>
                            <input type="text" class="form-control border-input phoneInput" name="Fee"  required >
                        </div>
                    </div>
                    </div> 
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Description <span class="required" style="color:red;"> * </span></label>
                            <textarea rows="1" class="form-control border-input" name="Description">
                            </textarea>
                        </div>
                    </div> 
                     <div class="col-md-2">
                        <div class="form-group">
                            <br>
                            <center><button type="submit" class="btn btn-success" style="margin-top: 8px;">Add</button></center>
                        </div>
                    </div>
                    </div>
                </form>
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
                                        <h3 class="text-uppercase">Package Details</h3>
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
                                        <th style="font-weight:bold;">Category</th>
                                        <th style="font-weight:bold;">Status</th> 
                                        <th style="font-weight:bold;">Plan</th> 
                                        <th style="font-weight:bold;">Time</th>
                                        <th style="font-weight:bold;">Batch</th>
                                        <th style="font-weight:bold;">Fees</th>
                                        <th style="font-weight:bold;">Notes</th>
                                    </tr>
                                </thead>
                                <tbody id="myTable">
                                    <tr>
                                       <td>1</td>
                                        <td><a href="">hgfvh</a></td>
                                        <td>paid</td>
                                        <td>Monthly</td>
                                        <td>9-6</td> 
                                        <td>B1</td>
                                        <td>345</td> 
                                        <td>gtfdyrt</td>
                                         <td><a href="edit_packages.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                                    </tr>
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
/*} else{
    
echo '<script language="javascript">';
echo 'alert("Access denied");window.location = "packages.php" </script>';}
}
else {header('Location: index.php');}
echo "<h1>No User Logged In</h1>";*/

        ?>    
    