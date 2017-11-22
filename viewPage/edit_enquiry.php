<?php 
if(isset($_GET['enq_ID'])){
    $data = array(
        'enq_ID' => $_GET['enq_ID'],
    );
    # Create a connection
    $url = 'http://localhost/yoga_project/Viewapi/editViewEnq_api.php';
    $ch = curl_init($url);
    # Form data string
    $postString = http_build_query($data, '', '&');
    # Setting our options
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postString);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    # Get the response
    $content = curl_exec($ch);
    $enquiry = json_decode($content);
    $enquiry_view = $enquiry->enquiry_view;
    curl_close($ch);  
}
if(isset($_POST['editSubmit'])){
    $data = array(
        'enq_ID' => $_POST['enq_ID'],
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
    $url = 'http://localhost/yoga_project/Editapi/enquiry_edit_api.php';
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


<?php require_once 'header.php'; ?>
<?php require_once 'custome_style.php'; ?>
<?php $page=11;require_once 'sidebar.php'; ?>
<?php $nav=11;require_once 'nav.php'; ?>

        <div class="content">
            <div class="container-fluid">
               <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Edit Enquiry</h4>
                    </div>
                    <form action="edit_enquiry.php" method="POST">
                        <input type="hidden" name="enq_ID" value="<?php echo $_GET['enq_ID'];?>">
                    <div class="content">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                <label>Full Name<span class="required" style="color:red;"> * </span></label>
                                    <input type="text" name="fullName" class="form-control border-input surnameInput" value="<?php echo $enquiry_view[0]->fullName; ?>" required>
                                </div>
                            </div>
                             <div class="col-md-4">
                                <div class="form-group">
                                <label>Email<span class="required" style="color:red;"> * </span></label>
                                    <input type="text" class="form-control border-input UserName_field" name="enqEmail" value="<?php echo $enquiry_view[0]->enqEmail; ?>" required>
                                </div>
                            </div>
                             <div class="col-md-4">
                                <div class="form-group">
                                <label>Contact No.<span class="required" style="color:red;"> * </span></label>
                                    <input type="text" class="form-control border-input phoneInput" name="contNo" value="<?php echo $enquiry_view[0]->contNo; ?>" required>
                                </div>
                            </div>
                            </div> 
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Enquiry Date<span class="required" style="color:red;"> * </span></label>
                                    <input type="date" class="form-control border-input" name="enqDate" value="<?php echo $enquiry_view[0]->enqDate; ?>" required >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>FollowUp Date <span class="required" style="color:red;"> * </span></label>
                                    <input type="date" class="form-control border-input" name="followDate" value="<?php echo $enquiry_view[0]->followDate; ?>" required >
                                </div>
                            </div> 
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>FollowUp Time <span class="required" style="color:red;"> * </span></label>
                                    <input type="text" class="form-control border-input UserName_field" name="followTime" value="<?php echo $enquiry_view[0]->followTime; ?>" required >
                                </div>
                            </div>
                            </div> 
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Preference <span class="required" style="color:red;"> * </span></label>
                                    <textarea rows="1" class="form-control border-input UserName_field" name="preFrence"><?php echo $enquiry_view[0]->preFrence; ?>
                                    </textarea>
                                </div>
                            </div> 
                              <div class="col-md-4">
                                <div class="form-group">
                                    <label>Comment <span class="required" style="color:red;"> * </span></label>
                                    <textarea rows="1" class="form-control border-input UserName_field" name="Comment"><?php echo $enquiry_view[0]->Comment; ?>
                                    </textarea>
                                </div>
                            </div> 
                             <div class="col-md-2">
                                <div class="form-group">
                                    <br>
                                    <center><input type="submit" class="btn btn-success" name="editSubmit" style="margin-top: 8px;"></center>
                                </div>
                            </div>
                            </div>
                        </div>
                        </form>
                    </div>
                   </div>
                </div>
            </div>
    </div>

     <?php require_once 'footer.php'; ?>
  <?php require_once 'script_include.php'; ?>
  
    
    