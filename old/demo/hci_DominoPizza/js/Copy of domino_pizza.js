$(document).ready(function(){
  //@default setting   
  //topping none
  $('#frm_makepizza div li').each(function(){
    $('input:first',this).attr('checked','checked');});
  $('#rdo_size_medium').attr('checked','checked');//size medium

  
  //@change pizza size when click radio button
  //#event:.change; select input name=rdo_size; change class bg of .pizza
  $("input[name='rdo_size']").change(function(){    
//    var checked_value = $("input[name='rdo_size']:checked").val();
//    if(checked_value == 'rdo_size_small')
//    {
//      bg_url = 'url(images/pizza_small.jpg)';        
//    }
//    else if(checked_value=='rdo_size_medium'){        
//      bg_url = 'url(images/pizza_medium.jpg)';        
//    }
//    else if(checked_value=='rdo_size_large'){        
//      bg_url = 'url(images/pizza_large.jpg)';   
//    }  
//    $(".pizza_outer").css('background-image',bg_url);      
  });
   
  //@change topping pepperoni
  //#event: .change; select input name=rdo_topping_m_pep; determine value; give matching topping
  $("input[name='rdo_topping_m_pep']").change(function(){
    var checked_value= $("input[name='rdo_topping_m_pep']:checked").val();  
    //alert(checked_value);    
    if(checked_value =='none'){
      //img src change           
      bg_url = 'url(images/overlay-empty-trans.png)'; 
      if($("input[name='rdo_topping_m_pep']").parent().hasClass('li_highlight')){
        $("input[name='rdo_topping_m_pep']").parent().removeClass('li_highlight');        
      }      
    }
    else{
      //@highlight current li if not none  
      $("input[name='rdo_topping_m_pep']").parent().addClass('li_highlight');
      if(checked_value=='whole'){       
        bg_url = 'url(images/overlay1-trans.png)';                   
      }
      else if(checked_value=='left'){
        bg_url = 'url(images/overlay1-left-trans.png)';           
      }
      else{//right
        bg_url = 'url(images/overlay1-right-trans.png)';                 
      }       
    }             
    $(".pizza_topping1").css('background-image',bg_url);             
  });
   
   
  //@change topping pineapple
  //#event: .change; select input name=rdo_topping_v_pine; determine value; give matching topping
  $("input[name='rdo_topping_v_pine']").change(function(){
    var checked_value= $("input[name='rdo_topping_v_pine']:checked").val();     
    var current_li =$("input[name='rdo_topping_v_pine']").parent();
    if(checked_value =='none'){            
      bg_url = 'url(images/overlay-empty-trans.png)';//img src change                  
      if(current_li.hasClass('li_highlight')){
        current_li.removeClass('li_highlight');
      }
    }
    else{
      //@highlight current li if not none  
      current_li.addClass('li_highlight');
      if(checked_value=='whole'){       
        bg_url = 'url(images/overlay3-trans.png)';                   
      }
      else if(checked_value=='left'){
        bg_url = 'url(images/overlay3-left-trans.png)';           
      }
      else{//right
        bg_url = 'url(images/overlay3-right-trans.png)';                 
      }      
    }    
    $(".pizza_topping2").css('background-image',bg_url);           
  });
   
  //@change topping mushroom
  //#event: .change; select input name=rdo_topping_v_mush; determine value; give matching topping
  $("input[name='rdo_topping_v_mush']").change(function(){
    var checked_value= $("input[name='rdo_topping_v_mush']:checked").val(); 
    var current_li =$("input[name='rdo_topping_v_mush']").parent();
    //alert(checked_value);
    if(checked_value =='none'){
      //img src change
      src = "images/overlay-empty-trans.png";
      if(current_li.hasClass('li_highlight')){
        current_li.removeClass('li_highlight');
      }
    }
    else{
      current_li.addClass('li_highlight');
      if(checked_value=='whole'){
        src='images/overlay2-trans.png';       
      }
      else if(checked_value=='left'){
        src='images/overlay2-left-trans.png';       
      }
      else{
        src='images/overlay2-right-trans.png';
      }      
    }    
    $('.img_pizza_topping').attr('src',src);
  });
});
