<?php require_once 'header.php'; ?>
<?php $page=2;require_once 'sidebar.php'; ?>
<?php require_once 'nav.php'; ?>

        <div class="content">
            <div class="container-fluid">
<!--
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
                                          <a href="teams.php"><p>Team</p></a> 
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                         <a href="add_team.php"><i class="fa fa-plus" aria-hidden="true"></i>Add new Team</a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
-->
                <div class="row">
                       <div class="col-lg-8 col-md-7">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Employee</h4>
                            </div>
                            <div class="content">
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Name <span class="required" style="color:red;"> * </span></label>
                                                <input type="text" class="form-control border-input surnameInput" placeholder="name" name="" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Contact No. <span class="required" style="color:red;"> * </span></label>
                                                <input type="text" class="form-control border-input phoneInput" placeholder="Contact No." name="" value="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address <span class="required" style="color:red;"> * </span></label>
                                                <input type="email" class="form-control border-input UserName_field" placeholder="Email" name="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Gender <span class="required" style="color:red;"> * </span></label>
                                            <div>
                                                <select  class="form-control student_admission border-input"  name="" required>
                                                    <option value="">---------------Gender---------------</option>
                                                    <option value="regularcourse">Female</option>
                                                    <option value="crashcourse">Male</option>  
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Date of birth <span class="required" style="color:red;"> *   </span></label>
                                            <input type="date" class="form-control border-input"      name="" value="" required>
                                           </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Anniversary<span class="required" style="color:red;"> * </span></label>
                                                <input type="date" class="form-control border-input"  name="" value="" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Employee Id <span class="required" style="color:red;"> * </span></label>
                                                <input type="text" class="form-control border-input phoneInput" placeholder="" value="" name="">
                                            </div>
                                        </div>  
                                         <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Date of joining<span class="required" style="color:red;"> * </span></label>
                                                <input type="date" class="form-control border-input"  name="" value="" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Date of registration<span class="required" style="color:red;"> * </span></label>
                                                <input type="date" class="form-control border-input"  name="" value="" required>
                                            </div>
                                        </div>
                                         <div class="col-md-6">
                                            <div class="form-group">
                                                <label>ID Doc<span class="required" style="color:red;"> * </span></label>
                                                <input type="file" class="form-control border-input"  name="" value="" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Address <span class="required" style="color:red;"> * </span></label>
                                                <textarea rows="2" class="form-control border-input UserName_field" placeholder="Here can be your description" value="Mike">
                                                </textarea>
                                            </div>
                                        </div> 
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Comments <span class="required" style="color:red;"> * </span></label>
                                                <textarea rows="2" class="form-control border-input UserName_field" placeholder="Here can be your description" value="Mike">
                                                </textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Save</button>
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
  

    
    