<div class="main-content">
	<div class="section">
		<div class="section-body">
			<div class="row">
				<div class="col-xs-12 col-md-12 col-lg-12">
					<div class="card">
						<div class="card-header">
							<h4>Customer Activation Panel</h4>

						</div>
							
							<div class="card-body">
								<div class="alert alert-info">Note : - Now Pay 1440/- Rupee for activation ON bellow given Accoutn Details ditails.
								<br> Account Number	:  900019021
								<br> Accunt Name 	:  ALD PVT LTD
								<br> IFSC CODE		:  BARB012344
								<br> Account Address :	Baliya Gorakhpur
								
								Note: After tranfer Amount please upload payment slip or fill transaction number below given box.
								 
								</div>
							<?php if($crecord->num_rows()>0){
							$c_ro=$crecord->row();
							?>
								<div class="row" id="regForm">
				<form method="post" action="<?php echo base_url()?>index.php/clogin/requestUpdate" enctype="multipart/form-data" >
									
									<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
											<div class="col-xs-6 col-md-6 col-lg-6">
												<div class="form-group row">
													<div class="col-md-3">
														<label>Name</label>
													</div>
													<div class="col-md-9">
														<div class="form-group">
															<input type="text" name="name" value ="<?php echo $c_ro->customer_name;?>" readonly/>
														</div>
					                   			</div>
												</div>
											</div>
											<div class="col-xs-6 col-md-6 col-lg-6">

												<div class="form-group row">
													<div class="col-md-3">
														<label>Father Name<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-9">
														<div class="form-group">
															
															<input type="text" name="fname" value ="<?php echo $c_ro->fname;?>" readonly/>
														</div>
									
                                					</div>
												</div>


											</div>
										</div>
									</div>

									<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
											<div class="col-xs-6 col-md-6 col-lg-6">

												<div class="form-group row">
													<div class="col-md-3">
														<label>Userid(Login id)</label>
													</div>
													<div class="col-md-9">
														<div class="form-group">
															<?php //echo $c_ro->username;?>
															<input type="text" name="uname" value ="<?php echo $c_ro->username;?>" readonly/>
														</div>
					                   
					                   					</div>
												</div>


											</div>
											<div class="col-xs-6 col-md-6 col-lg-6">
												<div class="form-group row">
													<div class="col-md-3">
														<label> Status<span title="Required" style="color: red;">*</span></label>
													</div>
													<div class="col-md-9">
														<div class="form-group">
															<?php echo "inactive.";?>
														</div>
													</div> 
					                 
					               					</div>			
					               				</div>
										</div>
									</div>

									
									<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
											<div class="col-xs-6 col-md-6 col-lg-6">
												<div class="form-group row">

													<div class="col-md-3">
														<label> Transaction Number</label>
													</div>
													<div class="col-md-9">
														<div class="form-group">
															<input type="text" class="form-control" name="tno" id="tno" />
														</div>
														</div>
                           			
					               						</div>


												</div>
											
											<div class="col-xs-6 col-md-6 col-lg-6">
												<div class="form-group row">
													<div class="col-md-3">
														<label>Refferance NO</label>
													</div>
													<div class="col-md-9">
														<div class="form-group">
															<input type="text" class="form-control" name="reffno" id="reffno"/>
														</div>
                              
                                </div>
												</div>
											</div>

										</div>
									</div>
									<div class="col-md-12 col-lg-12 col-xs-12">
										<div class="row">
											<div class="col-xs-6 col-md-6 col-lg-6">
												<div class="form-group row">
													<div class="col-md-3">
														<label>Upload Transfer Slip</label>
													</div>
													<div class="col-md-9">
														<div class="form-group">
															<input type="file" name = "photo" id ="paymentSlip" class="form-control">
															<!-- <input type="file" name="photo"/> -->
														</div> 
                              			
					               					</div>

												</div>
											</div>
											
											<div class="col-xs-6 col-md-6 col-lg-6">
												<div class="form-group row">
													<div class="col-md-3">
														<label></label>
													</div>
													<div class="col-md-9">
														<div class="form-group">
															<button class ="btn btn-info">Update Status</button>
														</div> 
                              			
					               					</div>

												</div>
											</div>
											
										</div>
									</div>
									</form>
								</div>
							</div>
					<?php }?>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>
