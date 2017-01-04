<?php include "../header/header.php";

$sql = "SELECT * FROM states ORDER BY name ASC";
$stdata = $nss->select($sql);
?>
        <div class="wrapper">
            <div class="container">

                <!-- Page-Title -->


                <div class="row">
                  <div class="col-md-2"></div>
                    <div class="col-md-8">
                      <div class="row">
                      <div class="card-box">
                        <i class="fa fa-user-plus fa-1x"></i><span> <b>Add Data</b> </span>

                        <hr>
                        <!-- Form Wizard-->


                        <!-- Wizard with Validation -->

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <h4 class="m-t-0 header-title"><b>UPDATE PROFILE</b></h4>
                            <p class="text-muted m-b-30 font-13">
                                Add more details like<code>Education history</code>, <code>Employment History</code>.
                            </p>
                            <p id="result">
                              <p>

                            <form id="wizard-validation-form" method="POST" >
                                <div>
                                    <h3>Profile</h3>
                                    <section>
                                        <div class="form-group clearfix">
                                            <label class="control-label col-sm-2 " for="email"></label>
                                            <div class="col-lg-8">
                                                <input name="fname" id="fname" type="text" class="form-control" placeholder="Firstname">
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <label class="col-sm-2 control-label " for="email"></label>
                                            <div class="col-lg-8 ">
                                                <input  name="lname" id="lname" type="text" class="form-control" placeholder="Lastname">

                                            </div>
                                        </div>

                                        <div class="form-group clearfix">
                                            <label class="col-sm-2 control-label " for="email"></label>
                                            <div class="col-lg-8">
                                                <input name="mname" id="mname" type="text" class="form-control" placeholder="Middle Name">
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <label class="col-sm-2 control-label " for="email"></label>
                                            <div class="col-lg-8">
                                                <input name="email" id="email" type="text" class="email form-control" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <label class="col-sm-2 control-label " for="address"></label>
                                            <div class="col-lg-8">
                                                <input name="address" id="phone" type="text" class="form-control" placeholder="Enter Phone">
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <label class="col-sm-2 control-label " for="address"></label>
                                            <div class="col-lg-8">
                                              <select class="form-control" name="gender" onchange="stateoforigin();" id="state_of_origin">
                                                      <option value="">Select State of origin</option>
                                                      <?php
                                                        if($stdata){
                                                             foreach($stdata as $value){
                                                               echo '<option value="'.$value['state_id'].'">'.$value['name'].'</option>';
                                                             }
                                                        }
                                                      ?>
                                              </select>
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <label class="col-sm-2 control-label " for="address"></label>
                                            <div class="col-lg-8">
                                              <select class="form-control" name="lga_of_origin" id="displaylga" >
                                               <!-- id="LGA_of_origin"> -->
                                                      <option  value="">Select LGA</option>
                                              </select>
                                            </div>
                                        </div>


                                        <div class="form-group clearfix">
                                            <label class="col-sm-2 control-label " for="address"></label>
                                            <div class="col-lg-8">
                                                <input name="address" id="address" type="text" class="form-control" placeholder="Permanent Address">
                                            </div>
                                        </div>
                                    </section>
                                    <!-- Profile Continued-->
                                    <h3>Profile Contd.</h3>
                                    <section>
                                      <div class="form-group clearfix">
                                              <label class="col-sm-2 control-label"></label>
                                              <div class="col-sm-8">
                                                <input type="text" id="nok" class="form-control" placeholder="Next of kin" name="nok" maxlength="50" >
                                                <!--<span class="help-block"><small></small></span>-->
                                              </div>
                                          </div>
                                      <div class="form-group clearfix">
                                          <label class="col-lg-2 control-label" for="gender"></label>
                                          <div class="col-sm-8">
                                            <select class="form-control" name="gender" id="gender">
                                                    <option value="">Select Gender</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                            </select>
                                          </div>
                                      </div>


                                      <div class="form-group clearfix">
                                          <label class="control-label col-lg-2"></label>
                                          <div class="col-lg-8">
                                              <div class="input-group">
                                                  <input type="text" class="form-control" placeholder="Date Of Birth" name="dob"  id="dateofbirth">
                                                  <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
                                              </div><!-- input-group -->
                                          </div>
                                      </div>
                                      <div class="form-group clearfix">
                                          <label class="col-lg-2 control-label " for="marital_status"></label>
                                          <div class="col-sm-8">
                                            <select class="form-control" name="marital_status" id="marital_status">
                                                    <option value="">Marital Status</option>
                                                    <option value="Single">Single</option>
                                                    <option value="Married">Married</option>
                                            </select>
                                          </div>
                                      </div>
                                      <div class="form-group clearfix">
                                          <label class="col-lg-2 control-label " for="address"></label>
                                          <div class="col-lg-8">
                                            <select class="form-control" onchange="stateofresidence();"name="gender" id="state_of_residence">
                                                    <option  value="">Select State of Residence</option>
                                                  <?php
                                                    if($stdata){
                                                         foreach($stdata as $value){
                                                           echo '<option value="'.$value['state_id'].'">'.$value['name'].'</option>';
                                                         }
                                                    }
                                                  ?>
                                            </select>
                                          </div>
                                      </div>

                                      <div class="form-group clearfix">
                                          <label class="col-lg-2 control-label " for="address"></label>
                                          <div class="col-lg-8">
                                            <select class="form-control" name="gender" id="LGA_of_residence">
                                                    <option  value="">Select LGA</option>


                                            </select>
                                          </div>
                                      </div>

                                      <div class="form-group clearfix">
                                          <label class="col-lg-2 control-label " for="address"></label>
                                          <div class="col-lg-8">
                                              <input name="address" id="permananet_address" type="text" class="form-control" placeholder="Residential Address">
                                          </div>
                                      </div>



                                    <div class="form-group clearfix">
                                      <label class="control-label col-lg-2" for="nos"></label>
                                        <div class="col-lg-8">
                                            <input id="id_no" name="id_no" type="text" class="form-control" placeholder="Enter ID No.">
                                            <small class="text-muted">Government issued ID's only, ex. Drivers License, International Passport, Voters Card, National ID Card.
                                                    </small>
                                        </div>
                                    </div>
                                    </section>

                                    <!--Education Secion-->
                                    <h3>Education</h3>
                                    <section>

                                      <div class="form-group clearfix">
                                        <label class="control-label col-lg-2" for="nos"></label>
                                          <div class="col-lg-8">
                                              <input id="nos" name="nos" type="text" class="form-control" placeholder="Enter Institution">
                                          </div>
                                      </div>
                                      <div class="form-group clearfix">
                                          <label class="control-label col-lg-2"></label>
                                          <div class="col-lg-8">
                                              <div class="input-group">
                                                  <input type="text" class="form-control" placeholder="Date started" name="sch_start"  id="sch_start_date">
                                                  <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
                                              </div><!-- input-group -->
                                          </div>
                                      </div>

                                        <div class="form-group clearfix">
                                              <label class="control-label col-lg-2"></label>
                                              <div class="col-lg-8">
                                                  <div class="input-group">
                                                      <input type="text" class="form-control" placeholder="Date completed" name="sch_end" id="sch_end_date">
                                                      <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
                                                  </div><!-- input-group -->
                                              </div>
                                          </div>

                                          <div class="form-group clearfix">
                                              <label class="col-lg-2 control-label" for="gender">Education Type</label>
                                              <div class="col-lg-8">
                                                <select class="form-control" name="gender" id="edutype">
                                                        <option value=""></option>
                                                        <option value="O-Level">O-Level</option>
                                                        <option value="Undergraduate">Undergraduate</option>
                                                        <option value="PostGraduate">PostGraduate</option>
                                                </select>
                                              </div>
                                          </div>
                                        <div class="form-group clearfix">
                                          <label class="col-lg-2 control-label" for="gender">Qualification Obtained</label>
                                          <div class="col-lg-8">
                                            <span><select class="form-control" name="gender" id="qualification">
                                                    <option value=""></option>
                                                    <option value="WAEC">WAEC</option>
                                                    <option value="NECO">NECO</option>
                                                    <option value="G.C.E">G.C.E</option>
                                                    <option value="Bachelors">Bachelors</option>
                                                    <option value="Masters">Masters</option>
                                                    <option value="PHD">PHD</option>
                                                    <option value="Others">Others</option>
                                            </select></span>
                                          </div>
                                      </div>


                                      <!-- Editable table-->
                                      <div class="panel">

                                          <div class="panel-body">
                                              <div class="row">
                                                  <div class="col-sm-6">
                                                      <div class="m-b-30">
                                                          <a href="javascript:void(0)" id="addToTable" onclick="addeducation();" class="btn btn-default waves-effect waves-light">Add <i class="fa fa-plus"></i></a>
                                                      </div>
                                                  </div>
                                              </div>

                                              <div id="emp_table">
                                                  <table class="table table-striped" id="datatable-editable1">
                                                    <thead>
                                                        <tr>
                                                            <th>Name Of Institue</th>
                                                            <th>Start Date</th>
                                                            <th>End Date</th>
                                                            <th>Qualification Obtained</th>
                                                            <th>Education Type</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="eduresult">

                                                    </tbody>
                                                  </table>
                                              </div>
                                          </div>
                                          <!-- end: page -->

                                      </div> <!-- end Panel -->
                                    </section>
                                    <h3>Employment</h3>
                                    <section>
                                      <div class="form-group clearfix">

                                          <label class="col-lg-2 control-label" for="employer"></label>
                                          <div class="col-lg-8">
                                              <input id="employer" name="employer" type="text" class="form-control" placeholder="Employer">
                                          </div>
                                      </div>
                                      <div class="form-group clearfix">
                                                    <label class="control-label col-lg-2">Start Date</label>
                                                    <div class="col-lg-8">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="mm/dd/yyyy" name="job_start" id="job_start_date">
                                                            <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
                                                        </div><!-- input-group -->
                                                    </div>
                                                </div>

                                                <div class="form-group clearfix">
                                                              <label class="control-label col-lg-2">End Date</label>
                                                              <div class="col-lg-8">
                                                                  <div class="input-group">
                                                                      <input type="text" class="form-control" placeholder="mm/dd/yyyy" name="job_end" id="job_end_date">
                                                                      <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
                                                                  </div><!-- input-group -->
                                                              </div>
                                                          </div>


                                                          <div class="form-group clearfix">

                                                              <label class="col-lg-2 control-label" for="position"></label>
                                                              <div class="col-lg-8">
                                                                  <input id="position" name="position" type="text" class="form-control" placeholder="Position Held">
                                                              </div>
                                                          </div>

                                                          <!-- Editable table-->
                                                          <div class="panel">

                                                              <div class="panel-body">
                                                                  <div class="row">
                                                                      <div class="col-sm-6">
                                                                          <div class="m-b-30">
                                                                              <a href="javascript:void(0)" id="addToTable" onclick="employment();" class="btn btn-default waves-effect waves-light">Add <i class="fa fa-plus"></i></a>
                                                                          </div>
                                                                      </div>
                                                                  </div>

                                                                  <div class="">
                                                                      <table class="table table-striped" id="datatable-editable2">
                                                                          <thead>
                                                                              <tr>
                                                                                  <th>Name Of Employer</th>
                                                                                  <th>Start Date</th>
                                                                                  <th>End Date</th>
                                                                                  <th>Position Held</th>
                                                                              </tr>
                                                                          </thead>
                                                                          <tbody id="empresult">
                                                                          </tbody>
                                                                      </table>
                                                                  </div>
                                                              </div>
                                                              <!-- end: page -->

                                                          </div> <!-- end Panel -->
                                    </section>
                                    <h3>Conclusion</h3>
                                    <section>
                                        <div class="form-group clearfix">
                                            <div class="col-lg-12">
                                                <input id="acceptTerms-2" name="acceptTerms2" type="checkbox" class="required">
                                                <input type="hidden" name="uid" value="<?php echo $_SESSION['userid']; ?>" id="uid">
                                                <label for="acceptTerms-2">I agree with the Terms and Conditions.</label>
                                            </div>
                                        </div>

                                    </section>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End row -->







                            <!-- End Form Wizard -->




                            </div>




                          </div>

                        </div>

                      </div>


<?php include 'footer.php'; ?>
<!--Form Wizard Custom script -->
<script src="../assets/pages/zcustome.js" type="text/javascript"></script>
