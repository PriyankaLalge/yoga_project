<?php require_once 'header.php'; ?>
<?php $page=1;require_once 'sidebar.php'; ?>
<?php require_once 'nav.php'; ?>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                       <div class="col-lg-8 col-md-7">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Client</h4>
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
                                                <label>Age<span class="required" style="color:red;"> * </span></label>
                                                <input type="text" class="form-control border-input phoneInput"  name="" value="" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Anniversary<span class="required" style="color:red;"> *   </span></label>
                                            <input type="date" class="form-control border-input"      name="" value="" required>
                                           </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Address <span class="required" style="color:red;"> * </span></label>
                                                <textarea rows="1" class="form-control border-input UserName_field" placeholder="Here can be your description" value="Mike">
                                                </textarea>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Comments<span class="required" style="color:red;"> * </span></label>
                                                <textarea rows="1" class="form-control border-input UserName_field" placeholder="Here can be your description" value="Mike">
                                                </textarea>
                                            </div>
                                        </div> 
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Lead By<span class="required" style="color:red;"> * </span></label>
                                            <div>
                                                <select  class="form-control student_admission border-input"  name="" required>
                                                    <option value="">---------------Select---------------</option>
                                                    <option value="regularcourse">rakesh</option>
                                                    <option value="crashcourse">Mahesh</option>  
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Package Type<span class="required" style="color:red;"> * </span></label>
                                            <div>
                                                <select  class="form-control student_admission border-input"  name="" required>
                                                    <option value="">---------------Select---------------</option>
                                                    <option value="regularcourse">rakesh</option>
                                                    <option value="crashcourse">Mahesh</option>  
                                                </select>
                                            </div>
                                        </div>
                                    </div> 
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Batch Name<span class="required" style="color:red;"> * </span></label>
                                            <div>
                                                <select  class="form-control student_admission border-input"  name="" required>
                                                    <option value="">---------------Select---------------</option>
                                                    <option value="regularcourse">rakesh</option>
                                                    <option value="crashcourse">Mahesh</option>  
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                      <div class="row">
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Start Date <span class="required" style="color:red;"> *   </span></label>
                                            <input type="date" class="form-control border-input datepicker"      name="" value="" required>
                                           </div>
                                        </div>
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label>End Date <span class="required" style="color:red;"> *   </span></label>
                                            <input type="date" class="form-control border-input datepicker"      name="" value="" required>
                                           </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Total Fees <span class="required" style="color:red;"> * </span></label>
                                                <input type="text" class="form-control border-input phoneInput" placeholder="name" name="" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Discount<span class="required" style="color:red;"> * </span></label>
                                                <input type="text" class="form-control border-input phoneInput" placeholder="Contact No." name="" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Recieved<span class="required" style="color:red;"> * </span></label>
                                                <input type="text" class="form-control border-input phoneInput" placeholder="name" name="" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Balance<span class="required" style="color:red;"> * </span></label>
                                                <input type="text" class="form-control border-input phoneInput" placeholder="Contact No." name="" value="">
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
  

    
    