<?php include 'include/header.php'; ?>
			<div class="header_mobile">
				<div class="content_wrap">
					<div class="menu_button icon-menu"></div>
					<div class="logo">
						<a href="index.php"><img src="images/logo-header.png" class="logo_main" alt="" width="246" height="52"></a>					</div>
				</div>
				<div class="side_wrap">
					<div class="close">Close</div>
					<div class="panel_top">
						<nav class="menu_main_nav_area">
							<ul id="menu_mobile" class="menu_main_nav">
								<li class="menu-item  current-menu-item current-menu-ancestor current-menu-parent menu-item-has-children"><a href="index.php"><span>Home</span></a>								</li>
								<li class="menu-item menu-item-has-children"><a href="#"><span>About NSS</span></a>
									<ul class="sub-menu">
										<li class="menu-item"><a href="overview.php"><span>Overview</span></a></li>
										<li class="menu-item"><a href="benefits.php"><span>Benefits</span></a></li>
									</ul>
								</li>

								<li class="menu-item menu-item-has-children"><a href="#"><span>Enrollment</span></a>
									<ul class="sub-menu">
										<li class="menu-item"><a href="requirement.php"><span>Requirement</span></a></li>
										<li class="menu-item"><a href="getenrolled.php"><span>Get Enrolled</span></a></li>
										<li class="menu-item"><a href="eligibility.php"><span>Eligibility</span></a></li>
									</ul>
								</li>

								<li class="menu-item "><a href="contacts.php"><span>Contacts</span></a></li>
							</ul>
						</nav>
					</div>

					<div class="panel_middle">
						<div class="contact_field contact_address">
							<span class="contact_icon icon-home"></span>
							<span class="contact_label contact_address_1">NSS Towers</span>
							<span class="contact_address_2">NIgeria</span>						</div>
						<div class="contact_field contact_phone">
							<span class="contact_icon icon-phone"></span>
							<span class="contact_label contact_phone">09036267513</span>
							<span class="contact_email">info@nss.com</span>						</div>


						<div class="top_panel_top_user_area">
							<ul id="menu_user_mobile" class="menu_user_nav">
							</ul>
						</div>
					</div>

					<div class="panel_bottom">					</div>
				</div>
				<div class="mask"></div>
			</div>
			<div class="top_panel_title top_panel_style_1  title_present breadcrumbs_present scheme_original">
				<div class="top_panel_title_inner top_panel_inner_style_1  title_present_inner breadcrumbs_present_inner">				</div>
			</div>

			<div class="page_content_wrap page_paddings_yes">


				<div class="content_wrap">
					<div class="content">
						<div class="itemscope post-33 page hentry" itemscope itemtype="http://schema.org/Article">
							<div class="post_content" itemprop="articleBody">
								<div class="full-width">
									<div class="column">
										<div class="main-block">
											<div class="wrapper">
												<div class="h40"></div>
												<div class="columns_wrap sc_columns columns_nofluid sc_columns_count_2">
													<div class="column-1_2 sc_column_item sc_column_item_1 odd first">
													  <div class="wrapper-page">
													  <?php include 'appconfig/insert.php'; ?>
                                                        <div class=" card-box">
                                                          <div class="panel-heading">
                                                            <h3 class="text-center"> Sign Up to <strong class="text-custom">NSS</strong> </h3>
                                                          </div>
                                                          <div class="panel-body">
                                                            <form class="form-horizontal m-t-20" action="" method="post">
																															<div class="form-group">
                                                                <div class="style2 col-xs-3">

																																</div>
                                                                <div class="style2 col-xs-4">
																																	<label for="Individual">Individual</label>
                                                                	<input name="cat" checked type="radio" id="Individual" value="individual" />
																																</div>
																																<div class="style2 col-xs-4">
																																	<label for="Corporate">Corporate</label>
															  																	<input name="cat" type="radio" id="Corporate" value="corporate" />
																																</div>
                                                              </div>
                                                              <div class="form-group ">
                                                                <div class="col-xs-12">
                                                                  <input name="email" type="email" class="email form-control" value="<?php echo isset($_POST['email'])?$_POST['email']:''; ?>" placeholder="Email" autocomplete="off" required>
                                                                </div>
                                                              </div>
                                                              <div class="form-group ">
                                                                <div class="col-xs-12">
                                                                  <input name="password" type="password" class="form-control" required placeholder="Password" autocomplete="off">
                                                                </div>
                                                              </div>
                                                              <div class="form-group">
                                                                <div class="col-xs-12">
                                                                  <input name="confirm_password" type="password" class="form-control" required placeholder="Confirm Password" autocomplete="off">
                                                                </div>
                                                              </div>
                                                              <div class="form-group">
                                                                <div class="col-xs-12">
                                                                  <div class="checkbox checkbox-primary">
                                                                    <input  name="tandc" type="checkbox" id="checkbox-signup" checked="checked">
                                                                    <label for="checkbox-signup">I accept <a href="#">Terms and Conditions</a></label>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                              <div class="form-group text-center m-t-40">
                                                                <div class="col-xs-12">
																																	<button class="btn btn-pink btn-block text-uppercase waves-effect waves-light" name="register" type="submit"> Register </button>
																																	<input type="hidden" name="formname" value="signup" />
                                                                </div>
                                                              </div>
                                                              <div class="form-group m-t-20 m-b-0"></div>
                                                              <div class="form-group m-b-0 text-center"></div>
                                                            </form>
                                                          </div>
                                                        </div>
													    <div class="row">
                                                          <div class="col-sm-12 text-center">
                                                            <p> Already have account?<a href="login.php" class="text-primary m-l-5"><b>Sign In</b></a> </p>
                                                          </div>
												        </div>
												      </div>
													</div>
													<div class="column-1_2 sc_column_item sc_column_item_2 even">
														<div class="sc_section sc_section_block margin_bottom_huge aligncenter">
															<div class="sc_section_inner">
																<div class="sc_section_content_wrap">
																	<div id="sc_call_to_action_1852270381" class="sc_call_to_action sc_call_to_action_style_1 sc_call_to_action_align_center" >
																		<div class="sc_call_to_action_info">
																			<h6 class="sc_call_to_action_subtitle sc_item_subtitle">Terms &amp; Condition</h6>
																			<div class="sc_call_to_action_descr sc_item_descr">
																			  <div>
                                                                                <div>
																																								</div>
                                                                                    <div>

																		  <div align="left">
																		  <div align="justify"><span class="style1">Welcome to Nigeria Social Security Scheme. <br>
																				      The use of this website/application is subject to the following terms and conditions. Please read carefully before using the website. Your success to and use of the service is conditioned on your acceptance of the compliance with these terms:</span>
                                                                                        <ul>
	<p>
                                                                                        <li>
     <div align="justify">You will only access NSSS site/ application by becoming a registered member and creating an account with us. You agree to be responsible for maintaining the confidentiality of your password and all activities that occur under your account.</div>
   </li>
<li>
  <div>You will not provide any false personal information on NSSS page.</div>
</li>
<li>
  <div>You will not create an account for anyone other than yourself without permission.</div>
</li>
<li>
  <div>You will not create more than one personal account</div>
</li>
<li>
  <div>We reserve the right at our sole discretion to modify or replace these terms at any time. If a revision is material, we will try to at least provide 7days notice prior to any new terms taking effect.</div>
</li>
</p>
<div>
 <div align="justify"><strong>If you have any question about these terms and conditions, please contact us.</strong></div>
                                                                                   <div>                                                                                    </div>
                                                                                  </div>
                                                                                <div class="h15"></div>
																	<figure class="sc_image  sc_image_shape_square"><img src="images/team_img4.png" alt="" /></figure>
												<div class="h30"></div>
											    <div class="related_wrap related_wrap_empty"></div>
					</div>
					<!-- </div> class="content"> -->
				</div>
				<!-- </div> class="content_wrap"> -->
			</div>
			<!-- </.page_content_wrap> -->
<!-- </.page_content_wrap> -->

<?php include 'include/footer.php'; ?>
