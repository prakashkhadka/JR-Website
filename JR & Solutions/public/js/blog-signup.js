function blogSignUp(current_page){


	$("myModal").modal('hide');

console.log(current_page);
if(current_page=="blog"){
	
	setTimeout(function(){
		
		$('#myModal').modal('show');
		
	}, 1000)


	
}

}