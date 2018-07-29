<?php include("../header.php"); ?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3> &nbsp; Add Student</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>
            
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Import a CSV File with Student Data</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <form action="import.php" method="post" class="text-center">
                      <p class="text-center">Upload a CSV files with the correct column headers.</p>
                      <input name="studentscsv" class="mx-auto" type="file"></input>
                      <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                  </div>
                </div>
              </div>
            </div> <!-- //row -->
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Manually Add a Student Health Record</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li class="float-right"><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form action="add.php" method="post" class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">First Name</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input name="firstname" type="text" class="form-control" placeholder="First Name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Middle Name</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input name="middlename" type="text" class="form-control" placeholder="Middle Name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Last Name</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input name="lastname" type="text" class="form-control" placeholder="Last Name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <p></p>
                          <p>Male 
                            <input type="radio" class="flat" name="gender" id="genderM" value="M" checked="" required /> &nbsp; Female
                            <input type="radio" class="flat" name="gender" id="genderF" value="F" />
                          </p>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">Date of Birth</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <div class='input-group date' id='datepicker-birthdate'>
                            <input name="birthdate" type='text' class="form-control" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Age</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input name="age" type="number" class="form-control" placeholder="Age">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nationality</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input name="nationality" type="text" class="form-control" value="Filipino">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tel. No.</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input name="contact_number" type="text" class="form-control" placeholder="Tel. No.">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Address</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input name="address" type="text" class="form-control" placeholder="Address">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                        <div class="col-md-9 col-sm-9 col-xs-12"><small>Parent/Guardian</small></div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Full Name</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input name="guardian_name" type="text" class="form-control" placeholder="Full Name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tel. No.</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input name="guardian_contact_number" type="text" class="form-control" placeholder="Tel. No.">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Address</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input name="guardian_address" type="text" class="form-control" placeholder="Address">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Office Tel. No.</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input name="guardian_office_contact_number" type="text" class="form-control" placeholder="Tel. No.">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Office Address</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input name="guardian_office_address" type="text" class="form-control" placeholder="Address">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                        <div class="col-md-9 col-sm-9 col-xs-12"><small>Alternate person to call in case of emergency</small></div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Full Name</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input name="alternate_guardian_name" type="text" class="form-control" placeholder="Full Name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tel. No.</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input name="alternate_guardian_contact_number" type="text" class="form-control" placeholder="Tel. No.">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                        <div class="col-md-9 col-sm-9 col-xs-12"><small>Elder siblings in school</small></div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Full Name</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input name="elder_sibling_name" type="text" class="form-control" placeholder="Full Name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tel. No.</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input name="elder_sibling_cys" type="text" class="form-control" placeholder="Tel. No.">
                        </div>
                      </div>
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                        <div class="text-right col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <button type="reset" class="btn btn-primary">Reset</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div> <!-- //row -->
            
          </div>
        </div>
        <!-- /page content -->
        
<?php include("../footer.php"); ?>