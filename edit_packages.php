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
                        <h4 class="title">Edit Package</h4>
                    </div>
                    <div class="content">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                <label>Category<span class="required" style="color:red;"> * </span></label>
                                    <input type="text" class="form-control border-input UserName_field" name="" value="" required>
                                </div>
                            </div>
                             <div class="col-md-4">
                                <div class="form-group">
                                <label>Active<span class="required" style="color:red;"> * </span></label>
                                    <input type="text" class="form-control border-input UserName_field" name="" value="" required>
                                </div>
                            </div>
                             <div class="col-md-4">
                                <div class="form-group">
                                <label>Name of the Package<span class="required" style="color:red;"> * </span></label>
                                    <input type="text" class="form-control border-input UserName_field" name="" value="" required>
                                </div>
                            </div>
                            </div> 
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Time<span class="required" style="color:red;"> * </span></label>
                                    <input type="text" class="form-control border-input UserName_field" name="" value="" required >
                                </div>
                            </div> 
                             <div class="col-md-4">
                                 <div class="form-group">
                                     <label>Select Plan<span class="required" style="color:red;"> * </span></label> 
                                     <select name="" class="form-control border-input" required>
                                         <option value="">---------------Select---------------</option>
                                         <option value="followdate">fgutyu</option>
                                         <option value="followdate">fgutyu</option>
                                     </select>
                               
                                 </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Fees<span class="required" style="color:red;"> * </span></label>
                                    <input type="text" class="form-control border-input phoneInput" name="" value="" required >
                                </div>
                            </div>
                            </div> 
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Description <span class="required" style="color:red;"> * </span></label>
                                    <textarea rows="1" class="form-control border-input" value="">
                                    </textarea>
                                </div>
                            </div> 
                             <div class="col-md-2">
                                <div class="form-group">
                                    <br>
                                    <center><button type="submit" class="btn btn-success" style="margin-top: 8px;">Save</button></center>
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
    
    