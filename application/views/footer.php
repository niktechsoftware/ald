<footer class="footer-style-1">
	<div class="container">
		<div class="row">
			<!-- Column 1 Start -->
			<div class="col-md-4 col-sm-6 col-12">
				<h3>About Us</h3>
				<a href="#"><img src="<?php echo base_url();?>assets/img/logos/adl1.jpg" alt="img" width="150"></a>

				<div class="mt-20">
					<p>ADLGM Sales Pvt. Ltd. परिवार में आपका हार्दिक स्वागत है | अत्यंत प्रसन्ता का विषय है की आपके विश्वास एवं परम सहयोग के होते हुए कंपनी विगत साल से MLM के क्षेत्र में कार्य कर रही है |
					हमारी कंपनी में कई वर्षों के अनुभवी मेनेजमेंट सदैव आपके साथ हैं |</p>	
				</div>
				
				<ul class="footer-style-1-social-links">
					<li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
					<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
					<li><a href="#"><i class="fab fa-twitter"></i></a></li>
				
				</ul>
			</div>
			<!-- Column 1 End -->

			<!-- Column 2 Start -->
			<!--<div class="col-md-3 col-sm-6 col-12">
				<h3>Latest News</h3>
				<ul class="footer-style-1-latest-news">
					<li><span>01.01.2020</span><a href="#">Save Time & Money In Your Business</a></li>
					<li><span>01.01.2020</span><a href="#">Excellent Business ...</a></li>
					<li><span>01.01.2020</span><a href="#">Multiple Incomes</a></li>
				</ul>
			</div>-->
			<!-- Column 2 End -->

			<!-- Column 3 Start -->
			<div class="col-md-3 col-sm-6 col-12">
				<h3>Contact Info</h3>
				<ul class="footer-style-1-contact-info">
				    <li><i class="fa fa-phone"></i> <span>+91 7860288090</span></li>
				    <li><i class="fa fa-phone"></i> <span>+91 9506804800</span></li>
					<li><i class="fa fa-envelope-open"></i> <span>info@gmail.com</span></li>
					<li><i class="fa fa-map-marker-alt"></i> <span>Address:Ward No.4 Ambedkar Nagar Kasia Kushinagar 274402</span>
</li>
					
				</ul>
			</div>
			<!-- Column 3 End -->

			<!-- Column 4 Start -->
			<div class="col-md-2 col-sm-6 col-12">
				<h3>Quick Links</h3>
				<ul class="footer-style-1-links">
					<li><a href="<?php echo base_url();?>index.php/welcome/read">About Us</a></li>
					<li><a href="<?php echo base_url();?>index.php/welcome/registration">Registration</a></li>
					<li><a href="<?php echo base_url();?>aldsoft/" target="_blank">Login</a></li>
					<li><a href="<?php echo base_url();?>index.php/welcome">Gallery</a></li>		
					<li><a href="<?php echo base_url();?>index.php/welcome/contact">Contact Us</a></li>
				</ul>
			</div>		
			<!-- Column 4 End -->										
		</div>
	</div>

	<div class="footer-style-1-bar">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 col-12">
					<h5>ADLGM Group © 2019. All Copy Rights Reserved.</h5>
				</div>

				<div class="col-md-6 col-sm-6 col-12">
					<ul class="footer-style-1-bar-links">
						<li><a href="http://schoolerp-niktech.in/" target="_blank">Developed By : Niktech Software Solutions</a></li>
						
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>

<!-- Scroll to top button Start -->
<a href="#" class="scroll-to-top"><i class="fas fa-chevron-up"></i></a>	
<!-- Scroll to top button End -->

<!-- Jquery -->
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>

<!-- Plugins JS-->
<script src="<?php echo base_url();?>assets/js/plugins.js"></script>	

<!-- Navbar JS -->
<script src="<?php echo base_url();?>assets/js/navigation.js"></script>
<script src="<?php echo base_url();?>assets/js/navigation.fixed.js"></script>

<!-- Google Map -->
<script src="<?php echo base_url();?>assets/js/map.js"></script>

<!-- Main JS -->
<script src="<?php echo base_url();?>assets/js/main.js"></script>

    </div>

<!-- Scroll to top button Start -->
<a href="#" class="scroll-to-top"><i class="fas fa-chevron-up"></i></a>	
<!-- Scroll to top button End -->

<!-- Jquery -->
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>

<!-- Plugins JS-->
<script src="<?php echo base_url();?>assets/js/plugins.js"></script>	

<!-- Navbar JS -->
<script src="<?php echo base_url();?>assets/js/navigation.js"></script>
<script src="<?php echo base_url();?>assets/js/navigation.fixed.js"></script>

<!-- Google Map -->
<script src="<?php echo base_url();?>assets/js/map.js"></script>

<!-- Main JS -->
<script src="<?php echo base_url();?>assets/js/main.js"></script>

<!--scriptin registration--->
<script>

 //alert("rahul");
 //$('#regForm').hide();
  $('#parent_id').keyup(function(){
    var parent_id= $('#parent_id').val();
    $.post("<?php echo site_url("welcome/checkID") ?>",{parent_id : parent_id}, function(data){
    	var d = jQuery.parseJSON(data);
		$("#custoStatus").html(d.msg);
 if(d.checkv==true){
	 $('#regForm').show();
 }else{
	 $('#regForm').show();
 }
   
  
  
	});
  });


</script>

    </form>
</body>

</html>
