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
                        <h4 class="title">Add Enquiry</h4>
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
                                    <input type="text" maxlength="10" class="form-control border-input phoneInput" name="" value="" required>
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
                                    <input type="date" class="form-control border-input " name="" value="" required >
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
                                    <textarea rows="1" class="form-control border-input" value="">
                                    </textarea>
                                </div>
                            </div> 
                              <div class="col-md-4">
                                <div class="form-group">
                                    <label>Comment <span class="required" style="color:red;"> * </span></label>
                                    <textarea rows="1" class="form-control border-input"  value="">
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
                                        <tbody id="myTable">
                                            <tr>
                                               <td>1</td>
                                                <td><a href="">priyanka</a></td>
                                                <td>lalgepriyanka1995@gmail.com</td>
                                                <td>235346456</td>
                                                <td>dryrty</td> 
                                                <td>fhfgj</td>
                                                <td>sdgdf</td> 
                                                <td>dfgdh</td>
                                                <td>dfgdfh</td>
                                                <td><a href="edit_enquiry.php"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a></td>
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
    
    