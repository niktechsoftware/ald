<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4><?php echo $smallTitle;?></h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                       <table id="example" class="display table table-striped text-nowrap" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                            <tr style="font-size: 18px;font-family:Arial;background-color: pink;text-align:center;">
                                                   <th>S.N.</th>
                                                   <th>Customer username</th>
                                                   <th>Total Mpin</th>
                                                   <th>Used Mpin</th>
                                                   <th>Unused Mpin</th>
                                                  
                                                   <th>Mbalance</th>
                                                   <th>Recharge By Admin</th>
												    <td>Pay</td> 
                                            </tr>
                                        </thead>
                                        <tbody >
                                        	<?php $i = 1;$s1=0;$s2=0;$s3=0;$s4=0;$s5=0;$s6=0;?>

                                        	<?php $res = 	$this->db->get('mpin_master')->result();
													?>
                                               
                                        	<?php foreach($res as $row):
                                        	 $this->db->where("id",$row->customer_id);
                                        	$custdt= $this->db->get("customer_info")->row();
                                        	
                                        	?>
                                            <tr style="font-size: 16px;text-align:center;">
                                              
                                               
                                                <td><?php echo $i;?></td>
                                                
                                                <td><?php echo $custdt->username;?></td>
                                                
                                                 <?php
                                                
												  	$this->db->where("id",$row->id);
												  	$tot=$this->db->get('mpin');
													
												// $this->db->where("customerid",$row->id);
												//	$this->db->select('id, COUNT(id) as total' );
												//	$this->db->group_by('id');  
												
											
												/*$this->db->where("customer_id",$row->id);
                                                $numr = $this->db->get("mpin_master");
                                                $nm = $numr->num_rows();
                                                $s1=$s1+$nm;*/
												?>
                                               <td><a class="btn btn-info" href="<?php echo base_url();?>index.php/pin/generatePin/<?php echo $row->id;?>"><?php echo $tot->num_rows(); ?></a></td>
                                               
                                                <?php 
												$this->db->where("id",$row->id);
													$this->db->where("status",1);
												
													$use=$this->db->get('mpin');
											
												/*$this->db->where("status",1);
                                                $this->db->where("customerid",$row->id);
                                                $numr1 = $this->db->get("mpin");
                                                $nm1 = $numr1->num_rows();
                                                $s2=$s2+$nm1;
												*/?>
                                               <td><a class="btn btn-info" href="<?php echo base_url();?>index.php/pin/mpinused/<?php echo $row->id;?>"><?php echo $use->num_rows(); ?></a></td>
                                               
                                               <?php $nm2 = $tot->num_rows() -$use->num_rows();
                                               $s3=$s3+$nm2;?>
                                              <td><?php echo $nm2; ?></td>
                                              
                                             
                                               
                                               <?php 
											   $ttype=7;
											   $paid_to=$row->id;
											   $direct= $this->cmodel->getsumamount($paid_to,$ttype);
											   if($direct->num_rows()>0){
												 $dr =  $direct->row()->amount;
											   }else{
												   $dr=0;
											   }
											    $ttype1=2;
											    $direct= $this->cmodel->getsumamount($paid_to,$ttype1);
											   if($direct->num_rows()>0){
												 $auto =  $direct->row()->amount;
											   }else{
												   $auto=0;
											   }
											      $ttype3=3;
											    $direct= $this->cmodel->getsumamount($paid_to,$ttype3);
											   if($direct->num_rows()>0){
												 $roi =  $direct->row()->amount;
											   }else{
												   $roi=0;
											   }
											      $ttype8=8;
											    $direct= $this->cmodel->getsumamount($paid_to,$ttype8);
											   if($direct->num_rows()>0){
												 $match =  $direct->row()->amount;
											   }else{
												   $match=0;
											   }
											 $totmbal=  $match + $roi +$auto +$dr;
											// echo $totmbal;
                                             //  $this->db->where("c_id",$row->id);
                                             //  $amount = $this->db->get("silver_mbalance");
                                             //  $nm4=$amount->row()->amount;
                                               $s5=$s5+$totmbal;
                                               ?>
                                               <td><?php echo $totmbal; ?></td> 
                                               
                                               <?php 
											   $this->db->select_sum("amount");
											   $this->db->where("paid_from",$row->customer_id);
											   $this->db->where("debit_credit",0);
                                               $outeramount = $this->db->get("outer_daybook"); 
                                               if($outeramount->num_rows()>0)
                                               { $nm5=$outeramount->row()->amount;
                                               $s6=$s6+$nm5;?>
                                               <td><?php echo $nm5; ?></td> 
                                              <?php  }
                                              else
                                              {  ?>
                                                <td></td> 
                                             <?php  }?>
                                                <td>
                        <input type="text" id ="pay<?php echo $i;?>" name ="pay" >
                       <button id ="btn<?php echo $i;?>" class="btn btn-primary">Pay</button> </td> 
                                            </tr>
											<script>
                     $("#btn<?php echo $i;?>").click(function(){
                         var pay = $("#pay<?php echo $i;?>").val();
						 alert(pay);
                        /* $.ajax({
                                   
                                    "url": "<?php echo site_url('pin/pay') ?>",
                                     "method": 'POST',
                                     "data": {pay : pay},
                                     beforeSend: function(data) {
                                        $("#activeid<?php echo $i;?>").val("<center><img src='<?php echo base_url(); ?>assets/img/loading.gif' /></center>")
                                     },
                                     success: function(data) {
                                         $("#activeid<?php echo $i;?>").val(data);
                                     },
                                     error: function(data) {
                                         $("#activeid<?php echo $i;?>").val(data);
                                     }
                                 })*/

                     });
                     </script>
                                            <?php $i++; ?>
                                            <?php endforeach;?>
                                            
                                            
                                            
                                           
                                        </tbody>
                                        <tfoot>
                                         <tr style="font-size: 18px;font-family:Arial;background-color: pink;">
                                                   <th>Total</th>
                                                   <th></th>
                                                   <th class="text-center"><?php echo $s1?></th>
                                                   <th class="text-center"><?php echo $s2?></th>
                                                   <th class="text-center"><?php echo $s3?></th>
                                                   <th class="text-center"> <?php echo $s4?></th>
                                                   <th class="text-center"><?php echo $s5?></th>
                                                   <th class="text-center"><?php echo $s6?></th>
												   <th class="text-center"></th>
                                            </tr>
                                        
                                        </tfoot>
                                       </table>  
                    </div>
                  </div>
                </div>
              </div>
            </div>
