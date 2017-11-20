<?php
// Start the session
session_start();
 
?>

<?php
if(isset($_POST['login'])&&!empty($_POST['username'])&&!empty($_POST['password'])){
    include 'config.php';
    $username = $_POST['username']; 
    $password = $_POST['password'];
    $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password' ";
    $result=mysqli_query($conn,$sql);
    $row = $result->fetch_assoc();
    
    $_SESSION["username"] = $username;
    $_SESSION["password"] = $password;
    $_SESSION["permission"] = $row['permission'];
}
    if(isset($_POST['login'])&&!empty($_POST['username'])&&!empty($_POST['password'])){
$username = $_POST['username'];
$password = $_POST['password'];
$data = array(
    'username' => $_POST['username'],
    'password' => $_POST['password'],
);  
# Create a connection
$url = 'http://localhost/yoga_project/select_user_api.php';
$ch = curl_init($url);
# Form data string
$postString = http_build_query($data, '', '&');
# Setting our options
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postString);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
# Get the response
$response = curl_exec($ch);

if($response === "Notadmin"){
    
    echo "<script>alert('Not Valid Username or Password')</script>";
}
        else {
            echo "<script>debugger;window.location = 'dashboard.php';</script>";
        }
curl_close($ch);
    }
?>

<?php include "header.php" ?>
<body><br><br>
    <div class="col-sm-4 col-sm-offset-4">
        <center>
            <h1 style="color:#4d1b62">Yoga</h1>
<!--                <img src="'assets/img/logo.png'?>" >-->
           <!--<h1><b style="color: #68B3C8;">Digital Education</b></h1>-->
        </center>
    </div>
    <div class="col-sm-4 col-sm-offset-4" align="center" style="margin-top: 20px;">
        <div class="card">
            <div class="header" style="border:2px solid white; background:#4d1b62; border-radius:20px; padding: 10px">
                <h4 class="title" style="color:white; font-weight:800" >Sign-In</h4>
            </div>
            <form action="login.php" method="post">
            <div class="content" padding-left="10px" >
                <div class="row" >                        
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control border-input" placeholder="Username" name="username" value="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control border-input" placeholder="password" name="password" value="">
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button style=" border:2px solid white; background:#4d1b62;" type="submit" class="btn btn-info btn-fill btn-wd" name="login">LogIn</button>
                </div>
                <div class="clearfix"></div>
            </div>
            </form>
        </div>
        <?php include "footer.php"?>
    </div>
</body>