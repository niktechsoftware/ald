


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
                      <table class="table table-striped" id="table-1">
                     
                        <thead>
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th>Customer ID</th>
                            <th>Amount</th>
                            <th>Type</th>
                            <th>Invoice No</th>
                            <th>Debit/Credit</th>
                            <th>Date</th>
                           
                          </tr>
                        </thead>
                        <tbody>

                        <?php 
                        
                        if($gdetails->num_rows()>0){
                          $i=1;
                        foreach($gdetails->result() as $data):
                         $id= $data->paid_from;
                        
                          $custnm= $this->cmodel->getCrecord($data->paid_from);
                          
                        ?>
                          <tr>
                            <td><?php echo $i;?></td>
                            <td class="align-middle"><?php  echo $data->paid_to; ?></td>
                            
                            <td><?php echo $data->amount;?></td>
                            <td><?php echo $data->transaction_type;?></td>
                            <td><?php echo $data->invoice_no;?></td>
                        <td><?php if(($data->debit_credit)==1){ ?><button class="badge badge-success badge-shadow"><?php echo "Credit"; ?></button> <?php } else{ ?><button class="badge badge-danger badge-shadow"> <?php echo "Debit";?></button> <?php } ?></td>
                            <td><?php echo $data->date;?></td>
                           
                          </tr>
                          
                          <?php //} 
                          $i++; endforeach; } else{
                            echo "data not found";
                          } ?>
                        </tbody>
                        
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
            </section>
            </div>
