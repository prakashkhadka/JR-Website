
<footer>
<div id="slim-footer">&copy; <?php echo date('Y') ?> JR & Solutions</div>

</footer>

<script type="text/javascript" src="<?php echo base_url("public/js/user_account.js")?>"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
$(document).ready(function(){
	var name="rajesh";

	var error="<?php echo empty($error); ?>";
	



if (error){ 

$("#login-error").css('display','block');

} else {

$("#login-error").css('display','none');

}


user();


});
</script>
</body>
</html>