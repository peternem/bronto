// JavaScript Document


$(document).ready(function(){	
				   
	//When you click on a link with class of poplight and the href starts with a # 
	$('a.poplight[href^=#], a.poplight1[href^=#]').click(function() {

		var popID = $(this).attr('rel'); //Get Popup Name
		var popURL = $(this).attr('href'); //Get Popup href to define size
				
		//Pull Query & Variables from href URL
		var query= popURL.split('?');
		var dim= query[1].split('&');
		var popWidth = dim[0].split('=')[1]; //Gets the first query string value

		//Fade in the Popup and add close button
		 $('#' + popID).fadeIn().css({'width': Number( popWidth ) }).prepend('<a href="#" class="close"><div class="btn_close">X</div></a>');
		
		//Define margin for center alignment (vertical + horizontal)
		var popMargTop = ($('#' + popID).height() + 0)/2;
		var popMargLeft = ($('#' + popID).width() + 0)/2;
		
		//Apply Margin to Popup
		$('#' + popID).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		//Fade in Background
			
			if ($.browser.msie){
				$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
				$('#fade').css({'filter' : 'alpha(opacity=10)'}).fadeIn(100); //Fade in the fade layer 
			} else {
				$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
				//$('#fade').css({'opacity' : '0.1','-moz-opacity':'0.1'}).fadeIn(100); //SAFARI, FF, Opera - Fade in the fade layer 
				$('#fade').show().css({'opacity' : '.10'});
			}
		return false;
	});
	
	//Close Popups and Fade Layer When clicking on the close or fade layer...
	$('a.close, #fade').live('click', function() { 
		$('#fade, .popup_block').fadeOut(function() {
			$('#fade, a.close').remove();
		}); //fade them both out
		return false;
	});

	
});