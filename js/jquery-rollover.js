// JavaScript Document
// Jquery Main Navigation Rollover button scripts
	$(document).ready(function() {
		
		/* --------------------- */
		// START HEADER Main Navigation Image rollover Link FUNCTIONs
		/* --------------------- */
		
		// Preload all rollovers
		$("#nav img, #navBronto img").each(function() {
			// Set the original src
			rollsrc = $(this).attr("src");
			rollON = rollsrc.replace(/.gif$/ig,"_over.gif");
			$("<img>").attr("src", rollON);
		});
		
		// Navigation rollovers
		$("#nav a, #navBronto a").mouseover(function(){
			imgsrc = $(this).children("img").attr("src");
			matches = imgsrc.match(/_over/);
			
			// don't do the rollover if state is already ON
			if (!matches) {
			imgsrcON = imgsrc.replace(/.gif$/ig,"_over.gif"); // strip off extension
			$(this).children("img").attr("src", imgsrcON);
			}
		});


		/* --------------------- */
		// END Main Navigation Image rollover Link FUNCTIONs
		/* --------------------- */

		/* --------------------- */
		// START #nav-bike Bike Logo rollover Links FUNCTIONs
		/* --------------------- */
		

		// Preload all rollovers
		$("#nav-bike img").each(function() {
			// Set the original src
			rollsrc = $(this).attr("src");
			rollON = rollsrc.replace(/.jpg$/ig,"_over.jpg");
			$("<img>").attr("src", rollON);
		});
		
		// Navigation rollovers
		$("#nav-bike a").mouseover(function(){
			imgsrc = $(this).children("img").attr("src");
			matches = imgsrc.match(/_over/);
			
			// don't do the rollover if state is already ON
			if (!matches) {
			imgsrcON = imgsrc.replace(/.jpg$/ig,"_over.jpg"); // strip off extension
			$(this).children("img").attr("src", imgsrcON);
			}
			
		});

		
		/* --------------------- */
		// END #nav-bike Bike Logo rollover Links FUNCTIONs
		/* --------------------- */


		/* --------------------- */
		// START mainConentDivrightCopy2 rollover geometry newwindow icon FUNCTIONs
		/* --------------------- */
		
		
		$("#divRightTopCol p img, #mainConentDivrightCopy p img, #mainConentDivrightCopy2 p img, #mainConentDivrightCopyRev p img, #mainConentDivrightCopyRev p img,  #mainConentDivrightCopyWil p img, #mainConentDivrightCopyBon p img, #mainConentDivrightCopyFork p img").each(function() {
			// Set the original src
			rollsrc = $(this).attr("src");
			rollON = rollsrc.replace(/.png$/ig,"_over.png");
			$("<img>").attr("src", rollON);
		});
		
		
		
		$("#divRightTopCol p a, #mainConentDivrightCopy p a, #mainConentDivrightCopy2 p a, #mainConentDivrightCopyRev p a, #mainConentDivrightCopyRev p a,  #mainConentDivrightCopyWil p a, #mainConentDivrightCopyBon p a, #mainConentDivrightCopyFork p a").mouseover(function(){
			imgsrc = $(this).children("img").attr("src");
			matches = imgsrc.match(/_over/);
			
			// don't do the rollover if state is already ON
			if (!matches) {
			imgsrcON = imgsrc.replace(/.png$/ig,"_over.png"); // strip off extension
			$(this).children("img").attr("src", imgsrcON);
			}
			
		});
		
		$("#mainConentDivrightCopy2 p img").each(function() {
			// Set the original src
			rollsrc = $(this).attr("src");
			rollON = rollsrc.replace(/.jpg$/ig,"_over.jpg");
			$("<img>").attr("src", rollON);
		});
		
		$("#mainConentDivrightCopy2 p a").mouseover(function(){
			imgsrc = $(this).children("img").attr("src");
			matches = imgsrc.match(/_over/);
			
			// don't do the rollover if state is already ON
			if (!matches) {
			imgsrcON = imgsrc.replace(/.jpg$/ig,"_over.jpg"); // strip off extension
			$(this).children("img").attr("src", imgsrcON);
			}
			
		});
		
		/* --------------------- */
		// START youtube and newsletter rollover icon and button FUNCTIONs
		/* --------------------- */
		/*
		if(value.match(/(\.gif|\.jpg|\.png)$/i)) { 
				do something }
		else {do nothing };
		*/
		
		$(".youtube li img").each(function() {
			// Set the original src
			rollsrc = $(this).attr("src");
			rollON = rollsrc.replace(/.png$/ig,"_over.png");
			$("<img>").attr("src", rollON);
		});
		
		
		
		$(".youtube li a").mouseover(function(){
			imgsrc = $(this).children("img").attr("src");
			matches = imgsrc.match(/_over/);
			
			// don't do the rollover if state is already ON
			if (!matches) {
			imgsrcON = imgsrc.replace(/.png$/ig,"_over.png"); // strip off extension
			$(this).children("img").attr("src", imgsrcON);
			}
			
		});
		
		
		/* --------------------- */
		// START GLOBAL FUNCTIONs #navBronto is located in shopping cart area
		/* --------------------- */
		
		$("#divRightTopCol p a, #navBronto a, .youtube a, #nav-bike a, #nav a, #mainConentDivrightCopy p a, #mainConentDivrightCopy2 p a, #mainConentDivrightCopyRev p a, #mainConentDivrightCopyWil p a, #mainConentDivrightCopyBon p a, #mainConentDivrightCopyFork p a").mouseout(function(){
			$(this).children("img").attr("src", imgsrc);
		});
		//$("#navBronto a, .youtube a, #nav-bike a, #nav a, #mainConentDivrightCopy p a, #mainConentDivrightCopy2 p a, #mainConentDivrightCopyRev p a, #mainConentDivrightCopyWil p a #mainConentDivrightCopyBon p a #mainConentDivrightCopyFork p a").click(function(){
//			$(this).children("img").attr("src", imgsrc);
//		});
	
	});
	
	
function popitup(url) {
	newwindow=window.open(url,'name','height=300,width=400');
	if (window.focus) {newwindow.focus()}
	return false;
}
