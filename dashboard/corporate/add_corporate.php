<?php include "header.php";

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
                        <i class="fa fa-user-plus fa-1x"></i><span> <b>Add Company Data</b> </span>

                        <hr>
                        <!-- Form Wizard-->
                        <?php include '../appconfig/insert.php'; ?>

                        <!-- Wizard with Validation -->

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <h4 class="m-t-0 header-title"><b>UPDATE COMPANY PROFILE</b></h4>
                            <p class="text-muted m-b-30 font-13">
                                Update Company Information
                            </p>
                            <p id="result">
                              <p>

                            <form id="wizard-validation-form" method="POST" enctype="multipart/form-data">
                                <div>
                                    <h3>Profile</h3>
                                    <section>
                                      <div class="form-group clearfix">
                                          <label class="control-label col-sm-2 " for="company_contact_person"></label>
                                          <div class="col-lg-6">
                                          <div class="fileupload btn btn-purple waves-effect waves-light">
                                              <span><i class="fa fa-cloud-upload m-r-5"> Upload Logo</i></span>
                                              <input type="file" class="upload" name="logo" id="logo">
                                          </div></div>
                                      </div>
                                        <div class="form-group clearfix">
                                            <label class="control-label col-sm-2 " for="email"></label>
                                            <div class="col-lg-8">
                                                <input name="fname" id="company_name" type="text" class="form-control" placeholder="Company Name">
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 control-label" for="business_type"></label>
                                            <div class="col-sm-8">
                                              <select class="form-control" name="business_type" id="business_type">
                                                      <option value="">Select type of business</option>
                                                      <option value="Construction">Construction</option>
                                                      <option value="Oil and Gas">Oil &amp; Gas</option>
                                                      <option value="Advertising">Advertising</option>
                                                      <option value="Real Estate">Real Estate</option>
                                                      <option value="Hospitality">Hospitality</option>
                                                      <option value="Finance">Finance</option>
                                                      <option value="Travel">Travel</option>
                                              </select>
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <label class="col-sm-2 control-label " for="email"></label>
                                            <div class="col-lg-8 ">
                                                <input  name="lname" id="company_address" type="text" class="form-control" placeholder="Company Address">

                                            </div>
                                        </div>

                                        <div class="form-group clearfix">
                                            <label class="col-sm-2 control-label " for="email"></label>
                                            <div class="col-lg-8">
                                                <input name="mname" id="company_RC_NO" type="text" class="form-control" placeholder="Company RC NO">
                                            </div>
                                        </div>

                                        <div class="form-group clearfix">
                                            <label class="control-label col-lg-2"></label>
                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Date Of Establishment" name="date_of_establishment"  id="date_of_establishment">
                                                    <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
                                                </div><!-- input-group -->
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <label class="col-sm-2 control-label " for="address"></label>
                                            <div class="col-lg-8">
                                              <select class="form-control" name="state_of_location" onchange="stateoforigin();" id="state_of_origin">
                                                      <option value="">Select State of Location</option>
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
                                              <select class="form-control" name="lga_of_location" id="displaylga" >
                                               <!-- id="LGA_of_origin"> -->
                                                      <option  value="">Select LGA</option>
                                              </select>
                                            </div>
                                        </div>
                                    </section>
                                    <h3>Contact</h3>
                                    <section>
                                      <div class="form-group clearfix">
                                          <label class="col-sm-2 control-label " for="company_TIN"></label>
                                          <div class="col-lg-8">
                                              <input name="company_TIN" id="company_TIN" type="text" class="number form-control" placeholder="TIN number" min="5">
                                          </div>
                                      </div>
                                      <div class="form-group clearfix">
                                          <label class="col-sm-2 control-label " for="email"></label>
                                          <div class="col-lg-8">
                                              <input name="email" id="company_email" type="text" class="email form-control" placeholder="Email">
                                          </div>
                                      </div>
                                      <div class="form-group clearfix">
                                          <label class="col-sm-2 control-label " for="website"></label>
                                          <div class="col-lg-8">
                                              <input name="website" id="website" type="text" class="website form-control" placeholder="Website">
                                          </div>
                                      </div>

                                      <div class="form-group clearfix">
                                          <label class="control-label col-sm-2 " for="company_contact_person"></label>
                                          <div class="col-lg-8">
                                              <input name="company_contact_person" id="company_contact_person" type="text" class="form-control" placeholder="Contact Person">
                                          </div>
                                      </div>
                                      <div class="form-group clearfix">
                                          <label class="control-label col-sm-2 " for="company_contact_phone"></label>
                                          <div class="col-lg-8">
                                              <input name="company_contact_phone" id="company_contact_phone" type="text" class="form-control" placeholder="Contact Phone">
                                          </div>
                                      </div>
                                      <div class="form-group clearfix">
                                          <label class="control-label col-sm-2 " for="company_contact_email"></label>
                                          <div class="col-lg-8">
                                              <input name="company_contact_phone" id="company_contact_email" type="text" class="email form-control" placeholder="Contact Email">
                                          </div>
                                      </div>

                                    </section>
                                    <h3>Projects</h3>
                                    <section>
                                      <div class="row">
                                        <div class="form-group clearfix">
                                          <div class="col-sm-2"></div>

                                        <div class="col-sm-2">
                                          <div class="col-sm-6">
                                          <div class="fileupload btn btn-primary waves-effect waves-light">
                                      <span>Select</span>
                                      <input type="file" class="upload" id="sel_file" onchange="displayName()">
                                          </div>
                                        </div>
                                      </div>

                                        <div class="col-sm-4"><label id="name_of_doc" ></label></div>


                                    <div class="col-sm-2">
                                      <div class="fileupload btn btn-purple waves-effect waves-light">
                                        <span><i class="ion-upload m-r-5"></i>Upload</span>
                                        <input type="button" class="upload" id="up_file">
                                      </div>
                                    </div>

                                      </div>
                                      </div>
                                      <!-- End row-->


                                      <!--end label -->
                                      <div class="form-group clearfix">
                                          <label class="control-label col-sm-2 " for="company_contact_person"></label>
                                          <div class="col-lg-8">
                                              <input name="projects" id="projects" type="text" class="form-control" placeholder="Projects Executed">
                                          </div>
                                      </div>
                                      <div class="form-group clearfix">
                                          <label class="control-label col-lg-2"></label>
                                          <div class="col-lg-8">
                                              <div class="input-group">
                                                  <input type="text" class="form-control" placeholder="Date Of Completion" name="date_of_completion"  id="date_of_completion">
                                                  <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
                                              </div><!-- input-group -->
                                          </div>
                                      </div>
                                      <div class="form-group clearfix">
                                          <label class="control-label col-sm-2 " for="remarks"></label>
                                          <div class="col-lg-8">
                                              <input name="remarks" id="remarks" type="text" class="form-control" placeholder="Remarks">
                                          </div>
                                      </div>
                                    <!-- Editable table-->
                                      <div class="panel">

                                          <div class="panel-body">
                                              <div class="row">
                                                  <div class="col-sm-6">
                                                      <div class="m-b-30">
                                                          <a href="javascript:void(0)" id="addToTable" onclick="" class="btn btn-default waves-effect waves-light">Add <i class="fa fa-plus"></i></a>
                                                      </div>
                                                  </div>
                                              </div>

                                              <div id="project_list">
                                                  <table class="table table-striped" id="datatable-editable1">
                                                    <thead>
                                                        <tr>
                                                            <th>S/N</th>
                                                            <th>Project Details</th>
                                                            <th>Completion Date</th>
                                                            <th>Remarks</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="projectadded">

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
                                                  <input type="hidden" name="cid" value="<?php echo $_SESSION['corpid']; ?>" id="cid">
                                                  <label for="acceptTerms-2">I agree with the Terms and Conditions.</label>
                                              </div>
                                          </div>

                                      </section>
                                      </div>




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
<script src="assets/pages/zzcustome.js" type="text/javascript"></script>
