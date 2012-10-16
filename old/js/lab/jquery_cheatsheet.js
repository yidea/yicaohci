$(document).ready(function(){
  //@force all external links to open in new window
  //select all a link start with http:// add attribute target =_blank
      $('a[href^=http://]').attr('target','_blank');

  //@solve double submit problem(latency) by disable button after first time submit
  //select submit button, set attribute to disabled
      $('form').submit(function(){
        $(':submit',this).attr('disabled','disabled');
      });
//@set table width = 940px
//select table, set css width = 940
      $('table').css('width','940px');
 //@ select table each tr's first td , add class bold
      $('table tr').each(function(){
        $('td:first',this).addClass('highlight_normal');});

//@mouseover toggleClass
//select #toggleClass, set toggleClass inside mourseover event
  $('#toggleClass').mouseover(function(){$('#toggleClass').toggleClass('highlight_normal');
    }).mouseout(function(){$('#toggleClass').toggleClass('highlight_normal');});

  // btn.click{ if txt.isenabled -> disable; else->enable}
       $('#btn_enable_textbox').click(function(){
         if($('#txt_enable').is(':enabled')){
           $('#txt_enable').attr('disabled','disabled');
           $('#btn_enable_textbox').attr('value','enable textbox');
         }else{//txt is disabled, enable it
           $('#txt_enable').attr('disabled','');
           $('#btn_enable_textbox').attr('value','disable textbox');           
         }         
       });//end of click fn


       $("input[name='rdo_sause1']").change(function(){
         if ($("input[name='rdo_sause1']:checked").val()) {alert($("input[name='rdo_sause1']:checked").val());}
       });
       
       //@select all checkbox
       //#select all checkbox with name=ckb;determine checked or not; set checkbox.val([value1,..])
       $("input[name='ckb_select_all']").change(function(){
        if($("input[name='ckb_select_all']:checked").val()){//or $().is(':checked') -determine checkbox checked or not
          $("input[name='ckb']").val(['ckb1','ckb2','ckb3']);//set value to select all checkbox
        }else{
          $("input[name='ckb']").attr('checked','');// uncheck all checkbox
        }});

      //@See selected values
      //#select input name=btn_multislt_value; get value and display
      $("input[name='btn_multislt_value']").click(function(){
        var value = 'selected value= ' +$("select[name='slt_mult'] ").val();//no need option:selected
        var text = '\nselected text= ' + $("select[name='slt_mult'] option:selected").text();
        alert( value + text );
      });

      //@set default select option
      //#select select by name option ;
      $("select[name='slt_1'] option:eq(1)").attr('selected','selected');

      //@prevent link behavior
      //#event:click; select a id=a_prevent_link, preventDeafut()
      $('a#a_prevent_link').click(function(event){
        event.preventDefault();});

      //@get mouse absolute x y position by dblclick
      //#event:$(document).dblclick; select p id=display_xy; display e.pageX, Y
      $(document).dblclick(function(event){
        $('#display_xy').html('x=' + event.pageX + '; y='+ event.pageY);
      });

      //@get mouse relative x,y postion by mouseover p85
      //#event: mousemove; select div id =mouse_relative_position;caculate relative x,y, appendto div
      $('#mouse_relative_position').mousemove(function(event){
        var relative_x = event.pageX - this.offsetWidth;
        var relative_y = event.pageY - this.offsetHeight;
//        $('div#mouse_relative_position').append('relative X=' + relative_x);
$('span#relative_calculation').html('offsetWidth'+this.offsetWidth+'; relative X=' + relative_x + '<br/>offsetHeight'+this.offsetHeight+'; relative Y=' + relative_y);
      });

      //@btn click to toggle Disable right-click contextual menu
      //#event: toggle contextmenu ; select document; prevent default
$("input[name='btn_disable_contextmenu']").toggle(function(){
  //first click event 
  $(document).bind('contextmenu', function(){return false;});
  $("input[name='btn_disable_contextmenu']").val("enable_contextmenu");
}, function(){
  $(document).unbind('contextmenu');
  $("input[name='btn_disable_contextmenu']").val("disable_contextmenu");});
  
  //@module show hide content 
  //#event: img click ; select div class= module_content; this. toggle() based on hidden or not 
  $("div.module_header img").click(function()
  {//this -img
    $(this).closest('div.module').find('div.module_content').toggle('fast',function(){//this- module_content
      $(this).closest('div.module').find('div.module_header').toggleClass('module_hidden',$(this).is(":hidden"));   
      if($(this).is(":hidden")){              
        $("div.module_header img").attr('src','http://localhost/yicaohci/images/lab/enlarge.jpg');        
      }
      else{
        $("div.module_header img").attr('src','http://localhost/yicaohci/images/lab/small.jpg');           
      }      
    });    
  });
      

});//end of $(document).ready()
