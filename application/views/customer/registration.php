<div class="main-content">
<div class="section">
<div class="section-body">
<div class="row">
<div class="col-xs-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Customer Registeration Form</h4>
                    
                     </div>
                  <form method="post" action="<?php echo base_url()?>index.php/clogin/insertCustmer">
                  <div class="card-body">
                  <div class ="alert alert-info">Note : - Please fill Sponsor Id for open registration form.Fill all the details and submit to save info.</div>
                 
                  <div class="row">
                  
                  <div class=" col-col-md-6 col-xs-6 col-lg-6 ">

                  	
                  	<div class="form-group row">
                        <label class="col-sm-3 col-form-label required">Sponsor Userid<span title="Required" style="color:red;">*</span></label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="parent_id" id="parent_id" required="required">
                          <div class="invalid-feedback">
                            Oh no! Email is invalid.
                          </div>
                        </div>
                      </div>
                  	</div>
                    
                   
                    <div class=" col-col-md-6 col-xs-6 col-lg-6 ">
                    <div class="form-group row">
                    <label class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-9">
                     <div id="custoStatus"></div>
                     </div>
                      </div>
                    </div>
                  </div>

                   <div class="row" id="regForm">
                   <div class="col-md-12 col-lg-12 col-xs-12">
                        <div class="row">
                            <div class="col-xs-6 col-md-6 col-lg-6" >
                                <div class="form-group row">
                                    <div class="col-md-3">
                                    	<label>Select Position<span title="Required" style="color:red;">*</span></label>
                                    </div>
                                     <div class="col-md-9">
                                     	<div class="form-group">
					                       <select class="custom-select" id="selectTree" required="required">
					                        <option selected>Select Position</option>
					                        <option value=1>Left</option>
					                        <option value=2>Right</option>
					                        </select>
					                    </div>
					                   </div>
					                   <?php echo form_error('selectTree');?> 
					               </div>
                                  
                                
                            </div>
                            <div class="col-xs-6 col-md-6 col-lg-6" >

                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label>Name<span title="Required" style="color:red;">*</span></label>
                                   </div>
                                <div class="col-md-9">
                                     <div class="form-group">
                                    <input type="text" class="form-control" name="name" id="name" required="required">
                                	</div>

                                </div>
                          </div>

                            
                        </div>
                        </div>
                        </div>
                        
                       <div class="col-md-12 col-lg-12 col-xs-12">
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

                                <div class="form-group row">
                                    <div class="col-md-3">
                                    	<label>Father Name<span title="Required" style="color:red;">*</span></label>
                                    </div>
                                     <div class="col-md-9">
                                     	<div class="form-group">
					                         <input type="text" class="form-control" name="fname" id="fname" required="required">
					                    </div>
					                    <?php echo form_error('selectTree');?> 
					                   </div> 
					               </div>
                                  
                                
                            </div>
                            <div class="col-xs-6 col-md-6 col-lg-6" >
                            <div class="form-group row">
                                <div class="col-md-3 ">
                                    <label>Address<span title="Required" style="color:red;">*</span></label>
                                   </div>
                                <div class="col-md-9">
                                     <div class="form-group">
                                    <textarea type="text" class="form-control" name="address" id="address" required="required"></textarea>
                                </div>
                                <?php echo form_error('selectTree');?> 

                                </div>
                          </div>

                        </div>
                        </div>
                        </div>
                        
                        <div class="col-md-12 col-lg-12 col-xs-12">
                        <div class="row">
                            <div class="col-xs-6 col-md-6 col-lg-6" >
                                <div class="form-group row">
                                    <div class="col-md-3">
                                    	<label> City<span title="Required" style="color:red;">*</span></label>
                                    </div>
                                     <div class="col-md-9">
                                     	<div class="form-group">
					                        <input type="text" class="form-control" name="city" id="city" required="required"> </div>
					                   </div> 
					               </div>
                                  
                                
                            </div>
                            <div class="col-xs-6 col-md-6 col-lg-6" >
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label>State<span title="Required" style="color:red;">*</span></label>
                                   </div>
                                <div class="col-md-9">
                                     <div class="form-group">
                                     <input type="text" class="form-control" name="state" id="state" required="required">
                            	</div>

                                </div>
                          </div>

                        </div>
                        </div>
                        </div>
                      
                       <div class="col-md-12 col-lg-12 col-xs-12">
                        <div class="row">
                            <div class="col-xs-6 col-md-6 col-lg-6" >
                                <div class="form-group row">
                                    <div class="col-md-3">
                                    	<label> Pincode<span title="Required" style="color:red;">*</span></label>
                                    </div>
                                     <div class="col-md-9">
                                     	<div class="form-group">
					                         <input type="text" class="form-control" name="pinno" id="pinno" maxlenght="6" ninlenght="6" required="required">
                           			 </div> 
					               </div>
                                  
                                
                            </div>
                            </div>
                            <div class="col-xs-6 col-md-6 col-lg-6" >
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label>Mobile No<span title="Required" style="color:red;">*</span></label>
                                   </div>
                                <div class="col-md-9">
                                     <div class="form-group">
                                      <input type="text" class="form-control phone-number" name="mobile" id="mobile" required="required">
                               </div>
                                </div>
                          </div>
                        </div>
                        
                        </div>
                      </div>
                       <div class="col-md-12 col-lg-12 col-xs-12">
                        <div class="row">
                            <div class="col-xs-6 col-md-6 col-lg-6" >
                                <div class="form-group row">
                                    <div class="col-md-3">
                                    	<label>Aadhar No<span title="Required" style="color:red;">*</span></label>
                                    </div>
                                     <div class="col-md-9">
                                     	<div class="form-group">
					                        <input type="text" class="form-control phone-number" maxlenght="12" minlenght="12" mane="aadhar" id="aadhar" required="required">
                              			 </div> 
					               </div>
                                  
                                </div>
                            </div>
                            <div class="col-xs-6 col-md-6 col-lg-6" >
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label>Pan No</label>
                                   </div>
                                <div class="col-md-9">
                                     <div class="form-group">
                                      <input type="text" class="form-control phone-number" name="panno" id="panno" required="required">
                               </div>
                                </div>
                          </div>
                        </div>
                        </div>
                        </div>
                        
                         <div class="col-md-12 col-lg-12 col-xs-12">
                        <div class="row">
                            <div class="col-xs-6 col-md-6 col-lg-6" >
                                <div class="form-group row">
                                    <div class="col-md-3">
                                    	<label>Date Of Birth<span title="Required" style="color:red;">*</span></label>
                                    </div>
                                     <div class="col-md-9">
                                     	<div class="form-group">
					                         <input type="date" class="form-control datemask" name="dob" id="dob" required="required">
                               			 </div> 
					               </div>
                                  
                                </div>
                            </div>
                            <div class="col-xs-6 col-md-6 col-lg-6" >
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label>Gender<span title="Required" style="color:red;">*</span></label>
                                   </div>
                                <div class="col-md-9">
                                <div class="form-group row">
                                <div class="col-md-5">
                                     <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" id="customRadioInline1" name="customRadioInline1" required="required"
                        class="custom-control-input">
                      <label class="custom-control-label" for="customRadioInline1">MALE</label>
                    </div>
                    </div>
                    <div class="col-md-5">
                    <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                      <label class="custom-control-label" for="customRadioInline2">FEMALE </label>
                    </div>
                    </div>
                    </div>
                                </div>
                          </div>
                        </div>
                        </div>
                        </div>
                        
                       
                        <div class="col-md-12 col-lg-12 col-xs-12">
                        <div class="row">

                            <div class="col-xs-6 col-md-6 col-lg-6" >
                                <div class="form-group row">
                                    <div class="col-md-3">
                                    	<label>Password<span title="Required" style="color:red;">*</span></label>
                                    </div>

                                     <div class="col-md-9">
                                     	<div class="form-group">
					                        <input type="password" required="required" class="form-control pwstrength" data-indicator="pwindicator" name="confirm_pwd" id="confirm_pwd">
                              		 </div> 
					               </div>
                                  

                                </div>
                            </div>
                            <div class="col-xs-6 col-md-6 col-lg-6" >
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label>Confirm Password<span title="Required" style="color:red;">*</span></label>
                                   </div>
                                <div class="col-md-9">
                                     <div class="form-group">
                                      <input type="password" class="form-control pwstrength" required="required" data-indicator="pwindicator" name="confirm_pwd" id="confirm_pwd">
                               </div>
                                </div>
                          </div>
                        </div>
                        </div>
                        </div>
                        
                        <div class="col-md-12 col-lg-12 col-xs-12">
                        <div class="row">
                            <div class="col-xs-6 col-md-6 col-lg-6" >
                                <div class="form-group row">
                                    <div class="col-md-3">
                                    	  </div>
                                     <div class="col-md-9">
                                     	<div class="form-group mb-0">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck" name ="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                          <a href ="#">i Accept Term And Condition.</a>
                        </label>
                      </div>
                    </div> 
					               </div>
                                  
                                </div>
                            </div>
                            <div class="col-xs-6 col-md-6 col-lg-6" >
                            <div class="form-group row">
                                <div class="col-md-3">
                                    </div>
                                <div class="col-md-9">
                                     <div class="form-group">
                                      <button type="submit" class="btn btn-primary"  id="regisbtn"><i class="far fa-edit">&nbsp;Submit</i></button>
                            </div>
                                </div>
                          </div>
                        </div>
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
