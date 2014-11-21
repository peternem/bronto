// JavaScript Document

$(document).ready(function() {

	//Default Action
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content

/**** Bike Model LOGO ROLLOVER BUTTONS SWAP IMAGE MOUSEENTER FUNCTION ****/	
	$("ul.tabs li").mouseenter(function() {
		$("ul.tabs li").removeClass("active"); //Remove any “active” class
		$(this).addClass("active"); //Add “active” class to selected tab
		$(".tab_content").hide(); //Hide all tab content
		
		var activeTab = $(this).find("a").attr("name"); //Find the href attribute value to identify the active tab + content
		//$(activeTab).fadeIn(); //Fade in the active ID content
		//In reference to the issue with ie and fonts, I suggest the following fix:
		//You will loose the fade effect in ie but the tab navigation will continue to work without loosing cleartype on the fonts.
		if ($.browser.msie){
			$(activeTab).show();
		}else{
			$(activeTab).fadeIn(300);
		}
		return false;
	});

	
	/**** Bike Model LOGO ROLLOVER BUTTONS  SWAP IMAGE MOUSELEAVE FUNCTION ****/	
	$("ul.tabs li").mouseleave(function() {
		var activeTab = $(this).find("a").attr("name"); //Find the href attribute value to identify the active tab + content
		//In reference to the issue with ie and fonts, I suggest the following fix:
		//You will loose the fade effect in ie but the tab navigation will continue to work without loosing cleartype on the fonts.
		if ($.browser.msie) {
			$(activeTab).show();
		}
		else {
			$(activeTab).show();
			//$(activeTab).fadeOut(300);//"fast"
		}
		return false;

	});
	
	/**** Bike Model LOGO ROLLOVER BUTTON BEHAVIOR MOUSEENTER FUNCTION ****/	
	$("ul.tabs li a").mouseenter(function(){
		imgsrc = $(this).children("img").attr("src");
		matches = imgsrc.match(/_over/);
			
		// don't do the rollover if state is already ON
		if (!matches) {
			imgsrcON = imgsrc.replace(/.jpg$/ig,"_over.jpg"); // strip off extension
			$(this).children("img").attr("src", imgsrcON);
			
		}	
	});
	
	/**** Bike Model LOGO ROLLOVER BUTTON BEHAVIOR MOUSELEAVE FUNCTION ****/
	$("ul.tabs li a").mouseleave(function(){
		$(this).children("img").attr("src", imgsrc);	
	});

});