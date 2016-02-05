		
<div class="col-md-4" style="height:100%;">

	<div class="row">
		<div id="dashboard-sub-menu-bar">
			<a href="#" ><?php echo $menu ?></a>
		</div>
		<div id="dashboard-left-content-pane">
			<ul id="data-list">
				<?php foreach ($users as $user) {?>

				<li><?php echo $user['first_name']." ". $user['last_name'] ?> </li>






				<?php } ?>
			</ul>



		</div>
	</div>
</div>
<div class="col-md-8" style="border-left:2px gray solid;height:100%;">

	<div id="dashboard-right-content-pane">
		<div class="row">
			<div id="dashboard-sub-menu-bar">
				<ul id="control-menu-list">
					<?php foreach ($control_menu as $menu) {?>

					<li id="<?php echo $menu ?>"><?php echo $menu ?> </li>






					<?php } ?>
				</ul>
			</div>
		</div>
		<div class="user-account-form-wrapper">
			<form class="form-horizontal" role="form" id="user-account-form">
				<div class="form-group">
					<label class="control-label col-sm-2" for="email">Email:</label>
					<div class="col-sm-6">
						<input type="email" class="form-control" id="email" placeholder="Enter email">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="pwd">Password:</label>
					<div class="col-sm-6"> 
						<input type="password" class="form-control" id="pwd" placeholder="Enter password">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="email">First Name:</label>
					<div class="col-sm-6">
						<input type="email" class="form-control" id="email" placeholder="Enter email">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="email">Last Name:</label>
					<div class="col-sm-6">
						<input type="email" class="form-control" id="email" placeholder="Enter email">
					</div>
				</div>

				<div class="form-group"> 
					<div class="col-sm-offset-2 col-sm-6">
						<div class="checkbox">
							<label><input type="checkbox"> Remember me</label>
						</div>
					</div>
				</div>
				<div class="form-group"> 
					<div class="col-sm-offset-2 col-sm-6">
						<button type="submit" class="btn btn-default">Submit</button>
					</div>
				</div>
			</form>
		</div>






	</div>

</div>


































