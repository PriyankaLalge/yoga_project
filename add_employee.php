<?php require_once 'header.php'; ?>
<?php require_once 'sidebar.php'; ?>
<?php require_once 'nav.php'; ?>

<?php 
/*$sql="SELECT * FROM employee ORDER BY e_ID DESC LIMIT 1";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$id=$row['e_ID'];
$img=$id+1;*/                    
//print_r($img);
?>        
        
<?php 
/*if(isset($_POST['submit'])){
    if(isset($_POST['e_name']) && isset($_POST['e_surname'])  && isset($_POST['Gender'])&& isset($_POST['DOB'])&& isset($_POST['Age']) &&isset($_POST['Title']) && isset($_POST['Salary']) && isset($_POST['Register_ID'])&& isset($_POST['address'])&& isset($_POST['contact'])&& isset($_POST['Email'])){
$Name = $_POST['e_name'] . $img;
$url = "assets/empl_image/$Name.jpg";
    $data = array( 
        'e_name' => $_POST['e_name'],
        'e_surname' => $_POST['e_surname'],
        'Gender' => $_POST['Gender'],
        'DOB' => $_POST['DOB'],
        'Age' => $_POST['Age'],
        'Title' => $_POST['Title'],
        'Salary' => $_POST['Salary'] ,
        'Register_ID' => $_POST['Register_ID'],
        'address' => $_POST['address'],
        'contact' => $_POST['contact'],
        'Email' => $_POST['Email'],
        'id_name' => $_POST['id_name'],
        'id_no' => $_POST['id_no'],
        'photo' => $url
        
        );
    # Create a connection
    $url = 'http://yoga.classguru.in/add_employee_api.php';
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
}*/
?>

        <div class="content">
            <div class="container-fluid">
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
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Name <span class="required" style="color:red;"> * </span></label>
                                                <input type="text" class="form-control border-input" placeholder="name" name="" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Contact No. <span class="required" style="color:red;"> * </span></label>
                                                <input type="text" class="form-control border-input" placeholder="Contact No." name="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address <span class="required" style="color:red;"> * </span></label>
                                                <input type="email" class="form-control border-input" placeholder="Email" name="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Gender <span class="required" style="color:red;"> * </span></label>
                                            <div>
                                                <select  class="form-control student_admission border-input"  name="gander" required>
                                                    <option value="">---------------Gender---------------</option>
                                                    <option name="gander" value="female">Female</option>
                                                    <option name="gander" value="male">Male</option>  
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Date of birth <span class="required" style="color:red;"> *   </span></label>
                                            <input type="date" class="form-control border-input datepicker"      name="" required>
                                           </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Anniversary<span class="required" style="color:red;"> * </span></label>
                                                <input type="date" class="form-control border-input datepicker"  name=""  required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Employee ID <span class="required" style="color:red;"> * </span></label>
                                                <input type="text" class="form-control border-input" placeholder="" value="" name="">
                                            </div>
                                        </div>  
                                         <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Date of joining<span class="required" style="color:red;"> * </span></label>
                                                <input type="date" class="form-control border-input datepicker"  name=""  required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Date of registration<span class="required" style="color:red;"> * </span></label>
                                                <input type="date" class="form-control border-input datepicker"  name=""required>
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
                                            <input type="file" class="form-control border-input datepicker"  name=""  accept="image/*" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>ID docs<span class="required" style="color:red;"> * </span></label>
                                                <input type="file" class="form-control border-input datepicker"  name=""  required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Address <span class="required" style="color:red;"> * </span></label>
                                                <textarea rows="5" class="form-control border-input" placeholder="Here can be your description" >
                                                </textarea>
                                            </div>
                                        </div> 
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Comments <span class="required" style="color:red;"> * </span></label>
                                                <textarea rows="5" class="form-control border-input" placeholder="Here can be your description" >
                                                </textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Submit</button>
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
  

    
    