// JavaScript Document

/**************************************************************************************/		   
/**** BEGIN  SlideShow Function on the bronto index.php webpage ****/
/**************************************************************************************/

function preload(arrayOfImages) {
	$(arrayOfImages).each(function(){
	$('<img/>')[0].src = this;
	// Alternatively you could use:
	// (new Image()).src = this;
	});
}

preload(['images/P8060693.jpg','images/_MG_5792.jpg','images/NUT_DAlvarezPeterMj_Rev29er.jpg','images/Rev29er-PBR-1.jpg','images/_MG_5595_2.jpg','images/DSC01644-1.jpg','images/IMG_0699-1.jpg','images/IMG_0726-1.jpg','images/IMG_0750-1.jpg','images/IMG_0702.jpg','images/IMG_1548-1.jpg','images/IMG_0945-1.jpg','images/IMG_2629-1.jpg','images/IMG_4038-1.jpg','images/IMG_0139-crop.jpg','images/IMG_0693-1.jpg','images/IMG_0674-1.jpg','images/P8050641-1.jpg','images/IMG_0712.jpg','images/IMG_0630-1.jpg']);

var imgs = ['images/P8060693.jpg','images/_MG_5792.jpg','images/NUT_DAlvarezPeterMj_Rev29er.jpg','images/Rev29er-PBR-1.jpg','images/_MG_5595_2.jpg'];
var imgs1 = ['images/DSC01644-1.jpg','images/IMG_0699-1.jpg','images/IMG_0726-1.jpg','images/IMG_0750-1.jpg','images/IMG_0702.jpg'];
var imgs2 = ['images/IMG_1548-1.jpg','images/IMG_0945-1.jpg','images/IMG_2629-1.jpg','images/IMG_4038-1.jpg','images/IMG_0139-crop.jpg'];
var imgs3 = ['images/IMG_0693-1.jpg','images/IMG_0674-1.jpg','images/P8050641-1.jpg','images/IMG_0630-1.jpg','images/IMG_0712.jpg'];

var i = 0;
var iA = 0;
var iB = 0;
var iC = 0;

////1000 Milliseconds = 1 Seconds
var slideInterval = 15000;
var fadeIO = 1000;

$(function() { // This is a shortcut for $(document).ready();
	setInterval(Slider, slideInterval);
	setInterval(SliderA, slideInterval);
	setInterval(SliderB, slideInterval);
	setInterval(SliderC, slideInterval);
});

function Slider() {
	$('#imageSlide').fadeOut(fadeIO, function() {
		i = (i+1) % imgs.length;
		$(this).attr('src', imgs[i]).fadeIn(fadeIO);
	});
}

function SliderA() {
	$('#imageSlide1').fadeOut(fadeIO, function() {
		iA = (iA+1) % imgs1.length;
		$(this).attr('src', imgs1[iA]).delay(1000).fadeIn(fadeIO);
	});
}

function SliderB() {
	$('#imageSlide2').fadeOut(fadeIO, function() {
		iB = (iB+1) % imgs2.length;
		$(this).attr('src', imgs2[iB]).delay(1500).fadeIn(fadeIO);
	});
}

function SliderC() {
	$('#imageSlide3').fadeOut(fadeIO, function() {
		iC = (iC+1) % imgs3.length;
		$(this).attr('src', imgs3[iC]).delay(2000).fadeIn(fadeIO);
	});
/*	$('#imageSlide3').fadeOut(fadeIO, function() {
		iC = (iC+1) % imgs3.length;
		$(this).attr('src', imgs3[iC]).delay(2000).fadeIn(fadeIO);
	});*/
}

/*********************************************************************************/		   
/**** END  SlideShow Window Function on the bronto index.php webpage ******/
/*********************************************************************************/

/**************************************************************************************/		   
/**** Begin  Pause/pLAY Slideshow ICON Function on the bronto index.php webpage   ****/
/**************************************************************************************/

	/*$('#pauseBtn').toggle(function() {
	     clearInterval(Timer);
	      //$("#pauseBtn img[name=pause1_btn]").attr("src", "images/play-hover.png");
	       $("#pauseBtn").css({'background-image':'url(images/play-hover.png)'});
	      $("#pauseBtn").css({'background-color': '#666666'});
	      this.title = "Play";
	},
	function() {
	   Timer = setInterval(Slider, 5000);
	    //$("#pauseBtn img[name=pause1_btn]").attr("src", "images/pause-btn.png");
	    $("#pauseBtn").css({'background-image':'url(images/pause-btn.png)'});
	     $("#pauseBtn").css({'background-color': '#cccccc'});
	     this.title = "Pause";
	});*/

/**************************************************************************************/		   
/**** END  Pause Slideshow ICON Function on the bronto index.php webpage   ****/
/**************************************************************************************/

/*var imgs = [
    'image1.jpg',
    'image2.jpg',
    'image3.jpg'];
var i = 0;

$(function() { // This is a shortcut for $(document).ready();
    setInterval(Slider, 4000);
});

function Slider() {
   $('#imageSlide').fadeOut("slow", function() {
      i = (i+1) % imgs.length;
      $(this).attr('src', imgs[i]).fadeIn("slow");
   });
}*/


