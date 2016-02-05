function my( ){

	var intRegex = /^\d+$/;
	

	/* validation on each field input */
	$("#loan-amount,#interest-rate,#loan-term,#down-payment").blur(function(event){

		var source = event.target.id;
		var value=$(this).val();
		if(value!=null && value!="" && intRegex.test(value) && value>=0.0){

			switch(source){

				case 'loan-amount' :
					
					if(!validateLoanAmount(value,source)){
	
						return false;

					}
					else{

						removeRedBorder(source);
					}

					break;

				case 'interest-rate' :
					
					if(!validateInterestRate(value,source)){
						
						return false;

					}
					else{

						removeRedBorder(source);
					}
					
					break;
				case 'down-payment' :
					
					if(!validateDownPayment(value,source)){
						
						return false;

					}
					else{

						removeRedBorder(source);
					}
					
					break;
				case 'loan-term' :
					
					if(!validateLoanTerm(value,source)){
						
						return false;

					}
					else{

						removeRedBorder(source);
					}
					
					break;
			}

			
		}

		else{


			addRedBorder($(this));
			return false;
		}
	});  /* End of blur event function */



$("#calculate").click(function(e){
	var amount=$('#loan-amount').val();
	var rate=$('#interest-rate').val();
	var term=$('#loan-term').val();
	var term=$('#down-payment').val();
if(validateLoanAmount(amount,'#loan-amount') &&validateInterestRate(amount,'#interest-rate')
	&& validateLoanTerm(amount,'#loan-term')&&validateDownPayment(amount,'#down-payment')){


	$.ajax({

		type: "POST",

		url: 'home/test',
		dataType: 'json',
		data: {amount:amount,rate:rate,term:term},
		success: function(res) {
			if (res)
			{

				$te=res.amount_to_pay;

				$("#r").html("Your loan payment for total amount of AUD "+ amount +" at rate " + rate + "% for " + term + " term is AUD " + $te +".");



			}

		}
	});

}
else{

	return false;
}


});














function addRedBorder(element){


	$(element).css("border","1px red solid");
}

function removeRedBorder(element){


	$(element).css("border","1px gray solid");
}



function validateInterestRate(value,element){
	var loan-amount =$("loan-amount").val();

	if(value<=0 || value >100 || vlaue==""|| value==null || !intRegex.test(value)){

			addRedBorder(element);
			return false;


		}
		else{

			removeRedBorder(element);
			return true;
		}



}
function validateDownPayment(value,element){

	if(value<=0 || value >100 || vlaue==""|| value==null || !intRegex.test(value)  || value>loan-amount){

			addRedBorder(element);
			return false;


		}
		else{

			removeRedBorder(element);
			return true;
		}


}
function validateLoanTerm(value,element){


if(value<=0 || vlaue==""|| value==null || !intRegex.test(value) ){

			addRedBorder(element);
			return false;


		}
		else{

			removeRedBorder(element);
			return true;
		}

}

}