/* --------------------- */
// BRONTO SHOP - Jquery Main Navigation Rollover button scripts
/* --------------------- */
// 
	$(document).ready(function() {
		
		/* --------------------- */
		// START BRONTO SHOP HEADER Main Navigation Image rollover and BUTTONROW Link FUNCTIONs
		/* --------------------- */
		
		// Preload all rollovers
		$("#navBronto img, .buttonRow img, .buttonRow input, .navNextPrevList img, .cartRemoveItemDisplay img, #prevOrders img").each(function() {
			// Set the original src
			rollsrc = $(this).attr("src");
			rollON = rollsrc.replace(/.gif$/ig,"_over.gif");
			$("<img>").attr("src", rollON);
		});
		
		// Navigation rollovers
		$("#navBronto a, .buttonRow a, .navNextPrevList a, .cartRemoveItemDisplay a, #prevOrders a").mouseover(function(){
			imgsrc = $(this).children("img").attr("src");
			matches = imgsrc.match(/_over/);
			
			// don't do the rollover if state is already ON
			if (!matches) {
			imgsrcON = imgsrc.replace(/.gif$/ig,"_over.gif"); // strip off extension
			$(this).children("img").attr("src", imgsrcON);
			}
		});
		
		
		/* --------------------- */
		// START rollover FUNCTIONs HTML <INPUT> BUTTONS
		/* --------------------- */

		$(".buttonRow input, #cartAdd input, .cartQuantityUpdate input").mouseover(function(){
			imgsrc = $(this).attr("src");
			matches = imgsrc.match(/_over/);
			
			// don't do the rollover if state is already ON
			if (!matches) {
			imgsrcON = imgsrc.replace(/.gif$/ig,"_over.gif"); // strip off extension
			$(this).attr("src", imgsrcON);
			}
		});

		/* --------------------- */
		// END Main Navigation Image rollover Link FUNCTIONs
		/* --------------------- */
		
		
		/* --------------------- */
		// START GLOBAL FUNCTIONs HTML <IMG><A> BUTTONS
		/* --------------------- */
		globalDiv = "#navBronto a, .buttonRow a, .navNextPrevList a, .cartRemoveItemDisplay a, #prevOrders a";
		$(globalDiv).mouseout(function(){
			$(this).children("img").attr("src", imgsrc);
		});
		$(globalDiv).click(function(){
			$(this).children("img").attr("src", imgsrc);
		});
		
		/* --------------------- */
		// START GLOBAL FUNCTIONs HTML <INPUT> BUTTONS
		/* --------------------- */
		globalDiv = ".buttonRow input, #cartAdd input, .cartQuantityUpdate input";
		$(globalDiv).mouseout(function(){
			$(this).attr("src", imgsrc);
		});
		$(globalDiv).click(function(){
			$(this).attr("src", imgsrc);
		});
	
	});
	