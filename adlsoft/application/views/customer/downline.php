<div class="main-content">
    <div class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-xs-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                        <div class="row">
                         <div class="col-xs-6 col-md-6 col-lg-6">
                            <h4><?php echo $smallTitle;?></h4>
                            </div>
                            <div class="col-xs-6 col-md-6 col-lg-6">
                            <a href="">All Downline</a>
                            </div>
                            </div>

                        </div>

                        <div class="card-body">

                        <div class="col-xs-12 col-md-12 col-lg-12">
                         <div class="row">
                         <div class="col-xs-6 col-md-6 col-lg-6">
                            <div class="card-content table-full-width">
                                <h4 class="leftdownline">Downline List (In-Direct) Left</h4>
                                <table class="table table-bordered table-hover table-responsive text-nowrap">
                                <thead>
                                    <tr class="table-primary">
                                        <th>#</th>
                                        <th>User ID</th>
                                        <th>Name</th>
                                        <th>Joining Date</th>
                                        <th>Mobile</th>
                                        <!-- <th>Position</th> -->
                                        <th>Status</th>
                                        <th>Activate Date</th>
                                    </tr>
                                </thead>
                                    <tbody>
                                    <?php
                                        
                                       $i=1;
                                       if($tabv==1){ 
                                        foreach ($left->result() as $dtt) 
                                        {
                                            $this->db->where('id',$dtt->c_id);
                                           $dat= $this->db->get('customer_info')->row();
                                        ?>                                  
                                      
                                        <tr>
                                        <td><?php echo $i;?></td>
                                            <td><?php echo  $dat->username; ?></td>
                                            <td><?php echo  $dat->customer_name; ?></td>
                                            <td><?php echo  $dat->joining_date; ?></td>
                                            <td><?php echo  $dat->mobilenumber; ?></td>
                                            <!-- <td><?php //echo  $dat->c_id; ?></td> -->
                                            <td><?php if($dat->status==1) { echo "<label style='color:green'>ACTIVE</label>"; } else { echo "<label style='color:red'>NOT ACTIVE</label>"; }  ; ?></td>
                                            <td><?php echo  $dat->active_date; ?></td>
                                            <!-- <td></td> -->
                                        </tr>
                                        <?php $i++; }}
                                        else{
                                        	if($leftrootid){
                                        	$this->db->where('id',$leftrootid);
                                        	$dat= $this->db->get('customer_info')->row();
                                        	
                                        	
                                        ?>
                                        	
                                        	<tr>
                                        	<td><?php echo $i;?></td>
                                        	  <td><?php echo  $dat->username; ?></td>
                                        	   <td><?php echo  $dat->customer_name; ?></td>
                                        	    <td><?php echo  $dat->joining_date; ?></td>
                                        	     <td><?php echo  $dat->mobilenumber; ?></td>
                                        	      <!-- <td><?php //echo  $dat->c_id; ?></td> -->
                                        	      <td><?php if($dat->status==1) { echo "<label style='color:green'>ACTIVE</label>"; } else { echo "<label style='color:red'>NOT ACTIVE</label>"; }  ; ?></td>
                                        	       <td><?php echo  $dat->active_date; ?></td>
                                        	        <!-- <td></td> -->
                                        	        </tr>
                                        	                                        
                                       <?php $r=0; foreach ($left as $dtt): 
                                        
                                            $this->db->where('id',$dtt[$r]);
                                           $dat= $this->db->get('customer_info')->row();
                                        ?><tr>
                                        	<td><?php echo $r+2;?></td>
                                        	  <td><?php echo  $dat->username; ?></td>
                                        	   <td><?php echo  $dat->customer_name; ?></td>
                                        	    <td><?php echo  $dat->joining_date; ?></td>
                                        	     <td><?php echo  $dat->mobilenumber; ?></td>
                                        	      <!-- <td><?php //echo  $dat->c_id; ?></td> -->
                                        	      <td><?php if($dat->status==1) { echo "<label style='color:green'>ACTIVE</label>"; } else { echo "<label style='color:red'>NOT ACTIVE</label>"; }  ; ?></td>
                                        	       <td><?php echo  $dat->active_date; ?></td>
                                        	        <!-- <td></td> -->
                                        	        </tr>
                                        	  <?php $r++;endforeach;}}?>         
                                        </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- //////////right joiner//// -->
                          <div class="col-xs-6 col-md-6 col-lg-6">
                       
                            <div class="card-content table-full-width">
                                <h4 class="leftdownline">Downline List (In-Direct) Right</h4>
                                <table class="table table-bordered table-hover table-responsive text-nowrap">
                                <thead>
                                    <tr class="table-primary">
                                        <th>#</th>
                                        <th>User ID</th>
                                        <th>Name</th>
                                        <th>Joining Date</th>
                                        <th>Mobile</th>
                                        <!-- <th>Position</th> -->
                                        <th>Status</th>
                                        <th>Activate Date</th>
                                    </tr>
                                </thead>
                                    <tbody>
                                    <?php
                                        
                                    if($tabv==1){
                                        $i=1;
                                        foreach ($right->result() as $dtt) 
                                        {
                                            $this->db->where('id',$dtt->c_id);
                                           $dat= $this->db->get('customer_info')->row();
                                        ?>                                  
                                      
                                        <tr>
                                        <td><?php echo $i;?></td>
                                            <td><?php echo  $dat->username; ?></td>
                                            <td><?php echo  $dat->customer_name; ?></td>
                                            <td><?php echo  $dat->joining_date; ?></td>
                                            <td><?php echo  $dat->mobilenumber; ?></td>
                                            <!-- <td><?php //echo  $dat->c_id; ?></td> -->
                                            <td><?php if($dat->status==1) { echo "<label style='color:green'>ACTIVE</label>"; } else { echo "<label style='color:red'>NOT ACTIVE</label>"; }  ; ?></td>
                                            <td><?php echo  $dat->active_date; ?></td>
                                            <!-- <td></td> -->
                                        </tr>
                                        <?php $i++; }}else { 
                                        	if($leftrootid){
                                        	$this->db->where('id',$rightrootid);
                                        	$dat= $this->db->get('customer_info')->row();
                                        	
                                        	
                                        ?>
                                        	
                                        	<tr>
                                        	<td><?php echo $i;?></td>
                                        	  <td><?php echo  $dat->username; ?></td>
                                        	   <td><?php echo  $dat->customer_name; ?></td>
                                        	    <td><?php echo  $dat->joining_date; ?></td>
                                        	     <td><?php echo  $dat->mobilenumber; ?></td>
                                        	      <!-- <td><?php //echo  $dat->c_id; ?></td> -->
                                        	      <td><?php if($dat->status==1) { echo "<label style='color:green'>ACTIVE</label>"; } else { echo "<label style='color:red'>NOT ACTIVE</label>"; }  ; ?></td>
                                        	       <td><?php echo  $dat->active_date; ?></td>
                                        	        <!-- <td></td> -->
                                        	        </tr>
                                        	                                        
                                       <?php $i=0; foreach ($right as $dtt): 
                                        
                                            $this->db->where('id',$dtt[0]);
                                           $dat= $this->db->get('customer_info')->row();
                                        ?><tr>
                                        	<td><?php echo $i+2;?></td>
                                        	  <td><?php echo  $dat->username; ?></td>
                                        	   <td><?php echo  $dat->customer_name; ?></td>
                                        	    <td><?php echo  $dat->joining_date; ?></td>
                                        	     <td><?php echo  $dat->mobilenumber; ?></td>
                                        	      <!-- <td><?php //echo  $dat->c_id; ?></td> -->
                                        	      <td><?php if($dat->status==1) { echo "<label style='color:green'>ACTIVE</label>"; } else { echo "<label style='color:red'>NOT ACTIVE</label>"; }  ; ?></td>
                                        	       <td><?php echo  $dat->active_date; ?></td>
                                        	        <!-- <td></td> -->
                                        	        </tr>
                                        	  <?php $i++; endforeach;}}?> 
                                        </tbody>
                                </table>
                            </div>
                        
                        </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>