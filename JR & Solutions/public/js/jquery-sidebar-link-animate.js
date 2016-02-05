
$(document).ready(function(){

$(".sidebar-social-icon  ").mouseover(function(event){

	var target = $(this).attr('id');
	//alert(target);

	$("#"+target+"-sm").css('display','none');
	
	$("#"+target+'-lg').removeClass('hidden');
	$("#"+target+'-lg').css('display','block');
	$("#"+target+'-lg').animate({
		
height:'64px',
width:'200px'
	});
	
	

	});

	$(".sidebar-social-icon").mouseout(function(event){
	var target = $(this).attr('id');
	$("#"+target+"-lg").hide();
	$("#"+target+'-sm').show();
	

$("#"+target+'-sm').animate({
		width:'64px',
		height:'64px',
		float:'right'

	});

$(this).css('text-align','right');









});



});