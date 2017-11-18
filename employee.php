<?php require_once 'header.php'; ?>
<?php require_once 'sidebar.php'; ?>
<?php require_once 'nav.php'; ?>

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
                    </div>
                </div>
                <div class="row">
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
                                        <tbody id="myTable">
                                            <tr>
                                               <td>1</td>
                                                <td><a href="employee_profile.php">priyanka</a></td>
                                                <td>235346456</td>
                                                <td>lalgepriyanka1995@gmail.com</td>
                                                <td>paid</td>
                                                <td><i class="fa fa-pencil-square-o" aria-hidden="true"></i></td>
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
    
    