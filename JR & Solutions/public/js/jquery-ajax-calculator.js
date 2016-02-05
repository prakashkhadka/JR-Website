function calculate_loan_payment(){

	

	var intRegex = /^\d+$/;
	$("#loan-amount,#interest-rate,#loan-term,#down-payment").blur(function(event){
		var type=$("input:radio[name=calculation-type]:checked").val();


		var source = event.target.id;
		
		var value=$(this).val();
		if(value!=null && value!="" && intRegex.test(value)){

			switch(source){


				case 'loan-amount' :
				validateLoanAmount(value,$(this));

				break;

				case 'interest-rate' :

				
				validateInterestRate(value,$(this));
				break;
				case 'down-payment' :
				validateDownPayment(value,$(this));
				
				break;
				case 'loan-term' :
				
				break;

			}

			


		}

		else{


			addRedBorder($(this));
			


		}



	});




	




	$("#calculate-btn").click(function(e){




		var amount=$('#loan-amount').val();
		var rate=$('#interest-rate').val();
		var term=$('#loan-term').val();
		var term=$('#down-payment').val();
		//validateInterestRate(rate,'#interest-rate');



		$.ajax({

			type: "POST",

			url: 'home/test',
			dataType: 'json',
			data: $("#calculator-form").serialize(),
			success: function(response) {
				if (response)
				{

					if(response.error==0){


						$("#display-result").removeClass('hidden');
						$("#display-result").css('display','block');
						
						$("#estimated-payment").html("Repayment<br><span class='emphasis'>$ "+response.amount_to_pay+"</span><br>weekly");
						$("#user-data").html("Interest rate of <br><span class='emphasis'> "+response.rate+" %</span><sub> p.a</sub><br>over "+response.term+" years");


					}

					else{


						$("#display-result").addClass('hidden');
						$('.error').html(response.error_message);
					}
				}

			}
		});


	});


	/* Helper function */
	
	function validateInterestRate(value,source){


		if(value<=0 || value >100 || value==""|| value==null || !intRegex.test(value)){

			addRedBorder(source);
			return false;
		}
		else{

			removeRedBorder(source);
			return true;

		}


	}
	function validateDownPayment(value,element){
		var amount= $("#loan-amount").val();
		if(validateLoanAmount(amount,"#loan-amount")){
			if(value<0  || value==""|| value==null || !intRegex.test(value)  || value>amount){

				addRedBorder(element);
				return false;


			}
			else{

				removeRedBorder(element);
				return true;
			}
		}
		else{

			return false;
		}

	}


	function validateLoanAmount(value,element){

		if(value<=0 || value==""|| value==null || !intRegex.test(value)){

			addRedBorder(element);
			return false;


		}
		else{

			removeRedBorder(element);
			return true;
		}


	}

	function addRedBorder(element){


		$(element).css("border","1px red solid");
	}

	function removeRedBorder(element){


		$(element).css("border","1px gray solid");
	}



}