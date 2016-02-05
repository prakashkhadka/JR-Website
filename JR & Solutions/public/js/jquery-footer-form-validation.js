
$(document).ready(function(event){
	var form_data={};
	$("#footer-form-submit-btn").click(function(){
		$("#footer-form").find(':input').each(function(){
			if($(this).attr('type')!='submit'){

				$(this).css('border','none');

				form_data[$(this).attr('name')] =$(this).val();


				

			}
		});


		$.ajax({


			type: "POST",
			url: 'contact/process_footer_form',
			dataType: 'json',
			data: form_data,
			success: function(response) {

				if(response.error==0){
					$("#footer-form-submission-sucess").html(response.message);
					$("#footer-form-submission-sucess").css('display','block');
					$("#footer-form").find(':input').each(function(){

						$(this).val("");
					});
					setTimeout(fade,3000);

					function fade(){



						$('.alert').fadeOut(2000);


					}




				}else{
					var errors=response.form_error;

					$.each(errors, function (key, value) {

						
						$("input[name='"+key+"'], textarea[name='"+key+"']").css('border','2px red solid');

					});


				}

			}
		});





		return false;
	});
	
});











































