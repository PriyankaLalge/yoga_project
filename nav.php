<div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
<!--                    <a class="navbar-brand" href="#">Dashboard</a>-->
                    <?php if($nav==0):?>
                            <a class="navbar-brand" href="#"><?php echo "Dashboard"; ?></a>
					    <?php endif;?>
                        <?php if($nav==1):?>
                            <a class="navbar-brand" href="#"><?php echo "Clients"; ?></a>
					    <?php endif;?>
                        <?php if($nav==2):?>
                            <a class="navbar-brand" href="#"><?php echo "Employees"; ?></a>
					    <?php endif;?>
                        <?php if($nav==3):?>
                            <a class="navbar-brand" href="#"><?php echo "Batches"; ?></a>
					    <?php endif;?>
                        <?php if($nav==4):?>
                            <a class="navbar-brand" href="#"><?php echo "Packages"; ?></a>
					    <?php endif;?>
                        <?php if($nav==5):?>
                            <a class="navbar-brand" href="#"><?php echo "Attendance"; ?></a>
					    <?php endif;?>
                        <?php if($nav==6):?>
                            <a class="navbar-brand" href="#"><?php echo "Client Attendance"; ?></a>
					    <?php endif;?>
                        <?php if($nav==7):?>
                            <a class="navbar-brand" href="#"><?php echo "Employee Attendance"; ?></a>
					    <?php endif;?>
                        
                        <?php if($nav==8):?>
                            <a class="navbar-brand" href="#"><?php echo "Trainer Attendance"; ?></a>
					    <?php endif;?>
                        <?php if($nav==9):?>
                            <a class="navbar-brand" href="#"><?php echo "Notifications"; ?></a>
					    <?php endif;?>
                        <?php if($nav==10):?>
                            <a class="navbar-brand" href="#"><?php echo "Accounts"; ?></a>
					    <?php endif;?>
                        <?php if($nav==11):?>
                            <a class="navbar-brand" href="#"><?php echo "Enquiry"; ?></a>
					    <?php endif;?>
                   
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-bell"></i>
                                    <p class="notification">5</p>
									<p>Notifications</p>
									<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li> 
                        
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                  <i class="fa fa-user" aria-hidden="true"></i>
									<p>Profile</p>
									<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Username</a></li>
                                <li><a href="#">Sign Out</a></li>
                                
                              </ul>
                        </li>
<!--
						<li>
                            <a href="#">
								<i class="ti-settings"></i>
								<p>Settings</p>
                            </a>
                        </li>
-->
                    </ul>

                </div>
            </div>
        </nav>