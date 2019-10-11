<div class="main-content">
    <div class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-xs-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Customer DownLine</h4>
                        </div>

                        <div class="card-body">
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
                                        
                                        $id = $this->session->userdata("customer_id");   
                                        // echo $id;                                    
                                        $this->db->where('leftjoiner', $id);
                                        $dt= $this->db->get('silver_tree');
                                        // print_r($dt);
                                        $i=1;
                                        foreach ($dt->result() as $dtt) 
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
                                        <?php $i++; } ?>
                                        </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- //////////right joiner//// -->
                        <div class="card-body">
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
                                        
                                        $id = $this->session->userdata("customer_id");   
                                        // echo $id;                                    
                                        $this->db->where('rightjoiner', $id);
                                        $dt= $this->db->get('silver_tree');
                                        // print_r($dt);
                                        $i=1;
                                        foreach ($dt->result() as $dtt) 
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
                                        <?php $i++; } ?>
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