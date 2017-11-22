<?php
if(isset($_POST['submit_enq'])){
    $data = array(
        'fullName' => $_POST['fullName'],
        'enqEmail' => $_POST['enqEmail'],
        'contNo' => $_POST['contNo'],
        'enqDate' => $_POST['enqDate'],
        'followDate' => $_POST['followDate'],
        'followTime' => $_POST['followTime'],
        'preFrence' => $_POST['preFrence'],
        'Comment' => $_POST['Comment']
    );
    # Create a connection
    $url = 'http://localhost/yoga_project/Insertapi/enquiry_api.php';
    $ch = curl_init($url);
    # Form data string
    $postString = http_build_query($data, '', '&');
    # Setting our options
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postString);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    # Get the response
    $response = curl_exec($ch);
    curl_close($ch);  
}
?>

<?php  
# Create a connection
$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'http://localhost/yoga_project/Viewapi/view_enquiry_api.php');
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);
# Get the response
$content = curl_exec($ch);
$enquiry = json_decode($content);
$enquiry_view = $enquiry->enquiry_view;
?> 

<?php require_once 'header.php'; ?>
<?php require_once 'custome_style.php'; ?>
<?php $page=11;require_once 'sidebar.php'; ?>
<?php $nav=11;require_once 'nav.php'; ?>

        <div class="content">
            <div class="container-fluid">
                <?php if(isset($_POST['submit_enq'])){print_r($response);} ?>
               <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Add Enquiry</h4>
                    </div>
                    <form action="enquiry.php" method="post">
                    <div class="content">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                <label>Full Name<span class="required" style="color:red;"> * </span></label>
                                    <input type="text" class="form-control border-input surnameInput" name="fullName" value="" required>
                                </div>
                            </div>
                             <div class="col-md-4">
                                <div class="form-group">
                                <label>Email<span class="required" style="color:red;"> * </span></label>
                                    <input type="text" class="form-control border-input UserName_field" name="enqEmail" value="" required>
                                </div>
                            </div>
                             <div class="col-md-4">
                                <div class="form-group">
                                <label>Contact No.<span class="required" style="color:red;"> * </span></label>
                                    <input type="text" maxlength="10" class="form-control border-input phoneInput" name="contNo" value="" required>
                                </div>
                            </div>
                            </div> 
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Enquiry Date<span class="required" style="color:red;"> * </span></label>
                                    <input type="date" class="form-control border-input" name="enqDate" value="" required >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>FollowUp Date <span class="required" style="color:red;"> * </span></label>
                                    <input type="date" class="form-control border-input " name="followDate" value="" required >
                                </div>
                            </div> 
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>FollowUp Time <span class="required" style="color:red;"> * </span></label>
                                    <input type="text" class="form-control border-input UserName_field" name="followTime" value="" required >
                                </div>
                            </div>
                            </div> 
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Preference <span class="required" style="color:red;"> * </span></label>
                                    <textarea rows="1" name="preFrence" class="form-control border-input" value="">
                                    </textarea>
                                </div>
                            </div> 
                              <div class="col-md-4">
                                <div class="form-group">
                                    <label>Comment <span class="required" style="color:red;"> * </span></label>
                                    <textarea rows="1" name="Comment" class="form-control border-input"  value="">
                                    </textarea>
                                </div>
                            </div> 
                             <div class="col-md-2">
                                <div class="form-group">
                                    <br>
                                    <center><input type="submit" class="btn btn-success" style="margin-top: 8px;" name="submit_enq"></center>
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
                                                <h3 class="text-uppercase">Enquiry Details</h3>
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
                                                <th style="font-weight:bold;">Enquiry</th>
                                                <th style="font-weight:bold;">FollowUp</th>
                                                <th style="font-weight:bold;">F</th>
                                                <th style="font-weight:bold;">Refer</th>
                                                <th style="font-weight:bold;">Comment</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody id="myTable"><?php $i=0;foreach($enquiry_view as $value): { ?>
                                            <tr>
                                               <td><?php $i++; echo $i;?></td>
                                                <td><a href=""><?php echo $value->fullName; ?></a></td>
                                                <td><?php echo $value->enqEmail; ?></td>
                                                <td><?php echo $value->contNo;?></td>
                                                <td><?php echo $value->enqDate; ?></td> 
                                                <td><?php echo $value->followDate; ?></td>
                                                <td><?php echo $value->followTime; ?></td> 
                                                <td><?php echo $value->preFrence; ?></td>
                                                <td><?php echo $value->Comment; ?></td>
                                                <td><a href="edit_enquiry.php?enq_ID=<?php echo $value->enq_ID; ?>"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a></td>
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
    background-image: url('../assets/img/search.png');
    background-position: 11px 7px; 
    background-repeat: no-repeat;
    background-size: 21px;
    padding-left: 35px;
}

</style>
    
    