<table class="table table-striped" id="table-2">
                     
                     <thead>
                       <tr>
                         <th class="text-center"> #</th>
                         <th>Customer Name</th>
                         <th>Father Name</th>
                         <th>Mobile Number</th>
                         <th>Email Id</th>
                         <th>Current Address</th>
                         <th>City</th>
                         <th>Status</th>
                       
                       </tr>
                     </thead>
                     <tbody>
                     <?php 
                     // if($row->num_rows()>0){
                     //   $i=1;
                     // foreach($row->result() as $data):
                       // $this->db->where("c_id",$data->id);
                       // $paydt=$this->db->get("pay_details");
                       // if($paydt->num_rows()==0){
                     ?>
                       <tr>
                         <td><?php echo $i;?></td>
                         <td class="align-middle"><?php echo $data->customer_name;?></td>
                         <td><?php echo $data->fname;?></td>
                         <td><?php echo $data->mobilenumber;?></td>
                         <td><?php echo $data->email;?></td>
                         <td><?php echo $data->current_address;?></td>
                         <td><?php echo $data->city;?></td>
                         <td> <div class="badge badge-danger badge-shadow"><?php if($data->status==0){?><a href="#" style="color:white;"> <?php echo "Inactive"; ?></a> <?php }else{ "Active";}?></div></td>
                         
                        
                       </tr>
                     
                       
                     </tbody>
                     
                   </table>