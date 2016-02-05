	<!DOCTYPE html>
	<html>
	<head>
		<title>Log In page</title>
		<meta id="meta" name="viewport"
		content="width=device-width; initial-scale=1.0" />
		<link rel="shortcut icon" type="image/png" href="<?php echo base_url('public/images/Logo/favicon-32x32.png')?>"/>
		<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Istok+Web:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Lora:400,700' rel='stylesheet' type='text/css'>
		<link  rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url("public/css/dashboard-style.css");?>">

		<link  rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		
		<style>
			body{

				background-color:#D3D3D3;
			}
		</style>
	</head>
	<body>


		<div class="container-fluid" id="dashboard-main-container">
			<div class="logo-wrapper">
				<img  id="login-page-logo" src="<?php echo base_url("public/images/logo/JRTest.png")?>" alt="JR & Solutions ">

			</div>

			<div class="alert alert-danger" id="login-error">
				<strong> Incorrect username or password </strong>
			</div>

			<div id="login-wrapper">


				<div id="login-box">
					<form role="form" id="login-form" method="post" action="<?php echo base_url('login/auth_process')?>">
						<div class="form-group">

							<input type="email" class="form-control" name="email" id="email" placeholder="user name" value="<?php echo set_value('email')?>">

						</div>
						
						<div class="form-group">

							<input type="password" class="form-control" name="password" id="password" placeholder="password" >

						</div>
						
						<div class="form-group">
							<button type="submit" class="btn btn-success btn-lg" id="login-bttn">Log in</button>
						</div>
					</form>
					<a href="" >Forgot Password ?</a>

				</div>



			</div>



		</div>