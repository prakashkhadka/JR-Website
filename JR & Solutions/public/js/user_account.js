function user(){

	$("#user-account").click(function(){

		$(this).css('background-color','#DB902B');
		$(this).css('color','#222222');



		$.ajax({

			type:'GET',
			url:'admin/getUsers',
			success: function(response){
				$("#area").html(response);

				$("#data-list li").click( shiftPosition);
				$('#dashboard-sub-menu-bar a').click(loadUserAccountForm);





			}

		});









	}); /**end of user menu click function*/



	function shiftPosition(){
		$("#data-list li").css('margin-left','0px');
		$("#data-list li").css('border-left','5px solid #222222');
		$(this).css('margin-left','10px');
		$(this).css('border-left','5px solid #DB902B');




	}

	function loadUserAccountForm(){

		$('#dashboard-right-content-pane').css('display','block');


	}
}

