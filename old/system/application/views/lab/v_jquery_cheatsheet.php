<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title><?= $html_title; ?></title>
    <link rel="shortcut icon" href="<?= base_url() ?>images/favicon.ico" type="image/x-icon" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/960/reset.css" />    
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/960/960.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/960/text.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/common.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/form.css" />
    <style type="text/css">
      div.module_hidden{
        background-color: darkblue !important  ;      
      }
    </style>
    
    <!-- Scripts -->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/lab/jquery_cheatsheet.js"></script>
  </head>
  <body class="bg_white">
    <div class="container_12  bg_greylight">
      <!--header -->
      <div id="header" class="grid_12" >
        <!--Back to Home button -->
        <?php echo $this->load->view('lab/v_backhomebtn'); ?>
        <!-- end Back to Home button-->
      </div>
      <div class="clear"></div>
      <!--navbar-->        

      <!--content main -->
      <div id="content" class="grid_12" > 
        <table>
          <caption>jQuery Concept- "select something, do something" & $()= jQuery()</caption>
          <tr>
            <td>load all CSS files before including jQuery</td>
            <td><p>load all CSS files in order before including jQuery</p>
              <pre><code>&lt;link rel="stylesheet" href="&lt;?php echo base_url(); ?&gt;css/960/reset.css" /&gt;
&lt;link rel="stylesheet" href="&lt;?php echo base_url(); ?&gt;css/960/960.css" /&gt;
&lt;script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"&gt;&lt;/script&gt;
</code></pre>
              <p>in Development use non-minifed jQuery for debugging, in Release,use Google hosts version of jQuery minified code(reliable,fast,cached)</p>
            </td>
          </tr>

          <tr>
            <td> $(document).ready(function(){}; VS. window.onload </td>
            <td><p><strong>window.onload</strong> is indicating DOM and Window loading are ready-everything on webpage has been loaded(image,flash). Waiting for this event can be time consuming.And window.onload can only contain 1 function reference.
                <br/><strong>$(document).ready()</strong> is executed after DOM is ready,but before Window loads - image and flash loading might not completed
              </p>
              <pre><code>$(document).ready(function(){
   //...code
});
</code></pre>
            </td>
          </tr>

          <tr>
            <td>Check wrapper set before select </td>
            <td><p>check empty status of the wrapper set using if($('a').length)</p>
              <pre><code>if($('a').length){
 $('a')[0].href='test';
}
</code></pre>
            </td>
          </tr>

          <tr>
            <td>Selectors</td>
            <td>
              Determine an selector exist or not before do it
              <pre><code>if ($(selector).length ) {//do something}
$('element').length == 0; // no element found
</code></pre>
              <pre><code>//@Basic selector(html tag,id,class selector)
var a = $('a');//html element
var message =$('#message');//id
var navmenu =$('.navmenu');//class
var linkslist = $('#navmenu a');//tag select all a links inside id

//@Advanced selector(adjacent,child, attribute selector  )
var divShow = $('h2+div');//select adjacent tag appear next after a tag
var temp = $('li>a');//child
var imgAlt = $('img[alt]');//select img which has 'alt' attribute
var inputText = $('input[type=text]');//select input which type is text
var common1 = $('a[href^=http://]')//select external site links- a href beginning with http://
var common2 =$('a[href^=mailto:]')//select mailto links- a href beginning with mailto
var common3 = $('a[href$=.pdf]')//select pdf files- a href ending with .pdf
var common4 = $('a[href*=jquery.com]'); //select links href which contains word 'index.html'
var common5 = $('a:not([href^=http://])');//exclude external links
</code></pre>
              <p></p>
              <pre><code>//Filter selection by position
var filter0 = $('a:first');//first a element
var filter01 = $('ul li:last-child');//last li item
var filter1 = $('.table1 tr:even');//:even- select every even elements from the selection(start at 0,2,4)
var filter2 = $('.table2 tr:odd');//:odd- select every odd elements (1,3,5)
var filter3 = $('a:not(.navButton)');//:not -ignore certain class or id elements
var filter4 = $('li:has(a)');//:has -select li elements contain selector a
var filter5 = $('p:contain(welcom)');//:contain- select p element cotaining specific text
var filter6 = $('div:hidden');//:hidden- select div elements that are hidden
var fitler7 = $('div:visible');//:visible- opposite of :hidden
</code></pre>
              <p>basic CSS selectors supported by jQuery<br/>
                <img src="<?php echo base_url(); ?>/images/lab/jquery_selector.jpg" width="619" height="388" alt="jQuery selector table"/>
              </p>
            </td>
          </tr>

          <tr>
            <td>DOM Traversing & Filtering</td>
            <td>
              <ul>
                <li>
                  $(E).parent() // select E's direct parent element
                  <br/>$(E).closest(selector)// select selector appear first from context(up and down)
                  <br/>$(E).find(selector)// find matching elements inside E
                  <pre><code>var body$ = $(this).closest('div.module').find('div.body');</code></pre>
                </li>
              </ul>
            </td>
          </tr>

          <tr>
            <td>Attributes get and set</td>
            <td>
              <p>
                get attribute: E.attr('attributeName'); set attribute:E.attr('attrbuteName','value'); remove attribute :E.removeAttr('attributeName')
                <br/><strong>Example 1:</strong> force all external links to open in new window
              </p>
              <ul>
                <li><a href="http://www.google.com">google link</a></li>
                <li><a href="http://bing.com">bing link</a></li>
              </ul>
              <pre><code>//select all a link start with http:// add attribute target =_blank
$('a[href^=http://]').attr('target','_blank');
</code></pre>
              <p><strong>Example 2:</strong> solve double submit problem(latency) by disable button after first time submit</p>
              <form id="form_doublesubmit" name="form_doublesubmit" action="#" method="post">
                <input type="submit" value="submit" />
              </form>
              <pre><code>//select submit button, set attribute to disabled
$('form').submit(function(){
  $(':submit',this).attr('disabled','disabled');});</code></pre>              
            </td>
          </tr>

          <tr>
            <td>CSS style manipulate</td>
            <td>
              <ul>
                <li><strong>Get&Set style</strong>, get: E.css('cssTagName'); set E.css('cssTagName',value)
                  <br/>
                  <pre><code>//@set table width = 940px
$('table').css('width','940px');</code></pre>
                </li>
                <li>
                  addClass(className) & removeClass(className)& toggleClass(className) - add class if doesn't exist, remove if class exist
                  <pre><code>//@ select table each tr's first td , add class bold
$('table tr').each(function(){
$('td:first',this).addClass('highlight_nomal');}); 
</code></pre>
                  <div id="toggleClass">mouse over here to see toggleClass effect</div>
                  <pre><code>//@mouseover toggleClass
//select #toggleClass, set toggleClass inside mourseover event
  $('#toggleClass').mouseover(function(){$('#toggleClass').toggleClass('highlight_normal');
    }).mouseout(function(){$('#toggleClass').toggleClass('highlight_normal');});
</code></pre>
                </li>
                <li><strong>$(e).toggleClass(className)</strong> //if selecotr doesn't this className,it is added, if the className already exist in the selctor, it is removed
                  <br />
                  <strong>$(e).toggleClass(className,switch)</strong>// switch is a boolean value to determine whether the class should be added/removed(add when true)
                  <pre><code>$('div.caption img').click(function(){
$(this).closest('div.module').find('div.body')
  .toggle('slow',function(){
    $(this).closest('div.module')
      .toggleClass('rolledup',$(this).is(':hidden'));//when .is(':hidden')=ture, add class: rolledup
  });
});</code></pre>
                </li>

              </ul>
            </td>
          </tr>

          <tr>
            <td>DOM element content manipulate</td>
            <td>
              <ul>
                <li><strong>get/set HTML content with .html() and .html('html code')</strong> <br/>
                </li>
                <li><strong>get/set Text content with .text() and .text('content')</strong>
                  <br/>
                  <pre><code>var text = $('#p-content').text();</code></pre>
                </li>
                <li>
                  <strong>Adding content to DOM</strong><br/>
                  <pre><code>$('p').append('&lt;b&gt;some text&lt;b&gt;');//target.append('html') at the end
$('p').prepend('content')//target.prepend('html code') at the beginning
target.before('html content') //insert as sibling before the target element
target.after('html content') //insert as sibling after the target element
content.appendTO(target)
content.prependTo(traget)
$('img[alt]').replaceWith('&lt;span&gt;text&lt;/span&gt;') //replaceWith(newContent)
$('img#temp').clone().appendTo('.photo');//clone
e.remove(selector)//remove

element.wrap("&lt;div class='test'&gt; &lt;/div&gt;")//wrap elements with defined html tag
</code></pre>

                </li>
              </ul>

            </td>
          </tr>

          <tr>
            <td>$(this) & Iterating a set of elements .each()</td>
            <td>
              <p>$(this) is a reference to a current selected DOM element.</p>
              <pre><code>$('a').each(function(){
    alert($(this).attr('href')); 
});
</code></pre>
            </td>
          </tr>

          <tr>
            <td>DOM Event Model</td>
            <td>
              <h3>Propagation in DOM level 2 Event Model (traverse the DOM hierarchy twice- Capture phase&Bubble phase)</h3>
              <br/><img src="<? echo base_url() ?>images/lab/event_propagation.jpg" width="424" height="178" alt="event propagation"/>
              <h3>2 ways of event handler declaration</h3>
              <pre><code>$(function(){$('#example')[0].onmouseover = function(event) {alert('hello')};});//script level
&lt;img id="example" src="example.jpg" onclick="say('BOOM!');" alt="ooooh! ahhhh!"/&gt;//attribute level - not Unobtrusive 
</code></pre>
            </td>
          </tr>

          <tr>
            <td>Form elements manipulate</td>
            <td>
              <form id="form1" name="form1" action="#" method="post">
                <fieldset>
                  <h3>h3 heading for form</h3>
                  <ol>
                    <li>
                      <strong>Select form element by type</strong><br/>
                      $('input:text') | :text,:password,:checkbox,:radio,:submit,:image,:button,:file,:reset
                      <br/><strong>Select form element by name</strong><br/>
                      $("input[name='rdo_sause1']")<br/>
                      $("select[name='slt_1'] option:eq(1)")
                    </li>
                    <li>                      
                      <strong>Disable/Enable form elements(first determine element is disabled or enabled)</strong><br/>
                      <input type="button" id="btn_enable_textbox" name="btn_enable_textbox" value="disable textbox" />
                      <input type="text" id="txt_enable" name="txt_enable" value="123" /></li>
                    <pre><code>// btn.click{ if txt.isenabled -> disable; else->enable}
$('#btn_enable_textbox').click(function(){
 if($('#txt_enable').is(':enabled')){//determin element is enabled or not
   $('#txt_enable').attr('disabled','disabled');//disable element
 }else{$('#txt_enable').attr('disabled','');//enable element }});//end of click fn</code></pre>

                    <!-- checkbox, radio manipulate-->
                    <li>
                      <strong>Check/uncheck multiple checkbox/radio, determine if checkbox/radio is checked </strong><br/>
                      <label for="ckb_select_all" style="width:150px">Select all checkbox</label>
                      <input type="checkbox" id="ckb_select_all" name="ckb_select_all" value="select_all" />
                      <br/>

                      <label for="ckb1">Checkbox input1</label><input type="checkbox" id="ckb1" name="ckb" value="ckb1" />
                      <br/><label for="ckb2">Checkbox input2</label><input type="checkbox" id="ckb2" name="ckb" value="ckb2" />
                      <br/><label for="ckb3">Checkbox input3</label><input type="checkbox" id="ckb3" name="ckb" value="ckb3" />
                      <pre><code>//@select all checkbox; and same to radio select all
//#select all checkbox with name=ckb;determine checked or not; set checkbox.val([value1,..])
$("input[name='ckb_select_all']").change(function(){
if($("input[name='ckb_select_all']:checked").val()){//or $().is(':checked') -determine checkbox checked or not
  $("input[name='ckb']").val(['ckb1','ckb2','ckb3']);//set value to select all checkbox
}else{
  $("input[name='ckb']").attr('checked','');// uncheck all checkbox
}});</code></pre>
                    </li>

                    <li>
                      <strong>Set/get value of any type of input -E.val('value'); alert(E.val())</strong><br/>
                      <label for="rdo1" style="width:150px">Check radio to see value</label>
                      <input type="radio" id="rdo_sause1_1" name="rdo_sause1" value="rdo_sause1_1" />
                      <input type="radio" id="rdo_sause1_2" name="rdo_sause1" value="rdo_sause1_2" />
                      <input type="radio" id="rdo_sause1_3" name="rdo_sause1" value="rdo_sause1_3" />
                      <pre><code>$("input[name='rdo_sause1']").change(function(){
 if ($("input[name='rdo_sause1']:checked").val()) {alert($("input[name='rdo_sause1']:checked").val());}
});</code></pre>
                    </li>

                    <li><strong>Get/set value ofs Dropdown box - select option</strong><br/>
                      <label for="slt_1" style="width:150px">select option dropdown</label>
                      <select name="slt_1" id="slt_1">
                        <option value="select">select one</option>
                        <option value="opt1">option 1</option>
                        <option value="opt2">option 2</option>
                        <option value="opt3">option 3</option>
                      </select>
                      <pre><code> //@set default select option
//#select select by name option ;
$("select[name='slt_1'] option:eq(1)").attr('selected','selected');</code></pre>
                    </li>
                    <li>
                      <label for="slt_mult" style="width:150px">multi-select dropdown</label>
                      <select name="slt_mult" id="slt_mult" multiple="multiple" size="3">
                        <option value="opt1">option 1</option>
                        <option value="opt2">option 2</option>
                        <option value="opt3">option 3</option>
                      </select>
                      <input type="button" id="btn_multislt_value" name="btn_multislt_value" value="See selected option values and text" />
                      <pre><code>//@See selected values
//#select input name=btn_multislt_value; get value and display
//set mulit-value $('select').val(['option two', 'option four']);
$("input[name='btn_multislt_value']").click(function(){
var value = 'selected value= ' +$("select[name='slt_mult'] ").val();////no need option:selected
var text = '\nselected text= ' + $("select[name='slt_mult'] option:selected").text();
alert( value + text );});</code></pre>
                    </li>
                  </ol>
                </fieldset>
              </form>

              <form id="form2" class="form_left_align basic mb-10px" action="#" method="post" >
                <fieldset class="bg_white">
                  <h3>Style#2 basic</h3>
                  <ol>
                    <li><label for="txt_sid2">Student ID <em>*</em></label>
                      <input type="text" name="txt_sid2" class="tooltip_test" id="txt_sid2" value="" title="If you don't have one, enter your Social Security Number for your Student ID."/>
                    </li>
                    <li><label for="txt_birthday2">Birthday</label>
                      <input type="text" class="tooltip_test" name="txt_birthday2" id="txt_birthday2" value="" title='MM/DD/YYYY (e.g. "11/18/2010")' />
                    </li>
                    <li><label for="txt_password2">Choose a PIN <em>*</em></label>
                      <input type="password" style="width:40px" class="tooltip_test" name="txt_password2" id="txt_password2" value="" title="Choose 4 digit number as PIN" maxlength="4" />
                    </li>
                    <li><label for="txt_repassword2">Re-enter PIN</label>
                      <input type="password" class="tooltip_test" style="width:40px" name="txt_repassword2" id="txt_repassword2" value="" title="Re-enter your 4 digit Pin" maxlength="4" />
                    </li>
                    <li> <label for="btn_submit2"></label>
                      <input id="btn_submit2" type="submit" value="submit" /></li>
                  </ol>
                </fieldset>
              </form>
            </td>
          </tr>

          <tr>
            <td>jQuery Events</td>
            <td>
              <ul>
                <li>
                  <strong>jQuery Standard event handler- .bind() / .unbind() method </strong><br/>
                  <pre><code>$('#thing1').bind('click.editMode',someListener);
$('*').unbind('click.editMode');</code></pre>
                  <strong>we can add following standard handler to proper DOM elements:</strong>
                  <a href="http://api.jquery.com/blur/">check jQuery event API for details</a>
                  <br/>blur
                  focus
                  load
                  resize
                  scroll
                  unload
                  beforeunload
                  click
                  dblclick
                  mousedown
                  mouseup
                  mousemove
                  mouseover
                  mouseout
                  change select
                  submit
                  keydown keypress
                  keyup
                  error
                  <pre><code>jQuery('a').bind('click',function(){//code here})</code></pre>
                </li>
                <li><strong>.trigger() specific event</strong><br/>
                  <pre><code>// Invoke the function passed to click.unique
$('a').trigger('click.unique');</code></pre>
                </li>

                <li> <strong>Use shortcuts to replace bind() event</strong> <br/>
                  e.g. .click() , mouseout(), focus()
                </li>
                <li><strong>jQuery nomalized Event objects</strong><br/>                  
                  To access event object you need use a parameter function(event) or function(e) when use event
                  <pre><code>$('ul').click(function(event){ // Attach click handler to ul and pass event object
// event.target is the a link
$(event.target).parent().remove(); // Remove using parent()
return false; // Cancel default browser behavior, stop propagation});</code></pre>
                  <img src="<? echo base_url(); ?>images/lab/jq_event_object.jpg" width="552" height="218" alt="jq event object"/>
                  <br/>

                  <p><strong>Get mouse absolute X,Y position by double click here:</strong><span id="display_xy"></span></p>
                  <pre><code> //@get mouse x y position when mouseclick
//#event:$(document).dblclick; select p id=display_xy; display e.pageX, Y
$(document).dblclick(function(event){
  $('#display_xy').html('x=' + event.pageX + '; y='+ event.pageY);
});</code></pre>
                  <strong>Get mouse relative X,Y position to a div by mouse over the div below </strong>
                  <div id="mouse_relative_position" style="margin:10px;padding:10px;width:200px;height:200px;border:1px solid #ccc;">
                    relative to this div(width:200px; height:200px; border:1px;margin:10px;padding:10px) - you can see that this.offsetWidth only calculate padding+border+width (not include margin)
                    <br/><span id="relative_calculation" class="highlight_normal"></span>
                  </div>

                </li>
                <li><strong>Cancel default Browser Behavior with return false; or event.preventDefault()</strong><br/>
                  e.g. click a link with 'href' attribute will lead browser load page by default
                  <br/> <a id="a_prevent_link" href="http://google.com">prevent link go to Google</a>
                  <pre><code>//@prevent link behavior
//#event:click; select a id=a_prevent_link, preventDeafut()
$('a#a_prevent_link').click(function(event){
event.preventDefault();});
//or just use  return false;  $('a').click(function(){return false;});
</code></pre>
                </li>

                <li><strong>$().toggle(fn, fn2);</strong>                      
                </li>
              </ul>
            </td>
          </tr>

          <tr>
            <td>Effects</td>
            <td>
              <ul>
                <li><strong>.show(), .hide(), .toggle()</strong> // short version toggle()-perform show() on hidden element, and hide() on non-hidden elements.
                  <br /><strong>.show(speed,callback) ; .hide(speed,callback); .toggle(speed,callback)</strong> // callback-is an optional function invoked when animation is completed
                  <br />show() and hide() elements by set style display:block/inline or display:none

                  <div class="module" style="margin-bottom:10px;">
                    <div class="module_header" style="width:300px;background-color:blue; color: #fff;font-weight: bold;">
                      <span>Cinema 12 today's movies</span> 
                      <img src="<? echo base_url() ?>images/lab/small.jpg"  alt="small" style="margin-left:100px;cursor:pointer;"/>
                    </div>

                    <div class="module_content" style="border:1px solid blue;border-top-width: 0;width:298px;height:150px; overflow:auto;">
                      <p>
                        This evaluation is conducted by Hua Yu and Yi Cao. The goal is to make an assessment of a standard laptop and its interface from ergonomics aspects. The laptop to be assessed is HP Pavilion dm4-1063c
                      </p>
                    </div>
                  </div>

                  <pre><code>$("div.module_header img").click(function()
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
});</code></pre>
                </li>
              </ul> 

            </td>
          </tr>

          <tr>
            <td>Ajax & JSON</td>
            <td>load</td>
          </tr>

          <tr>
            <td>Special recipes</td>
            <td>
              <ul>
                <li><strong>Disable right-click contextual menu (Opera doesn't support this)</strong> <input type="button" name="btn_disable_contextmenu" id="btn_disable_contextmenu" value="disable_contextmenu"/></li>
                <pre><code>//@btn click to toggle Disable right-click contextual menu
      //#event: toggle contextmenu ; select document; prevent default
$("input[name='btn_disable_contextmenu']").toggle(function(){
  //first click event
  $(document).bind('contextmenu', function(){return false;});
  $("input[name='btn_disable_contextmenu']").val("enable_contextmenu");
}, function(){
  $(document).unbind('contextmenu');
  $("input[name='btn_disable_contextmenu']").val("disable_contextmenu");});</code></pre>
              </ul>
            </td>
          </tr>

          <tr id="disable-contextmenu">
            <td>jQuery programming Best Practice</td>
            <td>
              <ul>
                <li><strong>Logic clear:</strong>(event) select sth.; determine its condition; do sth.<br/>
                  comment your logic and algorithm before writing code.
                  <pre><code>//@select all checkbox
//#event:click;select all checkbox with name=ckb;determine checked or not; set checkbox.val([value1,..])</code></pre>
                </li>
                <li><strong>Naming:</strong> use "#p_content" style for CSS naming; use "relative_x" style for javascript naming
                  <br />jQuery wrapper naming - content$ 
                  <br /> Form naming:form-frm_; input[radio] - rdo_; input[text] - txt_; input[checkbox] -ckb_;
                </li>
              </ul>
            </td>
          </tr>
          <tr>
            <td>jQuery 1.4 cheatsheet</td>
            <td>
              <!--
              <embed src="http://embedit.in/WcGcJWjIAe.swf" height="400" width="466" type="application/x-shockwave-flash" allowFullScreen="true">
              -->
            </td>
          </tr>

          <tr>
            <td>More resources</td>
            <td>
              <p>
                <a href="http://visualjquery.com/">Visual Jquery library</a>
              </p>
            </td>
          </tr>
          
          <tr>
            <td>Javascript basic</td>            
            <td>
              <ul>
                <li>
                  String convert to float and to fixed number 
                  <pre><code>price = parseFloat($(this).text())
tax = (flt_price /10).toFixed(2); 
</code></pre>
                 
                </li>
              </ul>
            </td>
          </tr>
          
        </table>
      </div>
      <div class="clear"></div>

      <!--spacer -->
      <div class="grid_12 spacer"></div>
      <div class="clear"></div>

      <!--footer -->
      <div class="grid_12">
        <!--Back to Home button -->
        <?php echo $this->load->view('lab/v_backhomebtn'); ?>
        <!-- end Back to Home button-->
      </div>

      <div class="clear"></div>
    </div>

  </body>
</html>

<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-18369335-1']);
  _gaq.push(['_setDomainName', '.yicaohci.com']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>