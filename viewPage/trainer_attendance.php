<?php require_once 'header.php'; ?>
<?php require_once 'custome_style.php'; ?>
<?php $page=8;require_once 'sidebar.php'; ?>
<?php $nav=8;require_once 'nav.php'; ?>

        <div class="content">
            <div class="container-fluid">
               <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
<!--
                    <div class="header">
                        <h4 class="title">Client Attendance</h4>
                    </div>
-->
                    <div class="content">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Select Date<span class="required" style="color:red;"> * </span></label>
                                    <input type="date" class="form-control border-input datepicker" name="" value="" required >
                                </div>
                            </div>
                             <div class="col-md-4">
                                 <div class="form-group">
                                     <label>Trainer<span class="required" style="color:red;"> * </span></label> 
                                     <select name="" class="form-control border-input" required>
                                         <option value="">---------------Select---------------</option>
                                         <option value="followdate">fgutyu</option>
                                         <option value="followdate">fgutyu</option>
                                     </select>
                               
                                 </div>
                            </div>
                             <div class="col-md-2">
                                <div class="form-group">
                                    <br>
                                    <center><button type="submit" class="btn btn-success" style="margin-top: 8px;">Submit</button></center>
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
                                                <h3 class="text-uppercase">Trainer Attendance</h3>
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
                                                <th style="font-weight:bold;">Trainer ID</th>
                                                <th style="font-weight:bold;">Name</th> 
                                                <th style="font-weight:bold;">Batch Name</th> 
                                                <th style="font-weight:bold;">In Time</th>
                                                <th style="font-weight:bold;">Out Time</th>
                                                <th style="font-weight:bold;">Total No. of Hours</th>
                                            </tr>
                                        </thead>
                                        <tbody id="myTable">
                                            <tr>
                                               <td>1</td>
                                                <td><a href="">2</a></td>
                                                <td>priyanka</td>
                                                <td>B1</td>
                                                <td>1</td> 
                                                <td>6</td>
                                                <td>5</td>
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
    
    