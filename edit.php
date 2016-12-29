<?php include 'includes/header.php';?>
        <!-- End Navigation Bar-->


        <div class="wrapper">
            <div class="container">

                <!-- Page-Title -->


                    <div class="row">
                        <div class="col-md-4 col-lg-3">
                            <div class="profile-detail card-box">
                                <div>
                                    <img src="assets/images/users/avatar-2.jpg" class="img-thumbnail" alt="profile-image">





                                    <hr>
                                    <h4 class="text-uppercase font-600">I'm Social</h4>

                                    <div class="button-list m-t-20">
                                        <button type="button" class="btn btn-facebook waves-effect waves-light">
                                           <i class="fa fa-facebook"></i>
                                        </button>

                                        <button type="button" class="btn btn-twitter waves-effect waves-light">
                                           <i class="fa fa-twitter"></i>
                                        </button>

                                        <button type="button" class="btn btn-linkedin waves-effect waves-light">
                                           <i class="fa fa-linkedin"></i>
                                        </button>

                                        <hr>

                                    </div>
                                </div>

                            </div>


                        </div>


                        <div class="col-lg-9 col-md-8">
                          <div class="row">
                          <div class="card-box text-uppercase">
                            <i class="fa fa-edit fa-2x fa-border"></i><span><b>Edit My Data</b></span>
                            <hr>
                            <!-- Editable Form-->
                            <form action="#" class="form-horizontal editor-horizontal">
                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Simple Text Field</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="username" data-type="text" data-pk="1" data-title="Enter username">superuser</a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Empty text field, required</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Enter your firstname"></a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Select, local array, custom display</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="sex" data-type="select" data-pk="1" data-value="" data-title="Select sex"></a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Select, error while loading</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="status" data-type="select" data-pk="1" data-value="0" data-source="/status" data-title="Select status">Active</a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Combodate</label>
                                            <div class="col-sm-7">
                                                <a href="#" id="dob" data-type="combodate" data-value="1984-05-15" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1"  data-title="Select Date of birth"></a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Textarea, buttons below. Submit by <i>ctrl+enter</i></label>
                                            <div class="col-sm-7">
                                                <a href="#" id="comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">awesome user!</a>
                                            </div>
                                        </div>
                                    </form>
                            </div>

                          </div>

                        </div>

                      </div>


                      <!-- Second Data Box-->




                <!-- Footer -->
                <?php include 'includes/footer.php';?>
