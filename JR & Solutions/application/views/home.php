<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link  rel="stylesheet" href="<?php base_url()?>public/css/custom_css.css" >
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<style type="text/css">


		


		#test>li>a:hover{
			color: white;
			text-decoration: none;
			background-color: #D6AA27;
		}
		#bs-example-navbar-collapse-1{

			margin-right: 50px;
			margin-top:50px;
		}
		.modal-dialog{

			width:500px;
		}


		/**Top right login button and call us section  Home page **/

		

		/** Footer Section **/
		footer{
			background-color:#D6AA27;

			overflow: auto;
		}



		/**copy rights **/

		#cr{
			text-align: right;
			margin-right: 40px;
			font-family: arial;
			letter-spacing: 1px;
			vertical-align: center;
			padding: 10px;

		}



		/**footer section content splitting box **/

		.footerBox{
			text-align: center;
			padding-left:20px;
			padding-right:15px;

		}
		.footerBox h4{
			text-align: center;
			padding:20px;
			font-size:14pt;
			font-weight:500;
			letter-spacing: 1.5px;

		}
		.footerBox p{


			text-align: justify;
		}


		#socialIconList  {
			text-align: center;
			padding: 0;
			margin-left: 0;

		}
		#socialIconList li{

			list-style-type: none;
			display:block;
			margin-bottom: 20px;

		}

		#xsSocialIconList{
			text-align: center;

		}
		#xsSocialIconList li{
			list-style-type: none;
			display:inline-block;

			padding:10px 20px 10px 20px;
		}




		.jrb{
			background-image: url(images/jrb.jpg);
			margin-top:94px;
			height: 510px;

		}

		#testing{
			background-color: red;
			width:100%;
		}

		#t{


			font-size: 15pt;
			font-weight: 700;
		}






		.cn{

			min-width: 60px;

		}
		#cni{
			min-width:286px;
			height: 40px;
		}
		.bt{
			min-width:286px;
			height: 40px;
		}


		.form-inline>*{

			padding-bottom:10px ;
		}


		.carousel,.item,.active{height:100%;}
		.carousel-inner{height:100%;}
		.fill{width:100%;height:100%;background-position:center;background-size:cover;}

		/* faster sliding speed */
		.carousel-inner > .item {
			-webkit-transition: 0.3s ease-in-out left;
			-moz-transition: 0.3s ease-in-out left;
			-o-transition: 0.3s ease-in-out left;
			transition: 0.3s ease-in-out left;
		}

		/* keep full widget on smaller screens */
		@media (max-width: 767px) { 
			body {
				padding-left: 0;
				padding-right: 0;
			}
		}
		
		h5{
			color:gray;
			font-family:arial;
			letter-spacing: 1px;
			font-weight: 200;
		}
		.partners{

			color:gray;
			font-size: 13pt;
			font-weight: lighter;
			border: 2px #52B4D8 solid;
			min-width:90px;
			overflow: auto;
			height: 50px;
			display: inline-block;
			border-radius: 8px;
			padding:10px;
			margin-left: 10px;
			margin-right: 10px;
		}

		.service_box{
			height: 100px;
			padding-right: 20px;
			padding-left: 20px;
			background-color: gray;
			display: inline-block;
			text-align: center;

		}
		.serviceBox img{
			width: 100%;
			height: 100%;

		}
		.serviceBoxContainer{
			text-align: center;;
		}
		.box{

			background-color: #e6e6e6;
			margin-right: 20px;
			margin-left: 20px;
			text-align: center;
		}
		.services{

			padding: 20px;
			text-align: justify;
			letter-spacing: 1.5px;
			font-weight: 300;

		}

		.btn-readMore{

			border-radius: 0;
			width: 100%;
			
			height: 50px;
			background-color: #D6AA27;
		}
		.btn-readMore:hover{


			background-color:#896C20;
			color:white;
		}


		.btn-calculate{

			border-radius: 0;
			width: 85%;
			margin-top: 15px;
			margin-bottom: 8px;
			height: 50px;
			background-color: #D6AA27;
			margin-left: 10px;
		}
		.btn-calculate:hover{


			background-color:#896C20;
			color:white;
		}


		#calculator{


			margin-left: 20px;
			margin-right: 20px;

		}

		.calculatorWrapper{


			border: 1px gray solid;
			min-height: 300px;
			margin-left: 20px;
			margin-right: 20px;
		}

		#exampleInputName2{


		}
		#interest,#principal,#week,#fortnight,#month{


			outline:none;
		}

		.calculator_label{


			margin-left: 50px;
		}

		#c_input{

			border-radius: 0;
			height: 40px;
			width: 90%;
		}
		#c_input{
			float: right;
			margin-right: 10px;

			
			
		}

		.inner{



			margin-top: 20px;
			margin-bottom: 20px;
		}
		#slider1{

			margin-bottom: 0;
		}
		#calculation_type,#repayment{

			float:right;
			margin-right: 10px;
		}

		.btn-primary, .btn-secondary{


			border-radius: 0;
			height: 40px;
		}


#result{


	height: 30px;
	
	padding-left:50px;
	padding-right: 50px;
	

}
#r{



	font-weight: 400;
	font-size: 14pt;
	letter-spacing: 1.5px;
}


#test-me{

	display: block;

	margin-bottom: 20px;
}

#test-me li{

	width: 15px;
    height: 15px;
  	margin: 20px 20px ;
  	



}

.carousel-indicators li {
	color: red;

}

#set{
position: absolute;
bottom: 40px;

width: 100%;
margin: 0;
text-align:center;
height: 170px;
color: white;
font-family: arial;


}
#test-me>li.active{
	list-style-type: disc;
	color:red;
}


.carousel, .item, .active {
height:90%;
}
.carousel-inner {
height:90%;
}


.test{
margin-top: 120px;
height: 90%;

}
h2,h4{

letter-spacing:3px;
font-weight: lighter;

}
h1{
color:white;
letter-spacing:3px;
	}
	</style>






</head>









<body>


	<!-- Header -->
	<header>

	</header>
	<!-- Nav bar -->

	<nav class="navbar navbar-default navbar-fixed-top " >

		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header" id="nav">

			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>


			<!-- Organisation Logo -->
			<a class="navbar-brand" href="#"><img src="<?php base_url()?>public/images/JR_logo.png" alt="JR & Solutions"></a>
		</div>

		<div class="loginSection hidden-xs">
			<h2>Call us today ! (61)280155269</h2>&nbsp;&nbsp;&nbsp;
			<a href="<?php base_url()?>calculator/test" >Test</a>
			<button type="button" class="btn btn-info btn-sm " id="login_bttn" data-toggle="modal" data-target="#myModal">Log in</button>
			
			
		</div>
		<br>
		<br>


		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


			<ul class="nav navbar-nav navbar-right navbar-right-custom" id="mainMenu">
				<li><a href="#" class="visible-xs">INSURANCE</a></li>
				<li><a href="#">HOME</a></li>
				<li><a href="#">ABOUT</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SERVICES<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">MORTGAGE</a></li>
						<li><a href="#">REAL ESTATE</a></li>
						<li><a href="#">CAR AND PERSONAL LOAN</a></li>
						<li><a href="#">INSURANCE</a></li>


					</ul>
				</li>
				<li><a href="#">BLOG</a></li>

			</ul>

		</div><!-- /.navbar-collapse -->

		<!-- /.container-fluid -->
	</nav>


	<div class="test">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="5000">
			<!-- Indicators -->
			<!-- Indicators -->
			<div id="tes">
  <ol class="carousel-indicators" id="test-me">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>
 </div>
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item ">
					<img src="<?php base_url()?>public/images/t.jpg" alt="...">
					<div class="row" id="set">
						<h2>Own Your Dream Home Today.</h2>
						
					</div>
				</div>
				<div class="item active">
					<img src="<?php base_url()?>public/images/s.jpg" alt="...">
					<div class="row" id="set">
					<h1>Own Your Dream Home Today.</h1>
						
					</div>
				</div>
				<div class="item ">
					<img src="<?php base_url()?>public/images/s.jpg" alt="...">
					<div class="row" id="set">
						<h2>Let us help you to own dream home in Sydney.</h2>
						<h4>Making it easier to find best home loan interest rates & deals that suits you.</h4>
					</div>
				</div>
				
			</div>

			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</div> <!-- Carousel -->
	</div>




	<!-- service section -->
	<section>

		<div class=" row services">


			<h3 > OUR SERVICES </h3>
			<br>


			<div class="col-md-3 " ><div class="box"><i class="fa fa-home  fa-4x "></i><h4>Home Loans</h4>

				<article class="services">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
					Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took 
					a galley of type and scrambled it to make a type specimen book. 
					<button type="button" class="btn  btn-lge btn-readMore " >Read More</button>
				</article>









			</div></div>




			<div class="col-md-3 " ><div class="box"><i class="fa fa-money fa-4x "></i><h4>Invest in Properties</h4>

				<article class="services">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
					Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took 
					a galley of type and scrambled it to make a type specimen book. 
					<button type="button" class="btn btn-lge btn-readMore  " >Read More</button>
				</article>

			</div></div>

			<div class="col-md-3" ><div class="box"><i class="fa fa-car  fa-4x "></i><h4>Personal & Car Loans</h4>



				<article class="services">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
					Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took 
					a galley of type and scrambled it to make a type specimen book. 
					<button type="button" class="btn  btn-lge btn-readMore " >Read More</button>
				</article>

			</div></div>

			<div class="col-md-3 " ><div class="box"><i class="fa fa-users  fa-4x "></i><h4>Insurance</h4>

				<article class="services">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
					Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took 
					a galley of type and scrambled it to make a type specimen book. 

					<button type="button" class="btn  btn-lge btn-readMore  " >Read More</button>
				</article>



			</div></div>


		</section>

		<section id="calculator">


			<h3 >Loan Repayment Calculator</h3>
			
			<br>

			<div class="row calculatorWrapper">
				
				<br>
			
					
				<form class="form-inline" role="form"  >

					<div class="row inner">
						<div class="col-md-2" >
							<label class="control-label calculator_label" for="email">Repayment Type</label>
						</div>
						<div class="col-md-4">
							<div class="btn-group " id="calculation_type" role="group" aria-label="Second group">
								<button type="button" class="btn btn-primary" id="interest">Interest Only </button>
								<button type="button" class="btn btn-secondary" id="principal">Principal and Interest</button>

							</div>
						</div>
					</div>







					<div class="row inner">
						
						
						<div class="col-md-2">
							<label class="control-label calculator_label" for="loan">Loan Amount $</label> 
						</div>

						<div class="col-md-4">
							<input class="form-control" id="amount" type="text" placeholder="Loan Amount"> 
						</div>
						<div class="col-md-2">
							<label class="control-label calculator_label" for="loan">Down Payment $</label> 
						</div>

						<div class="col-md-4">
							<input class="form-control" id="c_input" type="text" placeholder="Down Payment"> 
						</div>
					</div>
					<div class="row inner">

						<div class="col-md-2">
							<label class="control-label calculator_label" for="loan">Interest Rate (%)</label> 
						</div>
						<div class="col-md-2">

							<input id="slider1" type="range" min="0" max="10"  />
						</div>
						<div class="col-md-2">
							<input class="form-control rate" id="rate" type="text" > 
						</div>
						

						<div class="col-md-2">
							<label class="control-label calculator_label" for="loan">Loan Terms</label> 
						</div>

						<div class="col-md-4">
							<input class="form-control" id="term" type="text" placeholder="Down Payment"> 
						</div>


					</div>


					<div class="row inner">
						<div class="col-md-3">
							<label class="control-label calculator_label" for="email">Repayment Frequency</label>
						</div>
						<div class="col-md-3">
							<div class="btn-group " id="repayment" role="group" aria-label="Second group">
								<button type="button" class="btn btn-primary" id="week">Weekly</button>
								<button type="button" class="btn btn-secondary" id="fortnight">Fortnightly</button>
								<button type="button" class="btn btn-secondary" id="month">Monthly</button>

							</div>
						</div>
						<div class="col-md-4"></div>
						<div class="col-md-2">
						<button type="submit" class="btn  btn-lge btn-calculate"  id="calculate">Calculate</button>

						</div>
					</div>
						


			
</form>

<div class="row"><div class="col-md-12" id="result"><p id="r"></p></div></div>
				</div>







		



	</section>











	<script>
		$(document).ready(function(){



$("#calculate").click(function(){

	
	var amount=$('#amount').val();
	var rate=$('#rate').val();
	var term=$('#term').val();

	$.ajax({
		
type: "POST",

url: "<?php base_url()?>home/test",
dataType: 'json',
data: {amount:amount,rate:rate,term:term},
success: function(res) {
if (res)
{

	$te=res.name;
	
	$("#r").html("Your loan payment for total amount of AUD "+ amount +" at rate " + rate + "% for " + term + " term is AUD " + $te +".");
	


}
}
});
	return false;

      });
    









			$("#slider1").change(function(event){
				$rate=$("#slider1").val();

				$(".rate").val($rate);

			});

			$("#interest,#principal").click(function(event){

				$source = event.target.id;


				if($source=="principal"){

					$("#interest").removeClass("btn btn-primary");
					$("#interest").addClass("btn btn-secondary");
					$("#principal").removeClass("btn btn-secondary");
					$("#principal").addClass("btn btn-primary");



				}
				else{

					$("#principal").removeClass("btn btn-primary");
					$("#principal").addClass("btn btn-secondary");
					$("#interest").removeClass("btn btn-secondary");
					$("#interest").addClass("btn btn-primary");
				}







			});




			$("#week,#fortnight,#month").click(function(event){


				$source = event.target.id;


				if($source=="week"){

					$("#week").removeClass("btn btn-secondary");
					$("#week").addClass("btn btn-primary");
					$("#fortnight").removeClass("btn btn-primary");
					$("#fortnight").addClass("btn btn-secondary");
					$("#month").removeClass("btn btn-primary");
					$("#month").addClass("btn btn-secondary");



				}
				else if ($source=="fortnight"){

					$("#week").removeClass("btn btn-primary");
					$("#week").addClass("btn btn-secondary");
					$("#fortnight").removeClass("btn btn-secondary");
					$("#fortnight").addClass("btn btn-primary");
					$("#month").removeClass("btn btn-primary");
					$("#month").addClass("btn btn-secondary");
				}

				else{

					$("#week").removeClass("btn btn-primary");
					$("#week").addClass("btn btn-secondary");
					$("#fortnight").removeClass("btn btn-primary");
					$("#fortnight").addClass("btn btn-secondary");
					$("#month").removeClass("btn btn-secondary");
					$("#month").addClass("btn btn-primary");
				}










			});


});
</script>




	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</body>
</html>