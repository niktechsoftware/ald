<style>

h4 {
  position: relative;
  text-transform: uppercase;
  letter-spacing: 6px;
  font-size: 10vw;
  font-weight: 900;
  text-decoration: none;
  color: white;
  display: inline-block;
  background-size: 120% 100%;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  -moz-background-clip: text;
  -moz-text-fill-color: transparent;
  -ms-background-clip: text;
  -ms-text-fill-color: transparent;
  background-clip: text;
  text-fill-color: transparent;
  background-image: linear-gradient(45deg, 
                    #7794ff, 
                    #44107A,
                    #FF1361,
                    #FFF800);
  /*animation: 5.180s shake infinite alternate;*/
}

@keyframes shake {
  0% { transform: skewX(-15deg); }
  5% { transform: skewX(15deg); }
  10% { transform: skewX(-15deg); }
  15% { transform: skewX(15deg); }
  20% { transform: skewX(0deg); }
  100% { transform: skewX(0deg); }  
}


</style>


<?php $this->load->view("header")?>
<!--<div id="UpdateProgress" style="display:none;">-->
	
<!--                        <div id="overlay">-->
<!--                <div id="modalprogress">-->
<!--                    <div id="theprogress">-->
<!--                        <img id="Image1" src="img/progress.gif" alt="Processing" style="width:230px;border-width:0px;" /><br />-->
<!--                        Please wait...</div></div></div>-->
                    
<!--</div>	-->
                

						<div >
							<center><h4>Our Plans For Customers</h4></center>
						</div>
						<div style="margin-top:5%">
						    <center><h4>REWARD SILVER</h4></center>
						</div>
						    <table class="table table-bordered">
							    <tbody>
    							 <?php $silver = $this->db->get('silver_reward')->result();
    							 //print_r($silver);
    							 $i=1;
    						    foreach($silver as $sdata)
    						    { ?>
    							        <tr>
    							            <td><?php echo $i."Reward";?></td>
    							            <td><?php echo $sdata->root_no."&nbsp;Pair";?></td>
    							            <td><?php echo $sdata->reward;?></td>
    							        </tr>
    							   
    						    <?php $i++; }
    						    ?>
    						    </tbody>
							</table>
					
						<div style="margin-top:5%">
						    <center><h4>REWARD GOLD</h4></center>
						</div>
						    <table class="table table-bordered">
							    <tbody>
    							 <?php $silver = $this->db->get('crown_reward')->result();
    							 //print_r($silver);
    							 $i=1;
    						    foreach($silver as $sdata)
    						    { ?>
    							        <tr>
    							            <td><?php echo $i."Reward";?></td>
    							            <td><?php echo $sdata->pair_no."&nbsp;Pair";?></td>
    							            <td><?php echo $sdata->reward;?></td>
    							        </tr>
    							   
    						    <?php $i++; }
    						    ?>
    						    </tbody>
							</table>
						<div style="margin-top:5%">
						    <center><h4>REWARD DIAMOND</h4></center>
						</div>
						 <table class="table table-borderd">
							    <tbody>
    							 <?php $silver = $this->db->get('diamond_reward')->result();
    							 //print_r($silver);
    							 $i=1;
    						    foreach($silver as $sdata)
    						    { ?>
    							        <tr>
    							            <td><?php echo $i."Reward";?></td>
    							            <td><?php echo $sdata->pair_no."&nbsp;Pair";?></td>
    							            <td><?php echo $sdata->reward;?></td>
    							        </tr>
    							   
    						    <?php $i++; }
    						    ?>
    						    </tbody>
							</table>
						<div style="margin-top:5%">
						    <center><h4>REWARD CROWN</h4></center>
						</div>
						  <table class="table table-bordered">
							    <tbody>
    							 <?php $silver = $this->db->get('crown_reward')->result();
    							 //print_r($silver);
    							 $i=1;
    						    foreach($silver as $sdata)
    						    { ?>
    							        <tr>
    							            <td><?php echo $i."Reward";?></td>
    							            <td><?php echo $sdata->pair_no."&nbsp;Pair";?></td>
    							            <td><?php echo $sdata->reward;?></td>
    							        </tr>
    							   
    						    <?php $i++; }
    						    ?>
    						    </tbody>
							</table>
					</div>
				</div>
		
<!-- Data Tables Stripped & Bordered Section END -->

 
        


<!-- Action Box START -->
<div class="action-box action-box-md grey-bg center-holder-xs">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-sm-10 col-12">
				<h3 class="bold">Business Plan</h3>
				<p>A great business opportunity to fulfil your dreams.</p>	
			</div>
			<div class="col-md-2 col-sm-2 col-12 right-holder center-holder-xs">
				<a href="<?php echo base_url();?>assets/img/adlplan.pdf"  target="_blank" class="button-md primary-button">Read More</a>
				</div>
		</div>
	</div>
</div>


<?php echo $this->load->view("footer"); ?>