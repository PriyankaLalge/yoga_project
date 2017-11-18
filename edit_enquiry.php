<?php require_once 'header.php'; ?>
<?php $page=11;require_once 'sidebar.php'; ?>
<?php require_once 'nav.php'; ?>

        <div class="content">
            <div class="container-fluid">
               <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Edit Enquiry</h4>
                    </div>
                    <div class="content">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                <label>Full Name<span class="required" style="color:red;"> * </span></label>
                                    <input type="text" class="form-control border-input surnameInput" name="" value="" required>
                                </div>
                            </div>
                             <div class="col-md-4">
                                <div class="form-group">
                                <label>Email<span class="required" style="color:red;"> * </span></label>
                                    <input type="text" class="form-control border-input UserName_field" name="" value="" required>
                                </div>
                            </div>
                             <div class="col-md-4">
                                <div class="form-group">
                                <label>Contact No.<span class="required" style="color:red;"> * </span></label>
                                    <input type="text" class="form-control border-input phoneInput" name="" value="" required>
                                </div>
                            </div>
                            </div> 
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Enquiry Date<span class="required" style="color:red;"> * </span></label>
                                    <input type="date" class="form-control border-input" name="" value="" required >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>FollowUp Date <span class="required" style="color:red;"> * </span></label>
                                    <input type="date" class="form-control border-input" name="" value="" required >
                                </div>
                            </div> 
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>FollowUp Time <span class="required" style="color:red;"> * </span></label>
                                    <input type="text" class="form-control border-input UserName_field" name="" value="" required >
                                </div>
                            </div>
                            </div> 
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Preference <span class="required" style="color:red;"> * </span></label>
                                    <textarea rows="1" class="form-control border-input UserName_field" placeholder="Here can be your description" value="Mike">
                                    </textarea>
                                </div>
                            </div> 
                              <div class="col-md-4">
                                <div class="form-group">
                                    <label>Comment <span class="required" style="color:red;"> * </span></label>
                                    <textarea rows="1" class="form-control border-input UserName_field" placeholder="Here can be your description" value="Mike">
                                    </textarea>
                                </div>
                            </div> 
                             <div class="col-md-2">
                                <div class="form-group">
                                    <br>
                                    <center><button type="submit" class="btn btn-success" style="margin-top: 8px;">Add Enquiry</button></center>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                   </div>
                </div>
            </div>
    </div>

     <?php require_once 'footer.php'; ?>
  <?php require_once 'script_include.php'; ?>
  
    
    