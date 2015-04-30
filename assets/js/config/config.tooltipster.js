$(document).ready(function() {


	default_selector = '.slider';


	if (default_selector) {
		$(document).ready(function() {
            $('.tooltip').tooltipster();
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