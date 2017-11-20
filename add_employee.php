<?php
// Start the session
session_start();
if(!empty($_SESSION)){
if(($_SESSION['permission']!='operator') && ($_SESSION['permission']!='user')){
/*user access contrl by session*/
?>
<?php require_once 'header.php'; ?>
<?php $page=2;require_once 'sidebar.php'; ?>
<?php require_once 'nav.php'; ?>

  <div class="content">
        <div class="container-fluid">
<?php 
include 'config.php';
$sql="SELECT * FROM employee ORDER BY e_ID DESC LIMIT 1";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$id=$row['e_ID'];
$img=$id+1;                    
//print_r($row);
?>        
        
<?php 
if(isset($_POST['submit'])){
   if(isset($_POST['e_name']) && isset($_POST['comment'])  && isset($_POST['Gender'])&& isset($_POST['DOB'])&& isset($_POST['submit']) /*&&isset($_POST['anniversary']) && isset($_POST['date_joint']) && isset($_POST['emp_reg'])&& isset($_POST['address'])&& isset($_POST['date_reg'])&& isset($_POST['Email'])*/){
$Name = $_POST['e_name'] .$img;//for image and document name
$doc=$_FILES['id_doc']; //post document
$extension=$doc['type']; //extension of documents
$doc_1= explode("/",$extension);
$extn=$doc_1['1'];  
$doc_url = "assets/empl_doc/$Name.$extn";
$url = "assets/empl_image/$Name.jpg";
    $data = array( 
            'e_name' => $_POST['e_name'],
            'Gender' => $_POST['Gender'],
            'DOB' => $_POST['DOB'],
            'contact' => $_POST['contact'],
            'anniversary' => $_POST['anniversary'],
            'Email' => $_POST['Email'],
            'date_joint' => $_POST['date_joint'] ,
            'emp_reg' => $_POST['emp_reg'],
            'date_reg' => $_POST['date_reg'],
            'id_doc' => $doc_url,
            'address' => $_POST['address'],
            'comment' => $_POST['comment'],
            'photo' => $url
        );
    # Create a connection
    $url = 'http://localhost/yoga_project/add_employee_api.php';
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
}
?>
  
      <div class="row">
        <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="content" style="box-shadow: 0 2px 2px rgb(128, 191, 209)!important;">
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
<!--
                   <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content" >
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
                                         <a href="employee_profile.php"><i class="fa fa-plus" aria-hidden="true"></i>Employee Profile</a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
-->
                </div>
            </div>
        </div>
        <div class="row">
               <div class="col-lg-8 col-md-7">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Add Employee</h4>
                    </div>
                    <div class="content">
                    <form action="add_employee.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Name <span class="required" style="color:red;"> * </span></label>
                                    <input type="text" class="form-control border-input surnameInput" placeholder="name" name="e_name" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Contact No. <span class="required" style="color:red;"> * </span></label>
                                    <input type="text" class="form-control border-input phoneInput" placeholder="Contact No." name="contact">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address <span class="required" style="color:red;"> * </span></label>
                                    <input type="email" class="form-control border-input UserName_field " placeholder="Email" name="Email">
                                </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                <label>Gender <span class="required" style="color:red;"> * </span></label>
                                <div>
                                    <select  class="form-control student_admission border-input" name="Gender" required>
                                        <option >---------------Gender---------------</option>
                                        <option name="Gender" value="male">Male</option>
                                        <option name="Gender" value="female">Female</option>  
                                    </select>
                                </div>
                            </div>
                        </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                                <label>Date of birth <span class="required" style="color:red;"> * </span></label>
                                <input type="date" class="form-control border-input datepicker" name="DOB" required>
                               </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Anniversary<span class="required" style="color:red;"> * </span></label>
                                    <input type="date" class="form-control border-input datepicker"  name="anniversary"  required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Employee ID <span class="required" style="color:red;"> * </span></label>
                                    <input type="text" class="form-control border-input phoneInput" placeholder="" name="emp_reg">
                                </div>
                            </div>  
                             <div class="col-md-6">
                                <div class="form-group">
                                    <label>Date of joining<span class="required" style="color:red;"> * </span></label>
                                    <input type="date" class="form-control border-input datepicker"  name="date_joint"  required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                                <div class="form-group">
                                    <label>Date of registration<span class="required" style="color:red;"> * </span></label>
                                    <input type="date" class="form-control border-input datepicker"  name="date_reg"required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                            <?php 
                                if(isset($_POST['submit']))
                                { file_put_contents("assets/empl_image/$Name.jpg",file_get_contents($_FILES['img']['tmp_name']));
                                }
                            ?>
                                <label>Profile Image<span class="required" style="color:red;"> * </span></label>
                                <input type="file" class="form-control border-input "  name="img" accept="image/*" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                               <?php 
                                if(isset($_POST['submit']))
                                { 
                    /*geting extension of file*/  
                                    $doc=$_FILES['id_doc']['type']; //post document
                                    //$extension=$doc['type']; //extension of documents
                                    $doc_1= explode("/",$doc);
                                    $extn=$doc_1['1']; file_put_contents("assets/empl_doc/$Name.$extn",file_get_contents($_FILES['id_doc']['tmp_name']));
                                }
                               ?>      
                                <label>ID docs<span class="required" style="color:red;"> * </span></label>
                                <input type="file" class="form-control border-input" name="id_doc" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Address <span class="required" style="color:red;"> * </span></label>
                                    <textarea rows="5" class="form-control border-input UserName_field" name="address"placeholder="your address" >
                                    </textarea>
                                </div>
                            </div> 
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Comments <span class="required" style="color:red;"> * </span></label>
                                    <textarea rows="5" class="form-control border-input UserName_field" name="comment" placeholder="Here can be your description" >
                                    </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" name="submit" class="btn btn-info btn-fill btn-wd">Submit</button>
                        </div>
                        <div class="clearfix"></div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

     <?php require_once 'footer.php'; ?>
  <?php require_once 'script_include.php'; ?>

 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog" >
    <div class="modal-dialog modal-lg">
      <div class="modal-content upload_img ">
        <div class="modal-header ">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Uploaded File</h4>
        </div>
        <div class="modal-body upload_img">
            <!--<img alt="No File Found" id = "imageUpload" />-->
            <iframe alt="No File Found" id = "imageUpload" ></iframe>
         </div>
        <div class="modal-footer ">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
<script>
    function uploadFunction(imgvalue){ 
        var img =  <?php echo json_encode(base_url()); ?>; 
        var imageSrc = img + imgvalue;
        var input = document.getElementById('imageUpload');
        input.src = imageSrc;
    }
</script>
<style> 
    .modal-dialog{text-align:center;}
    .modal-content{display:inline-block;}
    #imageUpload{
        width:600px;
        height:300px;
    }  

<?php
} 
  else{  
echo '<script language="javascript">';
echo 'alert("Access denied");window.location = "employee.php" </script>';
  }
}
else 
    header('Location: index.php');//echo "<h1>No User Logged In</h1>";
?>

    
    