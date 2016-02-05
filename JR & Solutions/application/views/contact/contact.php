	<div class="container-fluid page-content-container">
		
		<div class="row">
			<!-- Modal Alert Message Box -->
			<?php 
			if(!empty($message)){?>

			<?php	if(array_key_exists('success',$message)){ ?>

			<div class="alert alert-success" id="sucess-message">
				<a href="#" class="close" data-dismiss="alert">&times;</a>
				<strong>Success! </strong><?php echo $message['success'] ?>
			</div>

			<?php }else{?>

			<div class="alert alert-danger" id="failure-message">
				<a href="#" class="close" data-dismiss="alert">&times;</a>
				<strong>Failed! </strong><?php echo $message['failure'] ?>
			</div>

			<?php } } ?>
			

			<header>
				<h3>We love to hear and help you </h3>
			</header>
			
			<div class="description">
			We are here to answer any question you may have about buying home,personal loans and insurance.
			Reach out to us and we will respond you as soon as we can.
			Even if there is something you have always wanted to  experience financial help or advice to balance
			your financial need and family happiness,let us know and we promise we'll do our best to find out the
			best advice and solution for you.
			</div>

			<!-- contact us page form -->
			<div class="col-md-4" id="contact-page-form-wrapper">
			<h4>Drop us a line</h4>

				<form id="contact-form" role="form" method="post" action="<?php echo base_url('contact/process_form')?>">


					<div class="form-group">
						<input type="text" class="form-control" name="name" id="name" value="<?php echo set_value('name') ?>" placeholder="What shall we call you ?">
						<p class="form-error"><?php echo form_error('name'); ?></p>
					</div>


					<div class="form-group">
						<input type="email" class="form-control" name="email" id="email" value="<?php echo set_value('email') ?>"placeholder="Where to send email back to you ?">
						<p class="form-error"><?php echo form_error('email'); ?></p>
					</div>

					<div class="form-group">
						<input type="phone" class="form-control" name="phone" id="phone" value="<?php echo set_value('phone') ?>" placeholder="Your contact number ">
						<p class="-"><?php echo form_error('phone'); ?></p>
					</div>


				<div class="form-group">
					<textarea class="form-control" name="message" rows="5" id="message" value="<?php echo set_value('message') ?>"></textarea>
					<p class="form-error"><?php echo form_error('message'); ?></p>
				</div>



				<button type="submit" class="btn btn-info " id="contact-form-submit">Submit</button>

			</form>
		</div>

		<!-- Middle white space -->
		<div class="col-md-1"></div>


		<div class="col-md-7">
		<h4>Find us</h4>

			<div class="google-map-wrapper align-right">
				<div id="googleMap" ></div>
				<br><br>
				<ul id="footer-address">
					<li><i class="fa fa-envelope fa-lg"></i>&nbsp;&nbsp;info@jrsolutions.com.au</li>
					<li><i class="fa fa-phone fa-lg"></i> &nbsp;&nbsp;02 80650870</li>
					<li><i class="fa fa-location-arrow fa-lg"></i>&nbsp;&nbsp; 23 St Georges Parade, Hurstville, NSW 2220</li>
				</ul>
			</div>
		</div>

	</div>

</div>	<!--End container-fluid" -->
