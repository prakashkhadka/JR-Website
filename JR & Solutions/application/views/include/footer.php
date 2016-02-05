<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<footer>

	<div class="col-md-4">

		<div class="footer-content-holder">

			<header>
				<h4> JR & SOLUTIONS </h4>
				<div class="footer-content-box">
					I am a web-developer with an acute sense of
					precision and hunger for knowledge. I am looking to incorporate the practical
					experiences and theoretical ideas into tackling the problems with real solutions.
					I aim to use my skills through both on-the-job experience and further training and 
					endeavour to produce high-quality work that will contribute to the continued success of my employer.
					
					<address>
						<ul id="footer-address">
							
							<li>Phone: +6128050670</li>
							<li>Fax :+6135067807</li>
							<li>13 Pitt Street ,Sydney</li>
							<li>NSW Australia</li>

						</ul>
					</address>
					
				</div><!-- End footer-split-box -->
			</header>

		</div>
	</div>


	<div class="col-md-4"></div><!--Middle empty space -->


	<div class="col-md-4">

		<div class="footer-content-holder">

			<header>
				<h4 >GET IN TOUCH </h4>

			</header>

			<div class="footer-content-box">
				<div class="alert alert-success" id="footer-form-submission-sucess">
					<strong>Success!</strong> Indicates a successful or positive action.
				</div>

				<form  id="footer-form"  >

					<div class="form-group" >
						<input class="form-control" name="footer-form-name" type="text" placeholder="Enter full name"> 
					</div>
					
					<div class="form-group">
						<input class="form-control"  name="footer-form-email" type="text" placeholder="Enter email address"> 
					</div>

					<div class="form-group ">
						<input class="form-control" name="footer-form-phone" type="text" placeholder="Enter phone number"> 
					</div>


					<div class="form-group ">
						<textarea class="form-control" name="footer-form-message"type="text" rows="5" cols="35"> </textarea>
					</div>


					<div class="form-group ">
						<button class="btn btn-lg btn-info form-control" type="submit" id="footer-form-submit-btn">Send</button>
					</div>
					
				</form>

			</div><!--End footer-form -->

		</div><!--End footer-split-box -->
	</div>

</footer>

<div id="copy-rights">
	<p class="float-right">&copy; 2015 JR $ Solutions | All rights reserved. | Developed by <span style="color:green;font-weight:bold">Sprout</span><span style="color:orange;font-weight:bold">Tech</span></p>
	<p class"float-left">Terms and contions | Privacy policy</p>
	
</div>


<!-- Javascript CDN and file links-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-color/2.1.2/jquery.color.min.js"></script>

<script src="http://maps.googleapis.com/maps/api/js"></script>

<script type="text/javascript" src="<?php echo base_url("public/js/current-page-highlight.js")?>"></script>
<script type="text/javascript" src="<?php echo base_url("public/js/jquery-ajax-calculator.js")?>"></script>
<script type="text/javascript" src="<?php echo base_url("public/js/blog-signup.js")?>"></script>
<script type="text/javascript" src="<?php echo base_url("public/js/jquery-footer-form-validation.js")?>"></script>
<script type="text/javascript" src="<?php echo base_url("public/js/jquery-sidebar-link-animate.js")?>"></script>


<script type="text/javascript">
	$(document).ready(function() {
		

		//invoking a function to detect currnet page menu and highlight bgc
		var highlight_target="<?php echo base_url($current_page['page_url']); ?>";

		menu_highlight(highlight_target);

		calculate_loan_payment();
		blogSignUp("<?php echo $current_page['page_url'] ?>");

		
		$(".blog-link").click( function(){
			var blog_id=$(this).attr('id');
			
			console.log("start ajax");
			
			$.ajax({	
				type: "GET",
				url:'blog/getBlogItem',

				dataType: 'json',
				data:{id:blog_id},
				success: function(response) {


					if(response){
						$("#blog h3").html(response.blog_item['title']);

						$("#blog-content").html(response.blog_item['content']);
						$("#blog-date").html(response.blog_item['date']);

					}
				},
				error: function(jqXHR, textStatus, errorThrown) {
					console.log(textStatus, errorThrown);
				}

			});
			return false;




		});




	



		//Carousel auto slide 
		$('#myCarousel').carousel({

			interval: 10000
		});

		//End of carousel auto slide

		

		//Contact-page-tabbed button selecter 
		$("#home-loan,#personal-loan,#insurance").click(function(event){

			var source= event.target.id;

			switch (source) {
				case 'home-loan':

				if($("#personal-loan").hasClass('selected')){
					$("#personal-loan").removeClass('selected');
				}
				if($("#insurance").hasClass('selected')){
					$("#insurance").removeClass('selected');
				}

				
				break;
				case 'personal-loan':
				
				if($("#home-loan").hasClass('selected')){

					$("#home-loan").removeClass('selected');
					
				}
				if($("#insurance").hasClass('selected')){
					$("#insurance").removeClass('selected');
					
				}
				
				
				break;


				case 'insurance':
				
				if($("#home-loan").hasClass('selected')){
					$("#home-loan").removeClass('selected');
				}
				if($("#personal-loan").hasClass('selected')){
					$("#personal-loan").removeClass('selected');
				}
				
				break;

			}


			$("#"+source).addClass('selected');


		});
		// End of tabbed button selector



		//Alert box fade-out 

		window.setTimeout(fade,3000);

		function fade(){

			

			$('.alert').fadeOut(3000);

			
		}








		




		/** Script for google map **/

		function initialize() {
			var mapProp = {
				center:new google.maps.LatLng(51.508742,-0.120850),
				zoom:5,
				mapTypeId:google.maps.MapTypeId.ROADMAP
			};
			var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
		}
		google.maps.event.addDomListener(window, 'load', initialize);









	});
</script>


</body>
</html>