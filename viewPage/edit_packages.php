<?php 
if(isset($_GET['pack_ID'])){
    $data = array(
        'pack_ID' => $_GET['pack_ID'],
    );
    # Create a connection
    $url = 'http://localhost/yoga_project/Viewapi/editViewPack_api.php';
    $ch = curl_init($url);
    # Form data string
    $postString = http_build_query($data, '', '&');
    # Setting our options
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postString);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    # Get the response
    $content = curl_exec($ch);
  $packages = json_decode($content);
  $packages_view = $packages->packages_view;
    curl_close($ch);  
}

if(isset($_POST['edit_sub'])){
     $data = array(
                        'pack_ID' => $_POST['pack_ID'],
                        'Category' => $_POST['Category'],
                        'Active' => $_POST['Active'],
                        'Name_of_package' => $_POST['Name_of_package'],
                        'Time' => $_POST['Time'],
                        'batch' => $_POST['batch'],
                        'Description' => $_POST['Description'],
                        'fee' => $_POST['Fee']
                    );
    # Create a connection
    $url = 'http://localhost/yoga_project/Editapi/package_edit_api.php';
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
                    <form action="edit_packages.php" method="POST">
                     <input type="hidden" name="pack_ID" value="<?php echo $_GET['pack_ID'];?>">
                    <div class="content">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                <label>Category<span class="required" style="color:red;"> * </span></label>
                                    <input type="text" class="form-control border-input UserName_field" name="Category" value="<?php echo $packages_view[0]->Category; ?>" required>
                                </div>
                            </div>
                             <div class="col-md-4">
                                <div class="form-group">
                                <label>Active<span class="required" style="color:red;"> * </span></label>
                                    <input type="text" class="form-control border-input UserName_field" name="Active" value="<?php echo $packages_view[0]->Active; ?>" required>
                                </div>
                            </div>
                             <div class="col-md-4">
                                <div class="form-group">
                                <label>Name of the Package<span class="required" style="color:red;"> * </span></label>
                                    <input type="text" class="form-control border-input UserName_field" name="Name_of_package" value="<?php echo $packages_view[0]->Name_of_package; ?>" required>
                                </div>
                            </div>
                            </div> 
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Time<span class="required" style="color:red;"> * </span></label>
                                    <input type="text" class="form-control border-input UserName_field" name="Time" value="<?php echo $packages_view[0]->Time; ?>" required >
                                </div>
                            </div> 
                             <div class="col-md-4">
                                 <div class="form-group">
                                     <label>Select Plan<span class="required" style="color:red;"> * </span></label> 
                                     <select name="batch" class="form-control border-input" required>
                                         <option value="<?php echo $packages_view[0]->batch; ?>"><?php echo $packages_view[0]->batch; ?></option>
                                         <option value="">---------------Select---------------</option>
                                         <option value="followdate">fgutyu</option>
                                         <option value="followdate">fgutyu</option>
                                     </select>
                               
                                 </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Fees<span class="required" style="color:red;"> * </span></label>
                                    <input type="text" class="form-control border-input phoneInput" name="Fee" value="<?php echo $packages_view[0]->fee; ?>" required >
                                </div>
                            </div>
                            </div> 
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Description <span class="required" style="color:red;"> * </span></label>
                                    <textarea rows="1" name="Description" class="form-control border-input"><?php echo $packages_view[0]->Description; ?>
                                    </textarea>
                                </div>
                            </div> 
                             <div class="col-md-2">
                                <div class="form-group">
                                    <br>
                                    <center><input type="submit" name="edit_sub" class="btn btn-success" style="margin-top: 8px;"></center>
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
    
    