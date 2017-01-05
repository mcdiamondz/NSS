<?php
include 'header.php';
include '../../include/selectcorporate.php';
include '../../include/selectcorproject.php';
?>


        <div class="wrapper">
            <div class="container">

                <!-- Page-Title -->

                    <div class="row">
                        <div class="col-md-2 col-lg-2">
                            <div class="profile-detail card-box">
                                <div>
                                    <img src="../assets/images/users/002.jpg" class="img-thumbnail" alt="profile-image">
                                    <hr>
                                    <h4 class="capitalize font-600">Company Name</h4>
                                    <div class="fileupload btn btn-purple waves-effect waves-light">
                                        <span><i class="fa fa-camera-retro m-r-5" ></i>Change Picture</span>
                                        <input type="file" class="upload" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top">
                                    </div>
                                  <!--  <button class="btn btn-default waves-effect waves-light"> <i class="fa fa-camera-retro m-r-5"></i> <span>Change Picture</span> </button>-->
                                </div>

                            </div>




                        </div>
                        <div class="col-lg-4">
                          <div class="panel panel-border panel-inverse">
                              <div class="panel-heading">
                                  <h3 class="panel-title">Company Profile</h3>
                              </div>
                              <div class="panel-body">
                                <table>
                                  <tbody>
                                    <tr>
                                      <td><b>Company Name:</strong></b></td>
                                      <td> <?php echo isset($orgname)?$orgname:''; ?></td>
                                    </tr>
                                    <tr>
                                      <td><b>Address:</b></td>
                                      <td> <?php echo isset($address)?$address:''; ?></td>
                                    </tr>

                                    <tr>
                                      <td><b>Industry:</b></td>
                                      <td> <?php echo isset($biztype)?$biztype:''; ?></td>
                                    </tr>
                                    <tr>
                                      <td><b>Email:</b></td>
                                      <td> <?php echo isset($email)?$email:''; ?></td>
                                    </tr>
                                    <tr>
                                      <td><b>Website:</b></td>
                                      <td> <?php echo isset($website)?$website:''; ?></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                          </div>

                        </div>

                        <div class="col-lg-4">
                          <div class="panel panel-border panel-purple">
                              <div class="panel-heading">
                                  <h3 class="panel-title">Registration Details</h3>
                              </div>
                              <div class="panel-body">
                                  <p>
                                      <table>
                                        <tbody>
                                          <tr>
                                            <td><b>RC Number:</b></td>
                                            <td> <?php echo isset($rcnum)?$rcnum:''; ?></td>
                                          </tr>
                                          <tr>
                                            <td><b>TIN Number:</b></td>
                                            <td> <?php echo isset($tinum)?$tinum:''; ?></td>
                                          </tr>
                                          <tr>
                                            <td><b>Year of Esterblishment:</b></td>
                                            <td> <?php echo isset($yrofest)?$yrofest:''; ?></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                  </p>
                              </div>
                          </div>

                        </div>


                </div>

                      <!-- Second Data Box-->

                      <div class="row">
                          <div class="col-lg-2"></div>
                              <div class="col-lg-10">

                                <div class="col-lg-4">
                                  <div class="panel panel-border panel-success">
                                      <div class="panel-heading">
                                          <h3 class="panel-title">Company Contact Info</h3>
                                      </div>
                                      <div class="panel-body">
                                        <table>
                                          <tbody>
                                            <tr>
                                              <td><b>Contact Person:</b></td>
                                              <td> <?php echo isset($contname)?$contname:''; ?></td>
                                            </tr>
                                            <tr>
                                              <td><b>Phone Number:</b></td>
                                              <td> <?php echo isset($contphone)?$contphone:''; ?></td>
                                            </tr>
                                            <tr>
                                              <td><b>Email Address:</b></td>
                                              <td> <?php echo isset($contemail)?$contemail:''; ?></td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </div>
                                  </div>
                                </div>
                                <div class="col-lg-4">
                                <div class="panel panel-color panel-primary">
                                 <!-- Default panel contents -->
                                 <div class="panel-heading">
                                     <h3 class="panel-title">Projects </h3>
                                 </div>
                                 <div class="panel-body">
                                     <p>
                                         List of projects executed, duration, remarks etc.
                                     </p>
                                 </div>

                                 <!-- Table -->
                                 <table class="table">
                                     <thead>
                                         <tr>
                                             <th>#</th>
                                             <th>Project</th>
                                             <th>Completion Date</th>
                                             <th>Location</th>
                                             <th>Remarks</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                       <?php
                                         if($prodata){
                                           foreach($prodata as $value){
                                             $projectname = $value['ProjectName'];
                                             $extdate = $value['ExecutionDate'];
                                             $remark = $value['Remark'];
                                               echo "<tr>";
                                               echo    "<td>$projectname</td>";
                                               echo    "<td>$extdate</td>";
                                               echo    "<td>$remark</td>";
                                               echo "</tr>";
                                             }
                                           }
                                       ?>
                                     </tbody>
                                 </table>
                                </div>


                                </div>





                              </div>


                      </div>




<?php include 'footer.php'; ?>
