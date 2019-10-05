<div class="main-content">
<div class="section">
<div class="section-body">
<div class="row">
<div class="col-xs-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Registeration Form</h4>
                  </div>
                  <form method="post" action="<?php echo base_url()?>index.php/clogin/insertCustmer">
                  <div class="card-body">
                  <div class=" col-col-md-6 col-xs-6 col-lg-6 ">
                    <div class="form-group">
                      <label>Parent Id</label>
                        
                      <input type="text" class="form-control" name="parent_id" id="parent_id" required="requried">
                      <span id="parent_idd" style="color:red;"> </span>
                    </div>
                    </div>
                    <div class=" col-col-md-6 col-xs-6 col-lg-6 " id="parent_nm">
                    <div class="form-group">
                      <label>Parent Name</label>
                      <input type="text" class="form-control" name="parent_nmm" id="parent_nmm" required="requried">
                    </div>
                    </div>
                   <div class="row" id="regForm">
                   <div class="col-md-12 col-lg-12 col-xs-12">
                        <div class="row">
                            <div class="col-xs-6 col-md-6 col-lg-6" >
                                <div class="row">
                                    <div class="col-md-6">
                                    <label>Left Joiner</label>
                                     <input type="radio" class="form-control" style=" width:25px; height:25px !importent;" name="JoinerID">
                                  </div>
                                  <div class="col-md-6">
                                  <label>right Joiner</label>
                                     <input type="radio" class="form-control" style=" width:25px ; height:25px !importent;" name="JoinerID">
                                     </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-md-6 col-lg-6" >
                            <div class="form-group">
                                <label>Joiner Name</label>
                                <div class="input-group" >
                                    <input type="text" class="form-control" name="joinername" id="joinername" required="requried">
                                </div>
                                </div>
                          </div>

                            
                        </div>
                        <div class="row">
                        <div class="col-xs-6 col-md-6 col-lg-6" >
                            <div class="form-group">
                               <div class="row">
                                <div class="col-md-6">
                                <label>Name</label>
                                </div>
                                <div class="col-md-6">
                                <div class="input-group" >
                                    <input type="text" class="form-control" name="name" id="name" required="requried">
                                </div>
                                </div>
                               </div>
                                </div>
                          </div>
                            <div class="col-xs-6 col-md-6 col-lg-6" >
                            <div class="form-group">
                                <label> Father Name</label>
                                <div class="input-group" >
                                    
                                    <input type="text" class="form-control" name="fname" id="fname" required="requried">
                                </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                        <div class="col-xs-6 col-md-6 col-lg-6" >
                               <div class="form-group">
                                <label>Address</label>
                                <div class="input-group" >
                                    <textarea type="text" class="form-control" name="address" id="address" required="requried"></textarea>
                                </div>
                            </div>
                          </div>
                            <div class="col-xs-6 col-md-6 col-lg-6" >
                            <div class="form-group">
                                <label> City</label>
                                <div class="input-group" >
                                    
                                    <input type="text" class="form-control" name="city" id="city" required="requried">
                                </div>
                                </div>
                            </div>
                           
                        </div>
                        <div class="row">
                        <div class="col-xs-6 col-md-6 col-lg-6" >
                               <div class="form-group">
                                <label>State</label>
                                <div class="input-group" >
                                    <textarea type="text" class="form-control" name="state" id="state" required="requried"></textarea>
                                </div>
                            </div>
                          </div>
                            <div class="col-xs-6 col-md-6 col-lg-6" >
                                <div class="form-group">
                            <label>Pincode</label>
                            <div class="input-group" >
                                <input type="text" class="form-control" name="pinno" id="pinno" maxlenght="6" ninlenght="6" required="requried">
                            </div>
                            </div>
                            </div>
                           
                        </div>
                        <div class="row">
                        <div class="col-xs-6 col-md-6 col-lg-6" >
                            <div class="form-group">
                                <label>Mobile No</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    </div>
                                    <input type="text" class="form-control phone-number" name="mobile" id="mobile" required="requried">
                                </div>
                                </div>
                          </div>
                            <div class="col-xs-6 col-md-6 col-lg-6" >
                            <div class="form-group">
                                <label>Aadhar No</label>
                                <div class="input-group">
                                
                                    <input type="text" class="form-control phone-number" maxlenght="12" minlenght="12" mane="aadhar" id="aadhar" required="requried">
                                </div>
                                </div>
                            </div>
                           
                        </div>
                        <div class="row">
                        <div class="col-xs-6 col-md-6 col-lg-6" >
                            <div class="form-group">
                                <label>Pan No</label>
                                <div class="input-group">
                                    <input type="text" class="form-control phone-number" maxlenght="10" minlenght="10" mane="panno" id="panno" required="requried">
                                </div>
                                </div>
                          </div>
                            <div class="col-xs-6 col-md-6 col-lg-6" >
                            <div class="form-group">
                                <label>Date Of Birth</label>
                                <input type="date" class="form-control datemask" name="dob" id="dob" required="requried">
                                </div>
                            </div>
                          
                        </div>
                        <div class="row">
                        <div class="col-xs-6 col-md-6 col-lg-6" >
                            <div class="form-group">
                            <label>Password Strength</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-lock"></i>
                                </div>
                                </div>
                                <input type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password" id="password" required="requried">
                            </div>
                            <div id="pwindicator" class="pwindicator">
                                <div class="bar"></div>
                                <div class="label"></div>
                            </div>
                            </div>
                          </div>
                            <div class="col-xs-6 col-md-6 col-lg-6" >
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-lock"></i>
                                    </div>
                                    </div>
                                    <input type="password" class="form-control pwstrength" data-indicator="pwindicator" name="confirm_pwd" id="confirm_pwd" required="requried">
                                </div>
                                <div id="pwindicator" class="pwindicator">
                                    <div class="bar"></div>
                                    <div class="label"></div>
                                </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-md-6 col-lg-6" >
                          
                          </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-12 col-lg-12 text-center" >
                            <input type="submit" class="btn btn-primary btn-md"  id="regisbtn">
                            </div>
                           
                        </div>
                   </div>
                  </div>
                </div>
                </form>
                
              </div>
              </div>
              </div>
              </div>
              </div>
