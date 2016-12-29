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

                            <form id="wizard-validation-form" method="POST" >
                                <div>
                                    <h3>Profile</h3>
                                    <section>
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
                                                      <option value="">Select Type</option>
                                                      <option value="Male">Construction</option>
                                                      <option value="Female">Oil & Gas</option>
                                                      <option value="Female">Advertising</option>
                                                      <option value="Female">Real Estate</option>
                                                      <option value="Female">Hospitality</option>
                                                      <option value="Female">Finance</option>
                                                      <option value="Female">Travel</option>
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
                                            <label class="col-sm-2 control-label " for="email"></label>
                                            <div class="col-lg-8">
                                                <input name="email" id="company_email" type="text" class="email form-control" placeholder="Company Email">
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <label class="col-sm-2 control-label " for="address"></label>
                                            <div class="col-lg-8">
                                                <input name="address" id="company_phone" type="text" class="form-control" placeholder="Company Website">
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
                                              <select class="form-control" name="state_of_location" onchange="stateoforigin();" id="state_of_location">
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
