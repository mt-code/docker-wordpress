jQuery(function($){
 	"use strict";
   	jQuery('.gb_navigation > ul').superfish({
		delay:       500,
		animation:   {opacity:'show',height:'show'},  
		speed:       'fast'
  	});
});

function medical_care_gb_Menu_open() {
	window.medical_care_mobileMenu=true;
	jQuery(".side_gb_nav").addClass('show');
}
function medical_care_gb_Menu_close() {
	window.medical_care_mobileMenu=false;
	jQuery(".side_gb_nav").removeClass('show');
}