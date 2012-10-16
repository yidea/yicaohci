$(document).ready(function(){  
  //@load spinner
  $('#spinner_q').spinner({min: -1000, max: 1000, increment: 'fast'});
  
  //@default setting - check none option
  //topping none
  $('#frm_makepizza div li').each(function(){
    $('input:first',this).attr('checked','checked');
  });

  //default check sauce regular
  $('#rdo_r_sauce_whole').attr('checked','checked');
  //# find input id =rdo_r_sauce_whole parent ,addclass li_highlight
  $('#rdo_r_sauce_whole').parent().addClass("li_highlight");
    
  //$("input[name='rdo_size']").trigger('change');
  $('#rdo_size_medium').attr('checked','checked');//size medium

  //@default hand toasted
  //#selecct id=rdo_crusts checked = checked
  $('#rdo_crusts_small').attr('checked','checked');

  function calculate_tax(){
    //@calculate tax = 10%* total price 
    //#select all span class=pizza_module_content; loop and sum totoal price 
    var flt_price =0;
    var flt_total_price =0;
    var tax= 0;
    $(".pizza_module_content li span").each(function(){
      price = parseFloat($(this).text().substring(1))
     //temp = $(this).text();
     //var reg_result= temp.match(/(\d+[.]?\d*)/);    
      flt_price+= price;      
    });
    tax = (flt_price /10).toFixed(2); 
    flt_total_price = flt_price+parseFloat(tax);
    flt_total_price = flt_total_price.toFixed(2);
    
    $("#tax").text("$" + tax);
    $("#total_price").text("$"+flt_total_price);
    
    //$("#total_price")
    //alert(flt_total_price);    
  }

  //@topping meat's all input highlight when not none and change pizza pic
  //#select all input in div id=topping_meat; loop change function
  $("#frm_makepizza input:radio").each(function(){    
    if($(this).attr('name') != 'rdo_size')
    { //exclude input radio name=rdo_size
      $(this).change(function()
      {//this - input:radio        
        //highlight color if val not none 
        if($(this).is(':checked')){//checked radio
          var checked_value= $(this).val();
          var current_li = $(this).parent();
          var whole_price = 1.00;// pizza ingridient price whole
          var half_price = 0.50;
          var ingridient_price =0;
          if(checked_value!='none'){
            //highlight color
            current_li.addClass('li_highlight');          
          }
          else{//none
            if(current_li.hasClass('li_highlight')){
              //change back to no effect 
              current_li.removeClass('li_highlight');            
            }          
          }
          //@topping meat pepperoni                
          if($(this).attr('name')=='rdo_topping_m_pep' )
          {
            var ingredients_name= 'pepperoni';
            if(checked_value =='none'){//img change                       
              bg_url = 'url(images/overlay-empty-trans.png)';            
            }
            else if(checked_value=='whole'){       
              bg_url = 'url(images/overlay1-trans.png)';
            //add ingredient +side                      
              ingridient_price = whole_price;
            
            }
            else if(checked_value=='left'){
              bg_url = 'url(images/overlay1-left-trans.png)';           
              ingridient_price = half_price;
            }
            else{//right
              bg_url = 'url(images/overlay1-right-trans.png)';
              ingridient_price = half_price;
            }       
            $(".pizza_topping1").css('background-image',bg_url);             
          
            //@pep content chagne(add, change,delete)
            //# li not exist->add; li exist->update / delete based on checked_value
            var content= ingredients_name + ' ('+ checked_value+ ' side)';                
            var html_content='';            
            if($("li.pepperoni").length){//li exist
              if(checked_value=="none"){//delete
                $("li.pepperoni").remove();
              }
              else{//update
                $("li.pepperoni").html(content);
              }
            }
            else{//li not exist ->add
              html_content= "<li class='"+ingredients_name+"'>"+content+'</li>';
              $(".pizza_ingredients ul").append(html_content);            
            }    
            
            //@pep price change            
            //# li not exist->add; li exist->update / delete based on checked_value
            var price= ingredients_name + ' - '+ checked_value+ ' side <span>'+'$'+ingridient_price.toFixed(2)+ '</span>';
            var html_price='';            
            if($("li.pepperoni_price").length){//li exist
              if(checked_value=="none"){//delete
                $("li.pepperoni_price").remove();
              }
              else{//update                
                $("li.pepperoni_price").html(price);
              }
            }
            else{//li not exist ->add              
              html_price= "<li class='"+ingredients_name+"_price'>"+price+'</li>';
              $(".pizza_module_content ul").append(html_price);            
            }//end if    
          }

          //@topping pineapple
          if($(this).attr('name')=='rdo_topping_v_pine' )
          {
            var ingredients_name= 'pineapple';
            if(checked_value =='none'){//img change                       
              bg_url = 'url(images/overlay-empty-trans.png)';            
            }
            else if(checked_value=='whole'){       
              bg_url = 'url(images/overlay3-trans.png)';              
              ingridient_price = whole_price;
            //add ingredient +side                       
            }
            else if(checked_value=='left'){
              bg_url = 'url(images/overlay3-left-trans.png)';                    
              ingridient_price =half_price;
              
            }
            else{//right
              bg_url = 'url(images/overlay3-right-trans.png)';                
              ingridient_price =half_price;
            }       
            $(".pizza_topping2").css('background-image',bg_url);             
          
            //@content chagne(add, change,delete)
            //# li not exist->add; li exist->update / delete based on checked_value
            var content= ingredients_name + ' ('+ checked_value+ ' side)';
            var html_content='';            
            if($("li.pineapple").length){//li exist
              if(checked_value=="none"){//delete
                $("li.pineapple").remove();
              }
              else{//update
                $("li.pineapple").html(content);
              }
            }
            else{//li not exist ->add
              html_content= "<li class='"+ingredients_name+"'>"+content+'</li>';
              $(".pizza_ingredients ul").append(html_content);            
            }   
            
            //@pineapple price change            
            //# li not exist->add; li exist->update / delete based on checked_value
            var price= ingredients_name + ' - '+ checked_value+ ' side <span>'+'$'+ingridient_price.toFixed(2)+ '</span>';
            var html_price='';            
            if($("li.pineapple_price").length){//li exist
              if(checked_value=="none"){//delete
                $("li.pineapple_price").remove();
              }
              else{//update                
                $("li.pineapple_price").html(price);
              }
            }
            else{//li not exist ->add              
              html_price= "<li class='"+ingredients_name+"_price'>"+price+'</li>';
              $(".pizza_module_content ul").append(html_price);            
            }//end if    
          }

          //@topping mushroom 
          if($(this).attr('name')=='rdo_topping_v_mush' ){
            var ingredients_name= 'mushroom';
            if(checked_value =='none'){//img change                       
              src = 'images/overlay-empty-trans.png';            
            }
            else if(checked_value=='whole'){                
              src='images/overlay2-trans.png';       
            //add ingredient +side                   
            ingridient_price =whole_price;
            }
            else if(checked_value=='left'){            
              src='images/overlay2-left-trans.png';       
              ingridient_price =half_price;
            }
            else{//right
              src='images/overlay2-right-trans.png';
              ingridient_price =half_price;
            }                 
            $('.img_pizza_topping').attr('src',src);
          
            //@content chagne(add, change,delete)
            //# li not exist->add; li exist->update / delete based on checked_value
            var content= ingredients_name + ' ('+ checked_value+ ' side)';
            var html_content='';            
            if($("li.mushroom").length){//li exist
              if(checked_value=="none"){//delete
                $("li.mushroom").remove();
              }
              else{//update
                $("li.mushroom").html(content);
              }
            }
            else{//li not exist ->add
              html_content= "<li class='"+ingredients_name+"'>"+content+'</li>';
              $(".pizza_ingredients ul").append(html_content);            
            }  
            
            //@mushroom price change            
            //# li not exist->add; li exist->update / delete based on checked_value
            var price= ingredients_name + ' - '+ checked_value+ ' side <span>'+'$'+ingridient_price.toFixed(2)+ '</span>';
                     
            var html_price='';            
            if($("li.mushroom_price").length){//li exist
              if(checked_value=="none"){//delete
                $("li.mushroom_price").remove();
              }
              else{//update                
                $("li.mushroom_price").html(price);
              }
            }
            else{//li not exist ->add              
              html_price= "<li class='"+ingredients_name+"_price'>"+price+'</li>';
              $(".pizza_module_content ul").append(html_price);            
            }//end if    
          }                
        //end 
        }  
        //recalculate tax of current items 
        calculate_tax();
      });
    }   
  });//end function
  
  
  //@change pizza size when click radio button
  //#event:.change; select input name=rdo_size; change class bg of .pizza
  $("input[name='rdo_size']").change(function(){    
    //@highlight selection li.li_highlight
    //clear first:find li, remove
    $('#size li.li_highlight').removeClass('li_highlight');
    var current_li= $("input[name='rdo_size']:checked").parent();
    current_li.addClass('li_highlight');        
  }).change();//trigger by default

  //@change pizza crust when click radio button
  //#event:.change; select input name=rdo_size; change class bg of .pizza
  $("input[name='rdo_crusts']").change(function(){
    //@highlight selection li.li_highlight
    //clear first:find li, remove
    $('#crusts li.li_highlight').removeClass('li_highlight');
    var current_li= $("input[name='rdo_crusts']:checked").parent();
    current_li.addClass('li_highlight');
  }).change();//trigger by default
           
});//whole end  
