/**
 * Custom Js file
*/

jQuery(document).ready(function(){
	if (jQuery('.elementor-accordion-item').children().hasClass('active')) {
		jQuery('.elementor-accordion-title').removeClass('active');
		jQuery('.elementor-accordion-content').css('display', 'none');
	}
})
