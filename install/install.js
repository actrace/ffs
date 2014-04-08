// JavaScript Document
var tab=function(){
	$(".goto").eq(0).click(function(){
	$(".content_box_inner").animate({ left: '-500px' },   "slow"); 
	})
	$(".goto").eq(1).click(function(){
	$(".content_box_inner").animate({ left: '-1000px' },   "slow"); 
	})	
	$(".goto").eq(2).click(function(){
	$(".content_box_inner").animate({ left: '-1500px' },   "slow"); 
	})	
	}

function install(){
	var password=$('.password').val();
	$.post("install.php", { password: password } );
	}

	
$(document).ready(function(){
	tab();
	
	})