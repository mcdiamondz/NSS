<?php
include 'header.php';
include '../include/selectuserdata.php';
include '../include/selectusereducation.php';
include '../include/selectuseremp.php';
?>


        <div class="wrapper">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="btn-group pull-right m-t-15">
                            <button type="button" class="btn btn-default waves-effect waves-light" onclick="window.location='edit.html';">Edit<span class="m-l-5"><i class="fa fa-edit"></i></span></button>
<!--
                            <ul class="dropdown-menu drop-menu-right" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul> -->
                        </div>
                        <hr>

                        <ol class="breadcrumb"><!--
                            <li><a href="#">Ubold</a></li>
                            <li><a href="#">Extras</a></li>
                            <li class="active">Profile</li>-->
                        </ol>
                    </div>
                </div>

                    <div class="row">
                        <div class="col-md-4 col-lg-3">
                            <div class="profile-detail card-box">
                                <div>
                                    <img src="../assets/images/users/002.jpg" class="img-thumbnail" alt="profile-image">





                                    <hr>
                                    <h4 class="capitalize font-600">First & last Name</h4>
                                    <div class="fileupload btn btn-purple waves-effect waves-light">
                                        <span><i class="fa fa-camera-retro m-r-5"></i>Change Picture</span>
                                        <input type="file" class="upload">
                                    </div>
                                  <!--  <button class="btn btn-default waves-effect waves-light"> <i class="fa fa-camera-retro m-r-5"></i> <span>Change Picture</span> </button>-->
                                </div>

                            </div>


                        </div>


                        <div class="col-lg-9 col-md-8">

                            <div class="row">

                              <div class="col-md-6 card-box text-capitalize">

                                <i class="fa fa-male fa-1x "></i><span class="text-capitalize"><b> Personal Details</b></span>
                                <hr>

                                <table>
                                  <tbody>
                                    <tr>
                                      <td><b>First Name:</strong></b></td>
                                      <td> <?php echo $firstname; ?></td>
                                    </tr>
                                    <tr>
                                      <td><b>Middle Name:</b></td>
                                      <td> <?php echo $middlename; ?></td>
                                    </tr>
                                    <tr>
                                      <td><b>Last Name:</b></td>
                                      <td> <?php echo $lastname; ?></td>
                                    </tr>
                                    <tr>
                                      <td><b>Gender:</b></td>
                                      <td> <?php echo $gender; ?></td>
                                    </tr>
                                    <tr>
                                      <td><b>Date Of Birth:</b></td>
                                      <td> <?php echo $dob; ?></td>
                                    </tr>
                                    <tr>
                                      <td><b>Email:</b></td>
                                      <td> <?php echo $email; ?></td>
                                    </tr>
                                    <tr>
                                      <td><b>Phone:</b></td>
                                      <td> <?php echo $phone; ?></td>
                                    </tr>
                                  </tbody>
                                </table>
                                <!--
                                <p>First Name: Mcdiamond Ibifa
                                <p>Middle Name:
                                <p>Last Name:
                                <p>Gender:-->
                            </div>

                            <div class="col-md-6">
                            <div class="card-box capitalize">
                              <h5><b>Cont'd</b></h5>
                              <hr>
                              <table>
                                <tbody>
                                  <tr>
                                    <td><b>Marital Status</b></td>
                                    <td> <?php echo $mstatus; ?></td>
                                  </tr>
                                  <tr>
                                    <td><b>Residential Address</b></td>
                                    <td> <?php echo $raddress; ?></td>
                                  </tr>
                                  <tr>
                                    <td><b>State Of Residence</b></td>
                                    <td> <?php echo $rstate; ?></td>
                                  </tr>
                                  <tr>
                                    <td><b>LGA Of Residence</b></td>
                                    <td> <?php echo $rlga; ?></td>
                                  </tr>
                                  <tr>
                                    <td><b>Permanent Address</b></td>
                                    <td> <?php echo $paddress; ?></td>
                                  </tr>
                                  <tr>
                                    <td><b>State of Permanent Address</b></td>
                                    <td> <?php echo $pstate; ?></td>
                                  </tr>
                                  <tr>
                                    <td><b>LGA of Permanent Address</b></td>
                                    <td> <?php echo $plga; ?></td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          </div>
                        </div>
                        <div class="col-lg-9 col-md-8">
                          <div class="row">
                          <div class="card-box capitalize">
                            <i class="fa fa-graduation-cap fa-1x"></i><span><b> Education History</b></span>
                            <hr>
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
                              <tbody>
                                <?php
                                  if($edudata){
                                    foreach($edudata as $value){
                                      $educationtype = $value['EducationType'];
                                      $qualiobtained = $value['QualificationObtained'];
                                      $institution = $value['Institution'];
                                      $statedate = $value['StartDate'];
                                      $enddate = $value['EndDate'];
                                        echo "<tr>";
                                        echo    "<td>$institution</td>";
                                        echo    "<td>$statedate</td>";
                                        echo    "<td>$enddate</td>";
                                        echo    "<td>$qualiobtained</td>";
                                        echo    "<td>$educationtype</td>";
                                        echo "</tr>";
                                      }
                                    }
                                ?>
                              </tbody>
                            </table>

                            </div>
                            <div class="card-box capitalize">
                              <i class="fa fa-briefcase fa-1x"></i> <span><b>Employment History</b></span>
                              <hr>
                              <table class="table table-striped" id="datatable-editable1">
                                <thead>
                                    <tr>
                                        <th>Name Of Employer</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Position</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                    if($empdata){
                                      foreach($empdata as $value){
                                        $employer = $value['Employer'];
                                        $position = $value['Position'];
                                        $stdate = $value['StartDate'];
                                        $endate = $value['EndDate'];
                                          echo "<tr>";
                                          echo    "<td>$employer</td>";
                                          echo    "<td>$stdate</td>";
                                          echo    "<td>$endate</td>";
                                          echo    "<td>$position</td>";
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


                      <!-- Second Data Box-->



                        <div class="row">
                          <div class="col-md-4"></div>
                          <div class="col-md-6 card-box">
                          Test
                        </div>
                      </div>

<?php include 'footer.php'; ?>
