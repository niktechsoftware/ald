<!-- Main Content -->
      <div class="main-content">
        <section class="section">
        <div class="section-body">
          

		  <div class="row mt-sm-12">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card author-box">
                  <div class="card-body">
                    <!-- tree Content -->
					
					
					
					 <form action="<?php echo base_url(); ?>index.php/clogin/binarySubGroup" method="post">
	                        <div class="row">
		                            <div class="col-4 page-title">
		                                <!--<div style="font-size:35px;"><?php echo $data->customer_name."[".$data->username."]"; ?>'s <h2 class="btn bg-danger text-white">Binary Group</h2> </div>-->
		                                 <h6 class="btn bg-danger text-white">Binary Group (Tree)</h6>
		                            </div>
									<div class="col-2 text-right"><input type="text" class="form-control" name="customer_id" required="required" title="Only accept numbers."></div>
									<div class="col-3"><input type="submit" class="btn btn-danger" value="Get Tree" /></div>
									<div class="col-3"><a href="<?= base_url() ?>index.php/clogin/tree" class="btn btn-danger">Root</a></div>
	                        </div>
	                        <?php
	                        	if($this->session->flashdata('error'))
	                        		echo '<div class="row"><div class="col-12 text-center"><h5 class="text-danger">' . $this->session->flashdata('error') . '</h5></div></div>';
	                        ?>
						</form>
						<div class="table-responsive">
								<table width="100%">
													<tr>
														<td style="border: none;" align="center" colspan="8">
															<div class="customerHead"><?php  $data=$crecord->row();?>
																<?php  echo $data->customer_name."[".$data->username."]"; ?> <br/>
																<?php
																	/**
																	 * Getting the tree data of root node.
																	 */
																	$root = $this->db->query("SELECT * FROM silver_tree WHERE c_id=".$data->id." LIMIT 1;")->row();
																	$rootData = $this->db->query("SELECT * FROM customer_info WHERE id=".$data->id." LIMIT 1;")->row();
																	$rootImg = $data ? 'activated.png' : 'disabled.png';
																	$rootImg = $rootData->status == 1 ? $rootImg : 'deactivated.png';
																	
																?>
																<img src="<?= base_url(); ?>assets/images/tree/<?= $rootImg;?>" width="60"  />

																<span class="customerLeft">
																	<?php //echo generateCustomerInfo($data->id, $data) ?>
																</span>
															</div>

														</td>
													</tr>
													<tr>
														<td style="border: none;" align="center" colspan="8">
															<img src="<?= base_url(); ?>assets/images/tree/hr.png" width="55%" style="margin-top: -30px;">
														</td>
													</tr>
													<tr>
														<td style="border: none;" align="center" colspan="4">
															<div style="margin-top: -20px;">
																<?php
																	$leftRootImg = $root->left ? 'activated.png' : 'disabled.png';
																	$customerID = $root->left ? $root->left : '';
																	$leftRootData = null;
																	$leftRootTree = null;
																	
																	if($root->left):
																		$leftRootData = $this->db->query("SELECT * FROM customer_info WHERE id=".$root->left." LIMIT 1;")->row();
																		$leftRootTree = $this->db->query("SELECT * FROM silver_tree WHERE c_id=".$root->left." LIMIT 1;")->row();
																		$leftRootImg = $leftRootData && $leftRootData->status == 1 ? $leftRootImg : 'deactivated.png';
																		if($leftRootData)
																			echo '<span>' . $leftRootData->customer_name . '('.$leftRootData->username.')</span>';
																	endif;
																?>
															</div>
															<div class="customerHead">
															<a href="<?php echo base_url(); ?>index.php/clogin/binarySubGroup/<?php echo $customerID ?>">
															<img src="<?= base_url(); ?>assets/images/tree/<?= $leftRootImg; ?>" data-id="<?= $customerID ?>" class="profileImg" width="60" >
																</a>
																<?php if($root->left && $leftRootData): ?>
																	<span class="customerLeft">
																		<?php //echo generateCustomerInfo($root->left, $leftRootData) ?>
																	</span>
																<?php endif; ?>
															</div>
														</td>
														<td style="border: none;" align="center" colspan="4">
															<div style="margin-top: -20px;">
																<?php
																	$rightRootImg = $root->right ? 'activated.png' : 'disabled.png';
																	$customerID = $root->right ? $root->right : '';
																	$rightRootData = null;
																		$rightRootTree = null;
																	if($root->right):
																		$rightRootData = $this->db->query("SELECT * FROM customer_info WHERE id=".$root->right." LIMIT 1;")->row();
																		$rightRootTree = $this->db->query("SELECT * FROM silver_tree WHERE c_id=".$root->right." LIMIT 1;")->row();
																		$rightRootImg = $rightRootData && $rightRootData->status == 1 ? $rightRootImg : 'deactivated.png';
																		if($rightRootData)
																			echo '<span>' . $rightRootData->customer_name . '('.$rightRootData->username.')</span>';
																	endif;
																?>
															</div>
															
															<div class="customerHead"><a href="<?php echo base_url(); ?>index.php/clogin/binarySubGroup/<?php echo $customerID ?>">
																<img src="<?= base_url(); ?>assets/images/tree/<?= $rightRootImg; ?>" data-id="<?= $customerID ?>" class="profileImg" width="60">																		
</a>
																<?php if($root->right && $rightRootData): ?>
																	<span class="customerRight">
																		<?php //echo generateCustomerInfo($root->right, $rightRootData) ?>
																	</span>
																<?php endif; ?>
															</div>
														</td>
													</tr>
													<tr>
														<td style="border: none;" align="center" colspan="4">
															<img src="<?= base_url(); ?>assets/images/tree/hr1.png" width="55%" style="margin-top: -30px;">
														</td>
														<td style="border: none;" align="center" colspan="4">
															<img src="<?= base_url(); ?>assets/images/tree/hr1.png" width="55%" style="margin-top: -30px;">
														</td>
													</tr>
													<tr>
														<!-- Left Root Data -->
														<td style="border: none;" align="center" colspan="2">
															<div style="margin-top: -20px;">
																<?php
																	$leftRootImg = 'disabled.png';
																	$leftRootData1 = null;
																	$leftRootTree1 = null;
																	$customerID = '';
																	if($root->left && $leftRootTree && $leftRootTree->left):
																		$leftRootImg = $leftRootTree->left ? 'activated.png' : 'disabled.png';
																		$customerID = $leftRootTree->left ? $leftRootTree->left : '';
																		if($leftRootTree->left):
																			$leftRootData1 = $this->db->query("SELECT * FROM customer_info WHERE id=".$leftRootTree->left." LIMIT 1;")->row();
																			$leftRootTree1 = $this->db->query("SELECT * FROM silver_tree WHERE c_id=".$leftRootTree->left." LIMIT 1;")->row();
																			$leftRootImg = $leftRootData1 && $leftRootData1->status == 1 ? $leftRootImg : 'deactivated.png';
																			if($leftRootData1)
																				echo '<span>' . $leftRootData1->customer_name . '('.$leftRootData1->username.')</span>';
																		endif;
																	endif;
																?>
															</div>
															<div class="customerHead"><a href="<?php echo base_url(); ?>index.php/clogin/binarySubGroup/<?php echo $customerID ?>">
																<img src="<?= base_url(); ?>assets/images/tree/<?= $leftRootImg ?>" data-id="<?= $customerID ?>" class="profileImg" width="60">
																</a><?php if($root->left && $leftRootTree && $leftRootTree->left && $leftRootData1): ?>
																	<span class="customerLeft">
																		<?php //echo generateCustomerInfo($root->right, $rightRootData) ?>
																	</span>
																<?php endif; ?>
															</div>
														</td>
														<td style="border: none;" align="center" colspan="2">
															<div style="margin-top: -20px;">
																<?php
																	$rightRootImg = 'disabled.png';
																	$rightRootData1 = null;
																	$rightRootTree1 = null;
																	$customerID = '';
																	if($root->left && $leftRootTree && $leftRootTree->right):
																		$rightRootImg = $leftRootTree->right ? 'activated.png' : 'disabled.png';
																		$customerID = $leftRootTree->right ? $leftRootTree->right : '';
																		if($leftRootTree->right):
																			$rightRootData1 = $this->db->query("SELECT * FROM customer_info WHERE id=".$leftRootTree->right." LIMIT 1;")->row();
																			$rightRootTree1 = $this->db->query("SELECT * FROM silver_tree WHERE c_id=".$leftRootTree->right." LIMIT 1;")->row();
																			$rightRootImg = $rightRootData1 && $rightRootData1->status == 1 ? $rightRootImg : 'deactivated.png';
																			if($rightRootData1)
																				echo '<span>' . $rightRootData1->customer_name . '('.$rightRootData1->username.')</span>';
																		endif;
																	endif;
																?>
															</div>
															<div class="customerHead"><a href="<?php echo base_url(); ?>index.php/clogin/binarySubGroup/<?php echo $customerID ?>">
																<img src="<?= base_url(); ?>assets/images/tree/<?= $rightRootImg ?>" data-id="<?= $customerID ?>" class="profileImg" width="60">
																</a><?php if($root->left && $leftRootTree && $leftRootTree->right && $rightRootData1): ?>
																	<span class="customerLeft">
																		<?php //echo generateCustomerInfo($leftRootTree->right, $rightRootData1) ?>
																	</span>
																<?php endif; ?>
															</div>
														</td>
														<!-- Right Root Data -->
														<td style="border: none;" align="center" colspan="2">
															<div style="margin-top: -20px;">
																<?php
																	$leftRootImg = 'disabled.png';
																	$leftRootData2 = null;
																	$leftRootTree2 = null;
																	$customerID = '';
																	if($root->right && $rightRootTree && $rightRootTree->left):
																		$leftRootImg = $rightRootTree->left ? 'activated.png' : 'disabled.png';
																		$customerID = $rightRootTree->left ? $rightRootTree->left : '';
																		if($rightRootTree->left):
																			$leftRootData2 = $this->db->query("SELECT * FROM customer_info WHERE id=".$rightRootTree->left." LIMIT 1;")->row();
																			$leftRootTree2 = $this->db->query("SELECT * FROM silver_tree WHERE c_id=".$rightRootTree->left." LIMIT 1;")->row();
																			$leftRootImg = $leftRootData2 && $leftRootData2->status == 1 ? $leftRootImg : 'deactivated.png';
																			if($leftRootData2)
																				echo '<span>' . $leftRootData2->customer_name . '('.$leftRootData2->username.')</span>';
																		endif;
																	endif;
																?>
															</div>
															<div class="customerHead"><a href="<?php echo base_url(); ?>index.php/clogin/binarySubGroup/<?php echo $customerID ?>">
															</a>	<img src="<?= base_url(); ?>assets/images/tree/<?= $leftRootImg ?>" data-id="<?= $customerID ?>" class="profileImg" width="60">
																<?php if($root->right && $leftRootTree && $leftRootTree->left && $leftRootData2): ?>
																	<span class="customerRight">
																		<?php echo generateCustomerInfo($rightRootTree->left, $leftRootData2) ?>
																	</span>
																<?php endif; ?>
															</div>
														</td>
														<td style="border: none;" align="center" colspan="2">
															<div style="margin-top: -20px;">
																<?php
																	$rightRootImg = 'disabled.png';
																	$rightRootData2 = null;
																	$rightRootTree2 = null;
																	$customerID = '';
																	if($root->right && $rightRootTree && $rightRootTree->right):
																		$rightRootImg = $rightRootTree->right ? 'activated.png' : 'disabled.png';
																		$customerID = $rightRootTree->right ? $rightRootTree->right : '';
																		if($rightRootTree->right):
																			$rightRootData2 = $this->db->query("SELECT * FROM customer_info WHERE id=".$rightRootTree->right." LIMIT 1;")->row();
																			$rightRootTree2 = $this->db->query("SELECT * FROM silver_tree WHERE c_id=".$rightRootTree->right." LIMIT 1;")->row();
																			$rightRootImg = $rightRootData2 && $rightRootData2->status == 1 ? $rightRootImg : 'deactivated.png';
																			if($rightRootData2)
																				echo '<span>' . $rightRootData2->customer_name . '('.$rightRootData2->username.')</span>';
																		endif;
																	endif;
																?>
															</div>
															<div class="customerHead"><a href="<?php echo base_url(); ?>index.php/clogin/binarySubGroup/<?php echo $customerID ?>">
															</a>	<img src="<?= base_url(); ?>assets/images/tree/<?= $rightRootImg ?>" data-id="<?= $customerID ?>" class="profileImg" width="60">
																<?php if($root->right && $rightRootTree && $rightRootTree->left && $rightRootData2): ?>
																	<span class="customerRight">
																		<?php //echo generateCustomerInfo($rightRootTree->right, $rightRootData2) ?>
																	</span>
																<?php endif; ?>
															</div>
														</td>
													</tr>
													<tr>
														<td style="border: none;" align="center" colspan="2">
															<img src="<?= base_url(); ?>assets/images/tree/hr1.png" width="55%" style="margin-top: -30px;">
														</td>
														<td style="border: none;" align="center" colspan="2">
															<img src="<?= base_url(); ?>assets/images/tree/hr1.png" width="55%" style="margin-top: -30px;">
														</td>
														<td style="border: none;" align="center" colspan="2">
															<img src="<?= base_url(); ?>assets/images/tree/hr1.png" width="55%" style="margin-top: -30px;">
														</td>
														<td style="border: none;" align="center" colspan="2">
															<img src="<?= base_url(); ?>assets/images/tree/hr1.png" width="55%" style="margin-top: -30px;">
														</td>
													</tr>
													<tr>
														<!-- LEFT -->
														<td style="border: none;" align="center">
															<div style="margin-top: -20px;">
																<?php
																	$leftRootImg = 'disabled.png';
																	$leftRootData3 = null;
																	$leftRootTree3 = null;
																	$customerID = '';
																	if($root->left && $leftRootTree1 && $leftRootTree1->left):
																		$leftRootImg = $leftRootTree1->left ? 'activated.png' : 'disabled.png';
																		$customerID = $leftRootTree1->left ? $leftRootTree1->left : '';
																		if($leftRootTree1->left):
																			$leftRootData3 = $this->db->query("SELECT * FROM customer_info WHERE id=".$leftRootTree1->left." LIMIT 1;")->row();
																			$leftRootTree3 = $this->db->query("SELECT * FROM silver_tree WHERE c_id=".$leftRootTree1->left." LIMIT 1;")->row();
																			$leftRootImg = $leftRootData3 && $leftRootData3->status == 1 ? $leftRootImg : 'deactivated.png';
																			if($leftRootData3)
																				echo '<span>' . $leftRootData3->customer_name . '('.$leftRootData3->username.')</span>';
																		endif;
																	endif;
																?>
															</div>
														
															<div class="customerHead"><a href="<?php echo base_url(); ?>index.php/clogin/binarySubGroup/<?php echo $customerID ?>">
																<img src="<?= base_url(); ?>assets/images/tree/<?= $leftRootImg ?>" data-id="<?= $customerID ?>" class="profileImg" width="60">
															</a>	<?php if($root->left && $leftRootTree1 && $leftRootTree1->left && $leftRootData3): ?>
																	<span class="customerLeft">
																		<?php //echo generateCustomerInfo($leftRootTree1->left, $leftRootData3) ?>
																	</span>
																<?php endif; ?>
															</div>
														</td>
														<!-- RIGHT -->
														<td style="border: none;" align="center">
															<div style="margin-top: -20px;">
														
																<?php
																	$rightRootImg = 'disabled.png';
																	$rightRootData3 = null;
																	$customerID = '';
																	if($root->left && $leftRootTree1 && $leftRootTree1->left):
																		$rightRootImg = $leftRootTree1->right ? 'activated.png' : 'disabled.png';
																		$customerID = $leftRootTree1->right ? $leftRootTree1->right : '';
																		if($leftRootTree1->right):
																			$rightRootData3 = $this->db->query("SELECT * FROM customer_info WHERE id=".$leftRootTree1->right." LIMIT 1;")->row();
																			$rightRootImg = $rightRootData3 && $rightRootData3->status == 1 ? $rightRootImg : 'deactivated.png';
																			if($rightRootData3)
																				echo '<span>' . $rightRootData3->customer_name . '('.$rightRootData3->username.')</span>';
																		endif;
																	endif;
																?>
															</div>
															
															<div class="customerHead">
																<img src="<?= base_url(); ?>assets/images/tree/<?= $rightRootImg ?>" data-id="<?= $customerID ?>" class="profileImg" width="60">
																<?php if($root->left && $leftRootTree1 && $leftRootTree1->right && $rightRootData3): ?>
																	<span class="customerLeft">
																		<?php //echo generateCustomerInfo($leftRootTree1->right, $rightRootData3) ?>
																	</span>
																<?php endif; ?>
															</div>
														</td>
														<!-- LEFT -->
														<td style="border: none;" align="center">
															<div style="margin-top: -20px;">
																<?php
																	$leftRootImg = 'disabled.png';
																	$leftRootData4 = null;
																	$leftRootTree4 = null;
																	$customerID = '';
																	if($root->left && $rightRootTree1 && $rightRootTree1->left):
																		$leftRootImg = $rightRootTree1->left ? 'activated.png' : 'disabled.png';
																		$customerID = $rightRootTree1->left ? $rightRootTree1->left : '';
																		if($rightRootTree1->left):
																			$leftRootData4 = $this->db->query("SELECT * FROM customer_info WHERE id=".$rightRootTree1->left." LIMIT 1;")->row();
																			$leftRootTree4 = $this->db->query("SELECT * FROM silver_tree WHERE c_id=".$rightRootTree1->left." LIMIT 1;")->row();
																			$leftRootImg = $leftRootData4 && $leftRootData4->status == 1 ? $leftRootImg : 'deactivated.png';
																			if($leftRootData4)
																				echo '<span>' . $leftRootData4->customer_name . '('.$leftRootData4->username.')</span>';
																		endif;
																	endif;
																?>
															</div>
															<div class="customerHead"><a href="<?php echo base_url(); ?>index.php/clogin/binarySubGroup/<?php echo $customerID ?>">
																<img src="<?= base_url(); ?>assets/images/tree/<?= $leftRootImg ?>" data-id="<?= $customerID ?>" class="profileImg" width="60">
																</a><?php if($root->left && $rightRootTree1 && $rightRootTree1->left && $leftRootData4): ?>
																	<span class="customerLeft">
																		<?php //echo generateCustomerInfo($rightRootTree1->left, $leftRootData4) ?>
																	</span>
																<?php endif; ?>
															</div>
														</td>
														<!-- RIGHT -->
														<td style="border: none;" align="center">
															<div style="margin-top: -20px;">
																<?php
																	$rightRootImg = 'disabled.png';
																	$rightRootData4 = null;
																	$leftRootTree3 = null;
																	$customerID = '';
																	if($root->right && $rightRootTree1 && $rightRootTree1->right):
																		$rightRootImg = $rightRootTree1->right ? 'activated.png' : 'disabled.png';
																		$customerID = $rightRootTree1->right ? $rightRootTree1->right : '';
																		if($rightRootTree1->right):
																			$rightRootData4 = $this->db->query("SELECT * FROM customer_info WHERE id=".$rightRootTree1->right." LIMIT 1;")->row();
																			$leftRootTree3 = $this->db->query("SELECT * FROM silver_tree WHERE c_id=".$rightRootTree1->right." LIMIT 1;")->row();
																			$rightRootImg = $rightRootData4 && $rightRootData4->status == 1 ? $rightRootImg : 'deactivated.png';
																			if($rightRootData4)
																				echo '<span>' . $rightRootData4->customer_name . '('.$rightRootData4->username.')</span>';
																		endif;
																	endif;
																?>
															</div>
															<div class="customerHead">
																<img src="<?= base_url(); ?>assets/images/tree/<?= $rightRootImg ?>" data-id="<?= $customerID ?>" class="profileImg" width="60">
																<?php if($root->right && $rightRootTree1 && $rightRootTree1->left && $rightRootData4): ?>
																	<span class="customerLeft">
																		<?php //echo generateCustomerInfo($rightRootTree1->right, $rightRootData4) ?>
																	</span>
																<?php endif; ?>
															</div>
														</td>
														<!-- LEFT -->
														<td style="border: none;" align="center">
															<div style="margin-top: -20px;">
																<?php
																	$leftRootImg = 'disabled.png';
																	$leftRootData5 = null;
																	$customerID = '';
																	if($root->right && $leftRootTree2 && $leftRootTree2->left):
																		$leftRootImg = $leftRootTree2->left ? 'activated.png' : 'disabled.png';
																		$customerID = $leftRootTree2->left ? $leftRootTree2->left : '';
																		if($leftRootTree2->left):
																			$leftRootData5 = $this->db->query("SELECT * FROM customer_info WHERE id=".$leftRootTree2->left." LIMIT 1;")->row();
																			$leftRootImg = $leftRootData5 && $leftRootData5->status == 1 ? $leftRootImg : 'deactivated.png';
																			if($leftRootData5)
																				echo '<span>' . $leftRootData5->customer_name . '('.$leftRootData5->username.')</span>';
																		endif;
																	endif;
																?>
															</div>
															<div class="customerHead">
																<img src="<?= base_url(); ?>assets/images/tree/<?= $leftRootImg ?>" data-id="<?= $customerID ?>" class="profileImg" width="60">
																<?php if($root->right && $leftRootTree2 && $leftRootTree2->left && $leftRootData5): ?>
																	<span class="customerRight">
																		<?php // echo generateCustomerInfo($leftRootTree2->left, $leftRootData5) ?>
																	</span>
																<?php endif; ?>
															</div>
														</td>
														<!-- RIGHT -->
														<td style="border: none;" align="center">
															<div style="margin-top: -20px;">
																<?php
																	$rightRootImg = 'disabled.png';
																	$rightRootData5 = null;
																	$customerID = '';
																	if($root->right && $leftRootTree2 && $leftRootTree2->left):
																		$rightRootImg = $leftRootTree2->right ? 'activated.png' : 'disabled.png';
																		$customerID = $leftRootTree2->right ? $leftRootTree2->right : '';
																		if($leftRootTree2->right):
																			$rightRootData5 = $this->db->query("SELECT * FROM customer_info WHERE id=".$leftRootTree2->right." LIMIT 1;")->row();
																			$rightRootImg = $rightRootData5 && $rightRootData5->status == 1 ? $rightRootImg : 'deactivated.png';
																			if($rightRootData5)
																				echo '<span>' . $rightRootData5->customer_name . '('.$rightRootData5->username.')</span>';
																		endif;
																	endif;
																?>
															</div>
															<div class="customerHead">
																<img src="<?= base_url(); ?>assets/images/tree/<?= $rightRootImg ?>" data-id="<?= $customerID ?>" class="profileImg" width="60">
																<?php if($root->right && $leftRootTree2 && $leftRootTree2->right && $rightRootData5): ?>
																	<span class="customerRight">
																		<?php //echo generateCustomerInfo($leftRootTree2->right, $rightRootData5) ?>
																	</span>
																<?php endif; ?>
															</div>
														</td>
														<!-- LEFT -->
														<td style="border: none;" align="center">
															<div style="margin-top: -20px;">
																<?php
																	$leftRootImg = 'disabled.png';
																	$leftRootData6 = null;
																	$customerID = '';
																	if($root->right && $rightRootTree2 && $rightRootTree2->right):
																		$leftRootImg = $rightRootTree2->left ? 'activated.png' : 'disabled.png';
																		$customerID = $rightRootTree2->left ? $rightRootTree2->left : '';
																		if($rightRootTree2->left):
																			$leftRootData6 = $this->db->query("SELECT * FROM customer_info WHERE id=".$rightRootTree2->left." LIMIT 1;")->row();
																			$leftRootImg = $leftRootData6 && $leftRootData6->status == 1 ? $leftRootImg : 'deactivated.png';
																			if($leftRootData6)
																				echo '<span>' . $leftRootData6->customer_name . '('.$leftRootData6->username.')</span>';
																		endif;
																	endif;
																?>
															</div>
															<div class="customerHead">
																<img src="<?= base_url(); ?>assets/images/tree/<?= $leftRootImg ?>" data-id="<?= $customerID ?>" class="profileImg" width="60">
																<?php if($root->right && $rightRootTree2 && $rightRootTree2->right && $leftRootData6): ?>
																	<span class="customerRight">
																		<?php //echo generateCustomerInfo($rightRootTree2->left, $leftRootData6) ?>
																	</span>
																<?php endif; ?>
															</div>
														</td>
														<!-- RIGHT -->
														<td style="border: none;" align="center">
															<div style="margin-top: -20px;">
																<?php
																	$rightRootImg = 'disabled.png';
																	$rightRootData6 = null;
																	$customerID = '';
																	if($root->right && $rightRootTree2 && gettype($rightRootTree2->right) != null):
																		$rightRootImg = $rightRootTree2->right ? 'activated.png' : 'disabled.png';
																		$customerID =  $rightRootTree2->right ?  $rightRootTree2->right : '';
																		if($rightRootTree2->right):
																			$rightRootData6 = $this->db->query("SELECT * FROM customer_info WHERE id=".$rightRootTree2->right." LIMIT 1;")->row();
																			$rightRootImg = $rightRootData6 && $rightRootData6->status == 1 ? $rightRootImg : 'deactivated.png';
																			if($rightRootData6)
																				echo '<span>' . $rightRootData6->customer_name . '('.$rightRootData6->username.')</span>';
																		endif;
																	endif;
																?>
															</div>
															<div class="customerHead">
																<img src="<?= base_url(); ?>assets/images/tree/<?= $rightRootImg ?>" data-id="<?= $customerID ?>" class="profileImg" width="60">
																<?php if($root->right && $rightRootTree2 && $rightRootTree2->right && $rightRootData6): ?>
																	<span class="customerRight">
																		<?php //echo generateCustomerInfo($rightRootTree2->right, $rightRootData6) ?>
																	</span>
																<?php endif; ?>
															</div>
														</td>
													</tr>
												</table>
								<?php  
								
									if ($this->uri->segment(3)) :
										echo "succesfully";
									endif;
								?>
							</div>
					
					
					
					
					<!-- tree Content end-->
                    
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
     
