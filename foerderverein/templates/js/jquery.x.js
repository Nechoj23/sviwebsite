/*--------------------------------------------------------------------------------
# ah-68-Technik 2.5 - Februar 2013 (J2.5)
# Copyright (C) 2006-2013 www.ah-68.de All Rights Reserved.
----------------------------------------------------------------------------------*/

jQuery.noConflict();
jQuery(document).ready(function($) {

<!-- ToTop -->
$(window).scroll(function() {
if($(this).scrollTop() != 0) {
$('#toTop').fadeIn();	
} else {
$('#toTop').fadeOut();
}
});
$('#toTop').click(function() {
$('body,html').animate({scrollTop:0},800);
});

$("#sidebar").hover(function() {
$(this).animate({right:10}, 400);
},function() {
$(this).animate({right:-25}, 400);
});	

$(".home-hover, .facebook-hover, .google-hover, .tweet-hover, .feed-hover, .login-hover")
.find("span")
.hide()
.end()
.hover(function() {
$(this).find("span").stop(true, true).fadeIn('slow');
}, function() {
$(this).find("span").stop(true, true).fadeOut('slow');
});	


});