jQuery(document).ready(function($) {
	
	//HOME 
	//display image caption on top of image
	$(".bg-image img").each(function() {
		var imageCaption = $(this).attr("alt");

		if (imageCaption != '') {
		var imgHeight = $(this).height();
		var position = $(this).position();
		var positionTop = imgHeight / 2;
		$("<span class='img-caption'><em class='caption-text'>"+imageCaption+"<span class='caption-link'>Learn More</span></em></span>")
		.insertAfter(this);
	}

	});
	
	//SUBPAGES
	//inject a div to add background and margin to make for easier editing
	$('.cac-wrapper').wrapInner('<div class="marg"></div>' );
	
});