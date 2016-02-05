function menu_highlight( target) {

			
			 $('.navbar-right  a[href="'+target+'"]').css({

			 		'background-color':'#DB902B',
			 		'color':'#fff'});

			 $('.navbar-right a').not('.navbar-right  a[href="'+target+'"]').mouseover(function(){
			 	


			 	$(this).css({

			 		'background-color':'#DB902B',
			 		'color':'#fff'});


			 });

			
			
			$('.navbar-right a').not('.navbar-right  a[href="'+target+'"]').mouseout(function(){

				$(this).animate({

					color: "#472A02",
    			backgroundColor: "#fff"
				});
				


			});
			
		}

		/*
	

		*/

	
