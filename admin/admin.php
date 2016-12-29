<?php include 'header.php'; ?>


        <div class="wrapper">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">


                        <h4 class="page-title">Admin Dashboard</h4>
                        <p class="text-muted page-title-alt">Welcome to NSSS admin panel</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-3">
                        <div class="card-box widget-box-1 bg-white">
                            <i class="fa fa-info-circle text-muted pull-right inform" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Last 24 Hours"></i>
                            <h4 class="text-dark">Total Registered Users</h4>
                            <h2 class="text-primary text-center"><span data-plugin="counterup">5623</span></h2>

                        </div>
                    </div>

                    <!--Data collector modal-->
                    <!-- Modal -->
                    <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">New Data Agent</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="Name" class="control-label">Name</label>
                                                        <input type="text" class="form-control" id="Name" placeholder="Enter First Name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="middlename" class="control-label">Middlename</label>
                                                        <input type="text" class="form-control" id="middlename" placeholder="Enter Middlename">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="surname" class="control-label">Surname</label>
                                                        <input type="text" class="form-control" id="surname" placeholder="Enter Surname">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="email" class="control-label">Email</label>
                                                        <input type="text" class="form-control" id="email" placeholder="Enter email">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="phone" class="control-label">Phone</label>
                                                        <input type="text" class="form-control" id="phone" placeholder="Enter phone number">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="state" class="control-label">State</label>
                                                        <span><select class="form-control" name="state" id="state">
                                                                <option>Rivers</option>
                                                                <option>Bayelsa</option>
                                                                <option>Delta</option>
                                                                <option>Akwa Ibom</option>
                                                                <option>Anambra</option>
                                                                <option>Imo</option>
                                                        </select></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="city" class="control-label">City</label>
                                                        <span><select class="form-control" name="state" id="city">
                                                                <option></option>

                                                        </select></span>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-info waves-effect waves-light" onclick="" id="save-agent">Save Agent</button>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.modal -->

                    <div class="col-md-6 col-sm-6 col-lg-3">
                        <div class="card-box widget-box-1 bg-white">
                            <i class="fa fa-info-circle text-muted pull-right inform" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Last 24 Hours"></i>
                            <h4 class="text-dark">Add Data collector</h4>
                            <button type="button" class="btn btn-default dropdown-toggle waves-effect" data-toggle="modal" data-target="#con-close-modal"  aria-expanded="false">Add<span class="m-l-5"><i class="fa fa-user-plus"></i></span></button>


                        </div>
                    </div>


                    <!-- Data Collector Modal-->
                    <div id="accordion-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content p-0">
                                        <div class="panel-group panel-group-joined" id="accordion-test">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion-test" href="#collapseOne" class="collapsed">
                                                            Port Harcourt Group
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseOne" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                      <div class="row">
                  <div class="col-sm-12">
                      <div class="card-box table-responsive">

                          <h4 class="m-t-0 header-title"><b>Port Harcourt</b></h4>
                          <p class="text-muted font-13 m-b-30">
                              Data Agents
                          </p>

                          <table id="datatable-responsive"
                                 class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
                                 width="100%">
                              <thead>
                              <tr>
                                  <th>First name</th>
                                  <th>Last name</th>
                                  <th>Mobile</th>
                                  <th>Number Registered</th>

                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <td>David</td>
                                  <td>Lawrence</td>
                                  <td>08067083378</td>
                                  <td>20</td>

                              </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>



                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion-test" href="#collapseTwo">
                                                            Obio Akpor Group
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseTwo" class="panel-collapse collapse in">
                                                    <div class="panel-body">
                                                      <div class="row">
                  <div class="col-sm-12">
                      <div class="card-box table-responsive">

                          <h4 class="m-t-0 header-title"><b>Obio Akpor</b></h4>
                          <p class="text-muted font-13 m-b-30">
                              Data Agents
                          </p>

                          <table id="datatable-responsive"
                                 class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
                                 width="100%">
                              <thead>
                              <tr>
                                  <th>First name</th>
                                  <th>Last name</th>
                                  <th>Mobile</th>
                                  <th>Number Registered</th>

                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <td>David</td>
                                  <td>Lawrence</td>
                                  <td>08067083378</td>
                                  <td>20</td>

                              </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div> <!--Table Ends Here-->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion-test" href="#collapseThree" class="collapsed">
                                                            Oyigbo Group
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseThree" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                      <div class="row">
                  <div class="col-sm-12">
                      <div class="card-box table-responsive">

                          <h4 class="m-t-0 header-title"><b>Oyigbo</b></h4>
                          <p class="text-muted font-13 m-b-30">
                              Data Agents
                          </p>

                          <table id="datatable-responsive"
                                 class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
                                 width="100%">
                              <thead>
                              <tr>
                                  <th>First name</th>
                                  <th>Last name</th>
                                  <th>Mobile</th>
                                  <th>Number Registered</th>

                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <td>David</td>
                                  <td>Lawrence</td>
                                  <td>08067083378</td>
                                  <td>20</td>

                              </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->


                    <div class="col-md-6 col-sm-6 col-lg-3">
                        <div class="card-box widget-box-1 bg-white">
                            <i class="fa fa-info-circle text-muted pull-right inform" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Last 24 Hours"></i>
                            <h4 class="text-dark">View Data collectors</h4>
                            <button type="button" class="btn btn-default dropdown-toggle waves-effect" data-toggle="modal" data-target="#accordion-modal"  aria-expanded="false">View<span class="m-l-5"><i class="fa fa-eye"></i></span></button>


                        </div>
                    </div>

                </div>

                <!-- BAR Chart -->



                <div class="row">

                    <div class="col-lg-12">

                        <div class="portlet"><!-- /primary heading -->
                            <div class="portlet-heading">
                                <h3 class="portlet-title text-dark text-uppercase">
                                    Users
                                </h3>
                                <div class="portlet-widgets">
                                    <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                                    <span class="divider"></span>
                                    <a data-toggle="collapse" data-parent="#accordion1" href="#portlet2"><i class="ion-minus-round"></i></a>
                                    <span class="divider"></span>
                                    <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div id="portlet2" class="panel-collapse collapse in">
                                <div class="portlet-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover mails m-0 table table-actions-bar">
                                            <thead>
                                                <tr>
                                                    <th style="min-width: 95px;">
                                                        <div class="checkbox checkbox-primary checkbox-single m-r-15">
                                                            <input id="action-checkbox" type="checkbox">
                                                            <label for="action-checkbox"></label>
                                                        </div>
                                                        <div class="btn-group dropdown">
                                                            <button type="button" class="btn btn-white btn-xs dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false"><i class="caret"></i></button>
                                                            <ul class="dropdown-menu" role="menu">
                                                                <li><a href="#">Action</a></li>
                                                                <li><a href="#">Another action</a></li>
                                                                <li><a href="#">Something else here</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#">Separated link</a></li>
                                                            </ul>
                                                        </div>
                                                    </th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Gender</th>
                                                    <th>Register Date</th>

                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr class="active">
                                                    <td>
                                                        <div class="checkbox checkbox-primary m-r-15">
                                                            <input id="checkbox2" type="checkbox" checked="">
                                                            <label for="checkbox2"></label>
                                                        </div>

                                                        <img src="../assets/images/users/002.jpg" alt="contact-img" title="contact-img" class="img-circle thumb-sm" />
                                                    </td>

                                                    <td>
                                                        Ibiso Egbo
                                                    </td>

                                                    <td>
                                                        <a href="#">styloring@gmail.com</a>
                                                    </td>

                                                    <td>
                                                        <b><a href="#" class="text-dark"><b>Female</b></a> </b>
                                                    </td>

                                                    <td>
                                                        01/11/2003
                                                    </td>
                                                    <td>
                                                        <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                        <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td>
                                                        <div class="checkbox checkbox-primary m-r-15">
                                                            <input id="checkbox6" type="checkbox">
                                                            <label for="checkbox6"></label>
                                                        </div>

                                                        <img src="../assets/images/users/001.jpg" alt="contact-img" title="contact-img" class="img-circle thumb-sm" />
                                                    </td>

                                                    <td>
                                                        David Lawrence
                                                    </td>

                                                    <td>
                                                        <a href="#">tuzzy08@gmail.com</a>
                                                    </td>

                                                    <td>
                                                        <b><a href="#" class="text-dark"><b>Male</b></a> </b>
                                                    </td>

                                                    <td>
                                                        24/11/2003
                                                    </td>
                                                    <td>
                                                        <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                        <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                                    </td>
                                                </tr>


                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->


                </div>

                <!-- end row -->


<?php include "footer.php"; ?>
