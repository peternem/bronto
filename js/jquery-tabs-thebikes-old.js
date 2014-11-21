// JavaScript Document

$(document).ready(function() {

	//Default Action
	$(".tab_content").hide(); //Hide all content

	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content
	
	//On Click Event
//	$("ul.tabs li").click(function() {
//		$("ul.tabs li").removeClass("active"); //Remove any "active" class
//		$(this).addClass("active"); //Add "active" class to selected tab
//		$(".tab_content").hide(); //Hide all tab content
//		var activeTab = $(this).find("a").attr("name"); //Find the rel attribute value to identify the active tab + content
//		//$(activeTab).fadeIn(); //Fade in the active content
//		//In reference to the issue with ie and fonts, I suggest the following fix:
//		//You will loose the fade effect in ie but the tab navigation will continue to work without loosing cleartype on the fonts.
//		if ($.browser.msie)
//		{$(activeTab).show();}
//		else
//		{$(activeTab).fadeIn("fast");}
//		return false;
//	});
	//On Hover Event
	$("ul.tabs li").mouseenter(function() {
		$("ul.tabs li").removeClass("active"); //Remove any “active” class
		$(this).addClass("active"); //Add “active” class to selected tab
		$(".tab_content").hide(); //Hide all tab content
		
		var activeTab = $(this).find("a").attr("name"); //Find the href attribute value to identify the active tab + content
		//$(activeTab).fadeIn(); //Fade in the active ID content
		//In reference to the issue with ie and fonts, I suggest the following fix:
		//You will loose the fade effect in ie but the tab navigation will continue to work without loosing cleartype on the fonts.
		if ($.browser.msie)
		{$(activeTab).show();}
		else
		{$(activeTab).fadeIn("fast");}//"fast"
		return false;
	});
		
	$("ul.tabs li").mouseleave(function() {
		var activeTab = $(this).find("a").attr("name"); //Find the href attribute value to identify the active tab + content
		//In reference to the issue with ie and fonts, I suggest the following fix:
		//You will loose the fade effect in ie but the tab navigation will continue to work without loosing cleartype on the fonts.
		if ($.browser.msie)
		{$(activeTab).show();}
		else
		{$(activeTab).fadeIn();}//"fast"
		return false;
	});
//	$("ul.tabs li a").click(function() {
//		$("ul.tabs li").removeClass("active"); //Remove any “active” class
//		$(this).parent().addClass("active"); //Add “active” class to selected tab
//		$(".tab_content").hide(); //Hide all tab content
//		
//		var activeTab = $(this).attr("name"); //Find the href attribute value to identify the active tab + content
//		$(activeTab).fadeIn("fast"); //Fade in the active ID content
//		return false;
//	});

});