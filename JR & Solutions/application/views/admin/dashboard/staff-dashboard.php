

<header>

 <div class="container-fluid">
   <div class="row" id="dashboard-header">
     <img  id="login-page-logo" src="<?php echo base_url("public/images/logo/JRTest.png")?>" alt="JR & Solutions ">
     <h4 class="float-right"><?php echo "Hi, " .$user_name ?></h4>
   </div>
 </div>
</header>


<div class="container-fluid" id="dashboard-main-container">
  <div class=" row dashboard-content">




    <div class="col-md-1">
      <aside>
        <div class="dashboard-side-menu-wrapper">
          <ul id="side-menu">
            <li><a href="#" id="user-account"><i class="fa fa-user fa-2x"></i></a></li>
            <li><a href="#" id="blog"><i class="fa fa-file-text-o fa-2x"></i></a></li>
            <li><a href="#"><i class="fa fa-file-image-o fa-2x"></i></a></li>
            <li><a href="<?php echo base_url() ?>"><i class="fa fa-globe fa-2x"></i></a></li>
            <li><a href="#"><i class="fa fa-info fa-2x"></i></a></li>
            <li><a href="#"><i class="fa fa-rocket fa-2x"></i></a></li>
            <li><a href="<?php echo base_url('login/logout') ?>"><i class="fa fa-sign-out fa-2x"></i></a></li>

          </ul>
        </div>
      </aside>

    </div>

    <div class="col-md-11" style="height:100%;">
      <div class="row" id="area">
   
    </div>
</div>






  </div>
</div>







