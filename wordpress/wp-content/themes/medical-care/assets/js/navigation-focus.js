jQuery(window).load(function() {
  window.medical_care_currentfocus=null;
  medical_care_checkfocusdElement();
  var medical_care_body = document.querySelector('body');
  medical_care_body.addEventListener('keyup', medical_care_check_tab_press);
  var medical_care_gotoHome = false;
  var medical_care_gotoClose = false;
  window.medical_care_mobileMenu=false;
  function medical_care_checkfocusdElement(){
    if(window.medical_care_currentfocus=document.activeElement.className){
      window.medical_care_currentfocus=document.activeElement.className;
    }
  }
  function medical_care_check_tab_press(e) {
    "use strict";
    e = e || event;
    var activeElement;
    if(window.innerWidth < 999){
    if (e.keyCode == 9) {
      if(window.medical_care_mobileMenu){
      if (!e.shiftKey) {
        if(medical_care_gotoHome) {
          jQuery( ".gb_navigation ul:first li:first a:first-child" ).focus();
        }
      }
      if (jQuery("a.closebtn.gb_menu").is(":focus")) {
        medical_care_gotoHome = true;
      } else {
        medical_care_gotoHome = false;
      }
    }else{
      if(window.medical_care_currentfocus=="gb_toggle"){
        jQuery( "" ).focus();
      }}}
    }
    if (e.shiftKey && e.keyCode == 9) {
    if(window.innerWidth < 999){
      if(window.medical_care_currentfocus=="header-search"){
        jQuery(".gb_toggle").focus();
      }else{
        if(window.medical_care_mobileMenu){
        if(medical_care_gotoClose){
          jQuery("a.closebtn.gb_menu").focus();
        }
        if (jQuery( ".gb_navigation ul:first li:first a:first-child" ).is(":focus")) {
          medical_care_gotoClose = true;
        } else {
          medical_care_gotoClose = false;
        }
      }else{
      if(window.medical_care_mobileMenu){
      }}}}
    }
    medical_care_checkfocusdElement();
  }
});