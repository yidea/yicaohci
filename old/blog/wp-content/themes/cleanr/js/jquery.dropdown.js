//drop down menu

jQuery(document).ready(function(){
	jQuery("ul#nav ul.children").parent().append("<span></span>");
	jQuery("ul#nav ul.children span").addClass("child");
    jQuery("ul#nav li").hover(function(){    	
        jQuery('ul:first',this).css('display', 'block');    
    }, function(){    
        jQuery('ul:first',this).css('display', 'none');    
    });    
});