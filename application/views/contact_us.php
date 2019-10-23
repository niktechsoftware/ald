
<?php $this->load->view("header")?>
<div class="section-block">
	<div class="container">	
		<div class="row">
			<div class="col-md-4 col-sm-12 col-12">
				<div class="contact-box-data">
					<div class="section-heading left-holder">
						<h5 class="bold">Contact Us</h5>
						<div class="section-heading-line"></div>
					</div>
					<div class="contact-box-place clearfix">
						<div class="contact-box-icon">
							<i class="ti-map-alt"></i>
						</div>
						<div class="contact-box-text">
							<h5>Office</h5>
							<p>Word No.4 Ambedkar Nagar Kasia Kushinagar - 281001, (U.P.)<br />
							Contact No. : +91 7860288090, +91 9506804800
							</p>
						</div>
					</div>
				<!--	<div class="contact-box-place clearfix">
						<div class="contact-box-icon">
							<i class="ti-map-alt"></i>
						</div>
					<div class="contact-box-text">
							<h5>Franchisee Office</h5>
							<p>Shop No. 51, Thakur Market Kajrauty Sadabad, Hathras - 281306, (U.P.)<br />
                                Contact No. : 9759330822<br />
                                Code No. DYD00007 </p>
						</div>
					</div>
					-->
					<div class="contact-box-place clearfix">
						<div class="contact-box-icon">
							<i class="ti-mobile"></i>
						</div>
						<div class="contact-box-text">
							<h5>Phone</h5>
							<p>1800-xxx-xxxx</p>
						</div>
					</div>

					<div class="contact-box-place clearfix">
						<div class="contact-box-icon">
							<i class="ti-email"></i>
						</div>
						<div class="contact-box-text">
							<h5>Email</h5>
							<p>info@adl.in.net</p>
						</div>
					</div>

					<div class="contact-box-place clearfix">
						<div class="contact-box-icon">
							<i class="ti-alarm-clock"></i>
						</div>
						<div class="contact-box-text">
							<h5>Open Hours</h5>
							<p>Mon — Sat: 10:00 am — 07:00 pm </p>
						</div>
					</div>
				</div>
			</div>
		
			<div class="col-md-8 col-sm-12 col-12">
				<div class="contact-box-4">
					<div class="section-heading left-holder mt-15">
						<h5 class="bold">Send us a message</h5>
						<div class="section-heading-line"></div>
					</div>
					
						<div class="row">
							<div class="col-md-12 form-group">
								<textarea class="form-control" name="message" placeholder="Message"></textarea>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<input class="form-control" type="text" name="name" placeholder="Name">
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<input class="form-control" type="email" name="email" placeholder="E-mail">
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<input class="form-control" type="email" name="email" placeholder="Phone">
							</div>
							<div class="col-md-12 mt-10 mb-30">
								<button type="submit" class="primary-button button-sm semi-rounded">Send Message</button>
							</div>
						</div>
					
				</div>
			</div>
		</div>	
	</div>
</div>
<!-- Contact Section END -->
<!-- Map START -->
<!-- Map START -->
    </div>
    <div>
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