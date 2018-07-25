<?php $page_title ="Contact Us";?>
	<?php $pageDescription ="Contact us for a free esitmate for all of your decorating or maintenace needs..";?>
		<?php $page = "Contact"; ?>

			<?php include("header.php");?>
				<div class="top-img">
					<img style="width:100%;" src="img/contactusnew.jpg" alt="Contact us header">
					<!--<div class="text">
						Thompsons Property Care
					</div>-->
				</div>
				<div class="main-content">
					<div class="container">
						<div class="user-info lightbg">
							<div class="user-info-inner" style="color:#4e4e4e;">
								<div class="row">
									<div class="col-sm-12 col-md-12 col-lg-12 darktxt">
										<div class="home-main-content">
											<p class="home-headings">Contact Us</p>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-8 col-sm-6 col-lg-8">
										<p>We're happy to answer any questions you have or provide you with a free estimate. Please fill in the form below, send us an email or give us a call.</p>
										<form name="contactform" id="contactform" method="POST" autocomplete="off">
											<label>
												Your Name<span class="req">*</span>
											</label>
											<div class="form-group">
												<input id="name" type="text" name="name">
												<div id="required-name" class="form-error"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Please tell us your name</div>
											</div>
											<label>
												Email Address<span class="req">*</span>
											</label>
											<div class="form-group">
												<input id="email" type="e-mail" name="email">
												<div id="required-e-mail" class="form-error"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Please tell us your e-mail address</div>
											</div>
											<label>
												Contact Number
											</label>
											<div class="form-group">
												<input id="contact" type="text" name="contact" />
											</div>
											<label>
												Enquiry<span class="req">*</span>
											</label>
											<div class="form-group">
												<textarea rows="6" id="enquiry" name="enquiry"></textarea>
												<div id="required-enquiry" class="form-error"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Please tell us your enquiry</div>
											</div>
											<div class="form-group">
												<input type="submit" value="Submit" id="Sbmt" class="formbtn">
											</div>
										</form>
									</div>
									<div class="col-md-4 col-sm-6 col-lg-4">
										<div class="email-section break">
											<p class="contact-header-text">Email:</p>
											<p><a style="color:#4e4e4e;" href="mailto:enquiries@thompsonspropertycare.co.uk"> enquiries@thompsonspropertycare.co.uk</a></p>
										</div>
										<div class="phone-section break">
											<p class="contact-header-text">Phone:</p>
											<p><a style="color:#4e4e4e;" href="tel:01295258052">01295 258 052</a></p>
											<p><a style="color:#4e4e4e;" href="tel:07821795280">07821 795 280</a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="myModal" class="modal fade">
					<div class="modal-content">
						<i style="font-size:100px" class="fas fa-thumbs-up"></i>
						<h3>THANK YOU</h3>
						<p>Your message has been received and we will be contacting you shortly to follow up. If you would like to speak to someone immediately feel free to call.</p>
						<p><a href="tel:01295 258 052">01295 258 052</a></p>
						<a href="/"><span class="close"><i class="fa fa-times" aria-hidden="true"></i></span></a>
					</div>
				</div>
				<?php include("footer.php");?>