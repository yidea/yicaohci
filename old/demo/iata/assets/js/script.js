/*Used by Amer, Open Microsite*/

$(function(){
    var test = "asdfsdf";
    alert(test);
    
    

    //@Menu effect, hover highlight
    $("#nav_main>li").hover(
        function(){
            li_width= $(this).width();
            centred_width = ( ( 96 - (li_width / 2) ) * -1 );
            $(this).prepend($("<span class='nav_highlight'></span>"))
            $(this).children("span").css("left",  centred_width  + "px");
            $(this).children("a").stop().fadeTo(700,1);
            $(this).children("span:nth-child(1)").stop().fadeTo(700,1);
            $(this).children(".dropdown-box").fadeIn(1);
        },
        function(){
            $(this).children("a").stop().fadeTo(700,0.7);
            $(this).children("span:nth-child(1)").stop().fadeOut(700);
            
            $(this).children(".dropdown-box").fadeOut(1);
        });
    
    //@Slideshow    
    $("#cycle_wrapper").cycle({
        speed:  800,
        pause:true,
        timeout:20000, // 20000
        pager:  "#cycle_nav"            
    });
    
    $("#cycle_wrapper").fadeTo(1000, 1);        
    $("#cycle_loader").fadeOut(250);            
    
    //@colorbox youtube
    $("a.youtube").colorbox({
        rel:'youtube',
        iframe:true,
        scrolling:false,
        innerWidth:640,
        innerHeight:385,
        opacity:0.6
    });
    $('.img-frame1').colorbox({
        opacity:0.6
    });
    
    //cloudcommand scrollto
    $('#nav_panel').delegate('a[href^="#"]', 'click', function(e){
        e.preventDefault();
        var anchor = this.hash;
        $.scrollTo(anchor,900);
    });
    
    //@dropdown menu - click
    var dropdown_box_button = $('#dropdown-box-button');
    var dropdown_box_menu = $('#dropdown-box-menu');
    //click dropdown button
    dropdown_box_button.click(function(e){
        e.preventDefault();
        dropdown_box_menu.toggle();
        dropdown_box_button.toggleClass('menu_open');
        dropdown_box_menu.find('input:text:first').focus();
    });
    //mouseup inside the dropdown menu
    dropdown_box_menu.mouseup(function(e){
        return false;
    });
    //mouseup outside of dropdown button -> hide menu
    $(document).mouseup(function(e){
        if($(e.target).parent('#dropdown-box-button').length ==0){//not dropdown button clicked
            dropdown_box_menu.hide();
            dropdown_box_button.removeClass('menu_open');
        }
    });
    
    /*@tab
      fed
     Logic: tab click - hide all tabcontaner and only show the clicked one based on href; click first one when loaded    
     **/
    var tabContainers =$('#main_content > section');
    tabContainers.hide().filter(':first').show();
    $(window).bind('hashchange', function () {
        var hash = window.location.hash || '#overview';        
        tabContainers.hide();
        tabContainers.filter(hash).show();
//        $('div.tabs ul.tabNavigation a').removeClass('selected');
//        $('a[hash=' + hash + ']').addClass('selected');
    });    
    $(window).trigger("hashchange");    
    
//    var tabs = $('#sidenav a[href^="#"]');    
//    tabs.add('#inpage_nav a[href^="#"]');//inpageNav    

//    tabs.click(function(){
//        //console.log(this.hash); // section #feature
//        tabContainers.hide().filter(this.hash).show(); 
//        var sectionHeight= $(this.hash).height() +100;
////        if(sectionHeight < $(window).height())       
//        $('#container-931').css('height', sectionHeight);        
//    });//.filter(':first').click();
//    
//    var inpageNav =$('#inpage_nav a[href^="#"]');
//    inpageNav.click(function(){
//        //console.log(this.hash); // section #feature
//        tabContainers.hide().filter(this.hash).show(); 
//        var sectionHeight= $(this.hash).height() +100;
//        $('#container-931').css('height', sectionHeight);        
//    })

/*@location.hash 
 *location.hash get your #admin of the URL
 *  Refreash , 
 * if hasnohash->set #overview ; else -> get hash
 * when refresh: 1 if has correct hash -> switchto anchor (hide all section,filter that hash) 
 **/
//var hash=!window.location.hash ? "#overview": window.location.hash;
//tabContainers.hide().filter(hash).show();

//$(window).hashchange( function(){
//alert( location.hash );
//})

//console.log(hash);

//@inpage nav
//    $('#page1 #inpage_nav').delegate('a[href^="#"]', 'click', function(e){
//        e.preventDefault();
//        var anchor = this.hash;
//        $.scrollTo(anchor,900);
//    });

//@footer position adjust
//#container-931 height change based on section's height
//    var contentHeight= $('#main_content').height();
//    $('#container-931').css('height', contentHeight);

});//jquery