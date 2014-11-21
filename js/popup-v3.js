// JavaScript Document

$(document).ready(function(){	
				   		   
	//When you click on a link with class of poplight and the href starts with a # 
	$('a.poplight[href^=#]').click(function() {
		var popID = $(this).attr('rel'); //Get Popup Name
		var popURL = $(this).attr('href'); //Get Popup href to define size
				
		//Pull Query & Variables from href URL
		var query= popURL.split('?');
		var dim= query[1].split('&');
		var popWidth = dim[0].split('=')[1]; //Gets the first query string value

		//Fade in the Popup and add close button style="display:block;
		//$('#' + popID).css({ 'width': Number(popWidth) }).append('<a href="#" class="close" style="display:block;"><div class="btn_close" alt="Close" /></div></a>').fadeIn();
		$('#' + popID).css({ 'width': Number(popWidth) }).show();
		//Define margin for center alignment (vertical + horizontal) - we add 80 to the height/width to accomodate for the padding + border width defined in the css
		//var popMargTop = ($('#' + popID).height() + 80) / 2;
		//var popMargLeft = ($('#' + popID).width() + 80) / 2;
		
		var popMargTop = ($('#' + popID).height()) / 2;
		var popMargLeft = ($('#' + popID).width()) / 2;
		
		//Apply Margin to Popup
		$('#' + popID).css({ 'margin-top' : -popMargTop,'margin-left' : -popMargLeft});
		
		//Apply width to Geometry xml data table
		$('#XMLDataTable').css({'width': (Number(popWidth)-20) })
		
		/*$('.popuph2').css({
			'height':'25px', 
			'background-color': '#EAE7E0',
			'color':'#000',
			//'padding-left':'10px'
			});*/
		
		//Fade in Background
		$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
		//$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 
		
		return false;
	});
	
	
	//Close Popups and Fade Layer
	$('#fade, .btn_close').live('click', function() { //When clicking on the close or fade layer...
	  	$('#fade, .popup_block').hide(function() {
			$('#fade').remove();  
	}); //fade them both out
		
		return false;
	});

	
});