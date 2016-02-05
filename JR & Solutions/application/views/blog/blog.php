
<?php
$array_size=sizeof($blog_list); 


?>

<div class="container-fluid page-content-container">
<p id="test">Testing jason <p>
	

	<div class="col-md-9" style="">
<article id="blog">
<header>
<h3><?php echo $blog_list[0]['title'];?></h3>


<div class="sub-header">
<img src="<?php echo base_url('/public/images/profile/author.jpg')?>"> <?php echo $blog_list[0]['author'];?>| 
<i class="fa fa-calendar"><span id="blog-date"><?php echo $blog_list[0]['date'];?></span></i> 



</div>
<div class="social-share-icons">
<span class='st_sharethis_large' displayText='ShareThis'></span>
<span class='st_facebook_large' displayText='Facebook'></span>
<span class='st_googleplus_large' displayText='Google +'></span>
<span class='st_twitter_large' displayText='Tweet'></span>
<span class='st_email_large' displayText='Email'></span> 
</div>
<header>
<section>

</section>
<section>
	<div class="description" id="blog-content">
	<?php echo $blog_list[0]['content'];?>


	</div>
</section>
</article>
		</div>

		<div class="col-md-3" style="">

		<aside id="blog-list">
		
	<div class="blog-list-wrapper">
	<header><h4>Blog Topics</h4></header>
		<ul >
		<?php foreach($blog_list as $blog_item){?>
		<li  ><a class="blog-link" id="<?php echo $blog_item['id'] ?>" href=""><?php echo $blog_item['title'] ?></a></li>
		<?php }?>
		

		</ul>
		</div>

		<aside>














		






	</div>
	

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
   
      <div class="modal-header">
        
        <h4 class="modal-title" id="myModalLabel">Sign up for news letter !</h4>
      </div>
      <div class="modal-body">
         <form  id="blog-signup-form" method="post" action="#" >

					<div class="form-group" >
						<input type="email" class="form-control" name="blog-signup-email"  placeholder="Enter email address" > 
					</div>
      </div>
      <div class="modal-footer">
      <small class="float-left">JR & Solutions <sup>TM</sup> </small>
        <button type="button" class="btn btn-danger sign-up-modal-btn" data-dismiss="modal">No Thanks !</button>
        <button type="submit" class="btn btn-success sign-up-modal-btn" >Sign Up</button>
        </form>
      </div>
    </div>
  </div>
</div>

</div>	<!--End container-fluid" -->