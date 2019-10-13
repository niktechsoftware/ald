<!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row mt-sm-4">
              <div class="col-12 col-md-12 col-lg-4">
                <div class="card author-box">
                  <div class="card-body">
                    <div class="author-box-center">
					<?php if(strlen($crecord->row()->photo > 0)):?>
													<img alt="" height="128" width="138" src="/images/customerImage/<?php echo $crecord->row()->photo;?>" />
												<?php else:?>
													<img alt="" width="128" src="assets/img/users/user-1.png" />	
												<?php endif;?>
                      <div class="clearfix"></div>
                      <div class="author-box-name">
                        <a href="#"><?php echo $this->session->userdata("name");?></a>
                      </div>
					  <div class="author-box-job">User Id:<?php echo $this->session->userdata("customer_username");?></div>
                    </div>
                    
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <h4>Bank Details</h4>
                  </div>
                  <div class="card-body">
                    <div class="py-4">
                      <p class="clearfix"><span class="float-left">Bank Name</span>
                        <span class="float-right text-muted"><?php  echo $crecord->row()->bankname;?></span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left"> IFSCode</span>
                        <span class="float-right text-muted"><?php  echo $crecord->row()->ifsccode;?> </span>
                      </p>
					  <p class="clearfix"><span class="float-left">Branch Name</span>
                        <span class="float-right text-muted"><?php  echo $crecord->row()->branchname;?></span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">Account No.</span>
                        <span class="float-right text-muted"><?php  echo $crecord->row()->account_no;?> </span>
                      </p>
                      
                    </div>
                  </div>
                </div>
                
              </div>
              <div class="col-12 col-md-12 col-lg-8">
                <div class="card">
                  <div class="padding-20">
                    <ul class="nav nav-tabs" id="myTab2" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="home-tab2" data-toggle="tab" href="#about" role="tab"
                          aria-selected="true">View</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#settings" role="tab"
                          aria-selected="false">Edit</a>
                      </li>
                    </ul>
                    <div class="tab-content tab-bordered" id="myTab3Content">
                      <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="home-tab2">
                       
                          <div class="card-header">
                            <h4>Full Profile</h4>
                          </div>
                          <div class="card-body">
                            <div class="row">
                              <div class="form-group col-md-3 col-12"><label>Name :</label></div>
							  <div class="form-group col-md-3 col-12"><label><?php echo $this->session->userdata("name");?></label></div>
                              <div class="form-group col-md-3 col-12"><label>Father Name :</label></div>
							  <div class="form-group col-md-3 col-12"> <label><?php echo $crecord->row()->fname; ?></label> </div>
                            </div>
							<div class="row">
                              <div class="form-group col-md-3 col-12"><label>Gender:</label></div>
							  <div class="form-group col-md-3 col-12"><label><?php echo $crecord->row()->gender;  ?></label></div>
                              <div class="form-group col-md-3 col-12"><label>Status :</label></div>
							  <div class="form-group col-md-3 col-12"> <label><?php if($this->session->userdata("status") == 1){ echo "<label style='color:green;'>Active</label>";}else{echo "<label style='color:red;'>InActive</label>";}?></label> </div>
                            </div>
							<div class="row">
                              <div class="form-group col-md-3 col-12"><label>City :</label></div>
							  <div class="form-group col-md-3 col-12"><label><?php echo $this->session->userdata("city");?></label></div>
                              <div class="form-group col-md-3 col-12"><label>State :</label></div>
							  <div class="form-group col-md-3 col-12"> <label><?php  echo $this->session->userdata("state"); ?></label> </div>
                            </div>
							<div class="row">
                              <div class="form-group col-md-3 col-12"><label>Current Address :</label></div>
							  <div class="form-group col-md-3 col-12"><label><?php echo $this->session->userdata("currentaddress");?></label></div>
                              <div class="form-group col-md-3 col-12"><label>Permanent Address :</label></div>
							  <div class="form-group col-md-3 col-12"> <label><?php echo $this->session->userdata("permanentaddress");?></label> </div>
                            </div>
							<div class="row">
                              <div class="form-group col-md-3 col-12"><label>Pincode :</label></div>
							  <div class="form-group col-md-3 col-12"><label><?php echo $this->session->userdata("pin");?></label></div>
                              <div class="form-group col-md-3 col-12"><label>Email Id  :</label></div>
							  <div class="form-group col-md-3 col-12"> <label><?php echo $crecord->row()->email; ?></label> </div>
                            </div>
							<div class="row">
                              <div class="form-group col-md-3 col-12"><label>Mobile No :</label></div>
							  <div class="form-group col-md-3 col-12"><label><?php echo $this->session->userdata("mobile_number");?></label></div>
                              <div class="form-group col-md-3 col-12"><label>Other Mobile No :</label></div>
							  <div class="form-group col-md-3 col-12"> <label><?php echo $crecord->row()->altnumber; ?></label> </div>
                            </div>
							<div class="row">
                              <div class="form-group col-md-3 col-12"><label>Aadhar No :</label></div>
							  <div class="form-group col-md-3 col-12"><label><?php echo $this->session->userdata("adhaar_number");?></label></div>
                              <div class="form-group col-md-3 col-12"><label>Pan No :</label></div>
							  <div class="form-group col-md-3 col-12"> <label><?php echo $this->session->userdata("pan_number");?></label> </div>
                            </div>
							<div class="row">
                              <div class="form-group col-md-3 col-12"><label>User Id:</label></div>
							  <div class="form-group col-md-3 col-12"><label><?php echo $this->session->userdata("customer_username");?></label></div>
                              <div class="form-group col-md-3 col-12"><label>Date Of Birth :</label></div>
							  <div class="form-group col-md-3 col-12"> <label><?php echo $this->session->userdata("dob");?></label> </div>
                            </div>
							<div class="row">
                              <div class="form-group col-md-3 col-12"><label>Joiner Name:</label></div>
							  <div class="form-group col-md-3 col-12"><label><?php echo $this->session->userdata("joiner_name");?></label></div>
                              <div class="form-group col-md-3 col-12"><label>Position :</label></div>
							  <div class="form-group col-md-3 col-12"> <label><?php echo $this->session->userdata("joiner_position");?></label> </div>
                            </div>
							<div class="row">
                              <div class="form-group col-md-3 col-12"><label>Join Date:</label></div>
							  <div class="form-group col-md-3 col-12"><label><?php echo $crecord->row()->joining_date;?></label></div>
                              <div class="form-group col-md-3 col-12"><label>Active Date :</label></div>
							  <div class="form-group col-md-3 col-12"> <label><?php  echo $crecord->row()->active_date;?></label> </div>
                            </div>
							
							
                          </div>
                      </div>
                      <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="profile-tab2">
                        <form method="post" class="needs-validation">
                          <div class="card-header">
                            <h4>Edit Profile</h4>
                          </div>
                          <div class="card-body">
                            <div class="row">
							<div class="form-group col-md-2 col-12"><label>Name</label></div>
							  <div class="form-group col-md-4 col-12"><input type="text" class="form-control" value="John">
                                <div class="invalid-feedback">Please fill in the first name</div>
                              </div>
                              <div class="form-group col-md-2 col-12"><label>Father Name</label></div>
                              <div class="form-group col-md-4 col-12"><input type="text" class="form-control" value="Deo">
                                <div class="invalid-feedback">Please fill in the last name </div>
                              </div>
                            </div>
							 <div class="row">
							<div class="form-group col-md-2 col-12"><label>City</label></div>
							  <div class="form-group col-md-4 col-12"><input type="text" class="form-control" value="John">
                                <div class="invalid-feedback">Please fill in the first name</div>
                              </div>
                              <div class="form-group col-md-2 col-12"><label>State</label></div>
                              <div class="form-group col-md-4 col-12"><input type="text" class="form-control" value="Deo">
                                <div class="invalid-feedback">Please fill in the last name </div>
                              </div>
                            </div>
							 <div class="row">
							<div class="form-group col-md-2 col-12"><label>Current Address</label></div>
							  <div class="form-group col-md-4 col-12"><input type="text" class="form-control" value="John">
                                <div class="invalid-feedback">Please fill in the first name</div>
                              </div>
                              <div class="form-group col-md-2 col-12"><label>Permanent  Address</label></div>
                              <div class="form-group col-md-4 col-12"><input type="text" class="form-control" value="Deo">
                                <div class="invalid-feedback">Please fill in the last name </div>
                              </div>
                            </div>
							<div class="row">
							<div class="form-group col-md-2 col-12"><label>Pincode</label></div>
							  <div class="form-group col-md-4 col-12"><input type="text" class="form-control" value="John">
                                <div class="invalid-feedback">Please fill in the first name</div>
                              </div>
                              <div class="form-group col-md-2 col-12"><label>Email</label></div>
                              <div class="form-group col-md-4 col-12"><input type="text" class="form-control" value="Deo">
                                <div class="invalid-feedback">Please fill in the last name </div>
                              </div>
                            </div>
							 <div class="row">
							<div class="form-group col-md-2 col-12"><label>Mobile No</label></div>
							  <div class="form-group col-md-4 col-12"><input type="text" class="form-control" value="John">
                                <div class="invalid-feedback">Please fill in the first name</div>
                              </div>
                              <div class="form-group col-md-2 col-12"><label>Other Mobile No</label></div>
                              <div class="form-group col-md-4 col-12"><input type="text" class="form-control" value="Deo">
                                <div class="invalid-feedback">Please fill in the last name </div>
                              </div>
                            </div>
							<div class="row">
							<div class="form-group col-md-2 col-12"><label>Aadhar No</label></div>
							  <div class="form-group col-md-4 col-12"><input type="text" class="form-control" value="John">
                                <div class="invalid-feedback">Please fill in the first name</div>
                              </div>
                              <div class="form-group col-md-2 col-12"><label>Pan No</label></div>
                              <div class="form-group col-md-4 col-12"><input type="text" class="form-control" value="Deo">
                                <div class="invalid-feedback">Please fill in the last name </div>
                              </div>
                            </div>
							 <div class="row">
							<div class="form-group col-md-2 col-12"><label>Gender</label></div>
							  <div class="form-group col-md-4 col-12"><input type="text" class="form-control" value="John">
                                <div class="invalid-feedback">Please fill in the first name</div>
                              </div>
                              <div class="form-group col-md-2 col-12"><label>Date Of Birth</label></div>
                              <div class="form-group col-md-4 col-12"><input type="text" class="form-control" value="Deo">
                                <div class="invalid-feedback">Please fill in the last name </div>
                              </div>
                            </div>
							<div class="row">
							<div class="form-group col-md-2 col-12"><label>Password</label></div>
							  <div class="form-group col-md-4 col-12"><input type="text" class="form-control" value="John">
                                <div class="invalid-feedback">Please fill in the first name</div>
                              </div>
                              <div class="form-group col-md-2 col-12"><label>Upload Photo</label></div>
                              <div class="form-group col-md-4 col-12"><input type="text" class="form-control" value="Deo">
                                <div class="invalid-feedback">Please fill in the last name </div>
                              </div>
                            </div>
							
                          </div>
                          <div class="card-footer text-right">
                            <button class="btn btn-primary">Save Changes</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <div class="settingSidebar">
          <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
          </a>
          <div class="settingSidebar-body ps-container ps-theme-default">
            <div class=" fade show active">
              <div class="setting-panel-header">Setting Panel
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Select Layout</h6>
                <div class="selectgroup layout-color w-50">
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="1" class="selectgroup-input select-layout" checked>
                    <span class="selectgroup-button">Light</span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="2" class="selectgroup-input select-layout">
                    <span class="selectgroup-button">Dark</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Sidebar Color</h6>
                <div class="selectgroup selectgroup-pills sidebar-color">
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Color Theme</h6>
                <div class="theme-setting-options">
                  <ul class="choose-theme list-unstyled mb-0">
                    <li title="white" class="active">
                      <div class="white"></div>
                    </li>
                    <li title="cyan">
                      <div class="cyan"></div>
                    </li>
                    <li title="black">
                      <div class="black"></div>
                    </li>
                    <li title="purple">
                      <div class="purple"></div>
                    </li>
                    <li title="orange">
                      <div class="orange"></div>
                    </li>
                    <li title="green">
                      <div class="green"></div>
                    </li>
                    <li title="red">
                      <div class="red"></div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label>
                    <span class="control-label p-r-20">Mini Sidebar</span>
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="mini_sidebar_setting">
                    <span class="custom-switch-indicator"></span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <div class="disk-server-setting m-b-20">
                    <p>Disk Space</p>
                    <div class="sidebar-progress">
                      <div class="progress" data-height="5">
                        <div class="progress-bar l-bg-green" role="progressbar" data-width="80%" aria-valuenow="80"
                          aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <span class="progress-description">
                        <small>26% remaining</small>
                      </span>
                    </div>
                  </div>
                  <div class="disk-server-setting">
                    <p>Server Load</p>
                    <div class="sidebar-progress">
                      <div class="progress" data-height="5">
                        <div class="progress-bar l-bg-orange" role="progressbar" data-width="58%" aria-valuenow="25"
                          aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <span class="progress-description">
                        <small>Highly Loaded</small>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                  <i class="fas fa-undo"></i> Restore Default
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
     
