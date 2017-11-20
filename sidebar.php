<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="info">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="dashboard.php" class="simple-text">
                    Yoga Hut
                </a>
            </div>

            <ul class="nav">
<!--
                <li class="active">
                    <a href="dashboard.html">
                        <i class="ti-panel"></i>
                        <p>Home</p>
                    </a>
                </li>
-->
                <li <?php if($page==1) {echo "class='active'" ;} ?>>
                    <a href="clients.php">
                         <i class="fa fa-user-plus" aria-hidden="true"></i>
                        <p>Clients</p>
                    </a>
                </li>
                <li <?php if($page==2) {echo "class='active'";} ?>>
                    <a href="employee.php">
                         <i class="fa fa-users" aria-hidden="true"></i>
                        <p>Employees</p>
                    </a>
                </li>
                <li <?php if($page==3) {echo "class='active'";} ?>>
                    <a href="batches.php">
                          <i class="fa fa-users" aria-hidden="true"></i>
                        <p>Batches</p>
                    </a>
                </li>
                <li <?php if($page==4) {echo "class='active'";} ?>>
                    <a href="packages.php">
                       <i class="fa fa-database" aria-hidden="true"></i>
                        <p>Packages</p>
                    </a>
                </li>
                
                <li <?php if($page==5) {echo "class='active'";} ?> style="margin: 0px 50px 0px 28px;">
                    <i class="fa fa-hand-paper-o" aria-hidden="true"></i><div class="dropdown">
                    <p class="dropdown-toggle" data-toggle="dropdown">Attendance<span  class="caret"> </span></p>
                    <ul class="dropdown-menu">
                        <li <?php if($page==6) {echo "class='active'";} ?>><a href="client_attendance.php"><span style="color:black;">Client Attendance</span></a></li>
                        <li <?php if($page==7) {echo "class='active'";} ?>><a href="employee_attendance.php"><span style="color:black;">Employee Attendance</span></a></li>
                        <li <?php if($page==8) {echo "class='active'";} ?>><a href="trainer_attendance.php"><span style="color:black;">Trainer Attendance</span></a></li>
                    </ul>
                    </div>
                </li>
                <li <?php if($page==9) {echo "class='active'";} ?>>
                    <a href="notifications.php">
                       <i class="fa fa-bell" aria-hidden="true"></i>
                        <p>Notifications</p>
                    </a>
                </li>
				<li <?php if($page==10) {echo "class='active'";} ?>>
                    <a href="accounts.php">
                          <i class="fa fa-inr" aria-hidden="true"></i>
                        <p>Accounts</p>
                    </a>
                </li>
                <li <?php if($page==11) {echo "class='active'";} ?>>
                    <a href="enquiry.php">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        <p>Enquiry</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>
