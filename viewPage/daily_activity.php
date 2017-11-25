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
                                        <div class="icon-big icon-warning text-center">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                          <a href="employee.php"><p>Trainer</p></a> 
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                         <a href="employee_profile.php"><i class="fa fa-plus" aria-hidden="true"></i>Trainer Attendance</a> 
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
                                        <i class="fa fa-hand-paper-o" aria-hidden="true"></i>
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
                                         <a href="employee_profile.php"><i class="fa fa-plus" aria-hidden="true"></i>Employee Attendance</a> 
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
                                        <div class="icon-big icon-success text-center">
                                         <i class="fa fa-tasks" aria-hidden="true"></i>
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
                                         <a href="employee_profile.php"><i class="fa fa-plus" aria-hidden="true"></i>Daily Activity</a> 
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
                                       <i class="fa fa-money" aria-hidden="true"></i>
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
                                         <a href="employee_payment_history.php"><i class="fa fa-plus" aria-hidden="true"></i>Payment History</a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                        <div class="row card_style">
                    <div class="card">
                        <div class="col-1">
                            <div class="panel panel-default templatemo-content-widget white-bg no-padding templatemo-overflow-hidden">
                                <div class="panel-heading templatemo-position-relative" style="background-color: #ffffff;">
                                     <div class="row">
                                        <div class="col-md-4">
                                            <div class="col-md-12">
                                                <h3 class="text-uppercase">Daily Activity</h3>
                                            </div>
                                        </div>
                                         <div class="col-md-8">
                                             <h3>
                                                 <form action="" method="GET">
                                                     <div class="input-group pull-right">
                                                         <input type="text" class="form-control"  placeholder="Search..." id="teachersearch"  name="" value="">
                                                         <span class="input-group-btn">
                                                             <button type="submit" class="btn btn-success">Search</button>
                                                         </span>
                                                     </div>
                                                 </form>
                                             </h3>
                                         </div>
                                     </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form action="" method="GET">
                                                  <div class="form-group">
                                                      <div class="col-md-3">
                                                          <div class="form-group">
                                                              <label>Select Date<span class="required" style="color:red;"> * </span></label>
                                                              <input type="date" class="form-control border-input datepicker" name="" value="" required>
                                                          </div>
                                                      </div>
                                                      <div class="col-md-3">
                                                          <div class="form-group">
                                                              <label>Trainer<span class="required" style="color:red;"> * </span></label>
                                                              <input type="text" class="form-control border-input"  name="" value="" required>
                                                          </div>
                                                      </div>
                             
                                                      <div class="col-md-3">
                                                          <div class="form-group">
                                                              <label>Select<span class="required" style="color:red;"> * </span></label> 
                                                              <select name="" class="form-control border-input" required>
                                                                  <option value="">--Select Status--</option>
                                                                  <option value="followdate">FollowUp Date</option>
                                                                  <option value="enqdate">Enquiry Date</option>
                                                                  <option value="inprocess">Inprocess</option>
                                                                  <option value="joined">Joined</option>
                                                                  <option value="notjoined">Not Joined</option>
                                                              </select>
                               
                                                          </div>
                                                      </div>
                                                      
                                                      <div class="col-md-2">
                                                          <div class="form-group">
                                                              <button type="submit" class="btn btn-success style_btn" value="1" name="extraSearch">Filter</button>
                                                          </div>
                                                      </div> 
                                                      <div class="col-md-1">
                                                          <div class="form-group">
                                                              <button type="submit" class="btn btn-danger style_btn" value="1" name="">Reset</button>
                                                          </div>
                                                      </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered" >
                                        <thead>
                                            <tr style="font-weight: bold;">
                                                <td>Sr No.</td>
                                                <td>Name</td>
                                                <td>Batch Name with timing</td>
                                                <td>Nop. of Batches</td>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                              <td>1</td>
                                              <td>dharam</td>
                                              <td>zumba 8 to 9</td>
                                              <td>3</td>
                                             
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
    .style_btn{
        margin-top: 24px;
    }
</style>
  <?php require_once 'script_include.php'; ?>
  

    
    