$(document).ready(function() {

	default_selector = '.js_slider';

	if (default_selector) {
		var x = $(default_selector).unslider({
			   speed: 500,             // The speed to animate each slide (in milliseconds)
			   delay: 3000,            // The delay between slide animations (in milliseconds)
			    keys: true,            // Enable keyboard (left, right) arrow shortcuts
			    dots: false,           // Display dot navigation
			   fluid: true,            // Support responsive design. May break non-responsive designs
	   		   items: '>.js_slide--wrap', // Slide wrapper selector 
			    item: '>.js_slide',       // Each slide selector
			complete: function(){},    // A function that gets called after every slide animation
		});
	}
	setTimeout(function(){
		$(document).trigger('resize');
	},300);
});

//
// DEFAULT HTML IMPLEMENTATION
//
// 1| <div class="banner">
// 2|     <ul>
// 3|         <li>This is a slide.</li>
// 4|         <li>This is another slide.</li>
// 5|         <li>This is a final slide.</li>
// 6|     </ul>
// 7| </div>