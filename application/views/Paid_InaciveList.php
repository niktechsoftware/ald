<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Paid InActive Customer List</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                     
                        <thead>
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th>Customer Name</th>
                            <th>Father Name</th>
                            <th>Mobile Number</th>
                            <th>Email Id</th>
                            <th>Current Address</th>
                            <th>City</th>
                            <th>Status</th>
                            <th>Transacton / Reffrence Id</th>
                            <th>Fill Status</th>
                            <th>Confirm</th>
                            <th>Generate Pin</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                        if($row->num_rows()>0){
                          $i=1;
                        foreach($row->result() as $paydata):
                         
                          $this->db->where("id",$paydata->c_id);
                          $this->db->where("status",0);
                          $paydt=$this->db->get("customer_info");
                          if($paydt->num_rows()>0){
                            $data=$paydt->row();
                        ?>
                          <tr>
                            <td><?php echo $i;?></td>
                            <td class="align-middle"><?php echo $data->customer_name;?></td>
                            <td><?php echo $data->fname;?></td>
                            <td><?php echo $data->mobilenumber;?></td>
                            <td><?php echo $data->email;?></td>
                            <td><?php echo $data->current_address;?></td>
                            <td><?php echo $data->city;?></td>
                            <td> <div class="badge badge-warning badge-shadow"><?php if($data->status==0){?><a href="#" style="color:white;"> <?php echo "Paid Inactive"; ?></a> <?php }else{ "Active";}?></div></td>
                            <td><?php if($paydata->reffno){ echo $paydata->reffno;} elseif($paydata->transaction){ echo $paydata->transaction; } else{ ?> 
                             <a href="<?php echo base_url();?>assets/images<?php echo $paydata->uploadfile;?>"> 
                             <img alt="image" src="<?php echo base_url();?>assets/images<?php echo $paydata->uploadfile;?>" width="35"></a>
                            <?php } ?></td>
                            <td> <input type="hidden" id="<?php echo $i;?>id" value="<?php echo $paydata->c_id; ?>" >
                            <input type="text" id="<?php echo $i;?>status" value="<?php echo $paydata->status; ?>" > </td>
                            <td> <button  id="<?php echo $i;?>approve" class="badge badge-success badge-shadow" >Approve</button> </td>
                            <td><button id="<?php echo $i;?>genpin" class="badge badge-info badge-shadow" >Generate Pin</button></td>
                          </tr>
                          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                          <script>
                          $(document).ready(function(){
                           // alert("sdjnjs");
                            $('#<?php echo $i;?>approve').hide();
                            $('#<?php echo $i;?>status').keyup(function(){
                             var st= $('#<?php echo $i;?>status').val();
                            // 
                             if((st.length)>0){
                              $('#<?php echo $i;?>approve').show(); 
                             }
                             else{
                              $('#<?php echo $i;?>approve').hide(); 
                             }

                             $('#<?php echo $i;?>approve').click(function(){
                               var stats =$('#<?php echo $i;?>status').val();
                               var id =$('#<?php echo $i;?>id').val();
                              $.post("<?php echo base_url()?>index.php/adminController/approve_paystatus" ,
                               { stats : stats , id : id } ,
                                function(data){
                                  // alert(data);
                                  $('#<?php echo $i;?>approve').html(data); 


                              });
                            });


                            });
                            $('#<?php echo $i;?>genpin').click(function(){
                              var id = $('#<?php echo $i;?>id').val();
                              alert(id);
                              $.post("<?php echo base_url();?>index.php/adminController/generatepain" , 
                              { id : id } ,
                              function(data){
                                
                                $('#aarju').html(data);


                              });

                          

                          });
                        });
                         
                          </script>


                          <?php  } $i++; endforeach; }else{
                          echo "data not found";
                        } ?>
                          
                        </tbody>
                        
                      </table>
                    </div>
                    <div id="aarju">
                    
                    </div>
                  </div>
                </div>
              </div>
            </div>
