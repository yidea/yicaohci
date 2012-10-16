<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title><?= $html_title; ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="<?= base_url() ?>images/favicon.ico" type="image/x-icon" />

    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/playground/common.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/960/reset.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/960/text.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/960/960.css" />  
    <!-- Scripts -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
    <script typpe="text/javascript">
      $(document).ready(function(){
      
      });

      function isEncHTML(str) {
        if(str.search(/&amp;/g) != -1 || str.search(/&lt;/g) != -1 || str.search(/&gt;/g) != -1)
          return true;
        else
          return false;
      };

      function decHTMLifEnc(str){
        if(isEncHTML(str))
          return str.replace(/&amp;/g, '&').replace(/&lt;/g, '<').replace(/&gt;/g, '>');
        return str;
      }
    </script>

    <style type="text/css">
      div.content_main table caption{text-align: left; font-weight: bold;font-size: 18px;}
      div.content_main table{width: 100%; border-collapse: collapse;}
      div.content_main table td{padding:0 10px 0 10px; border:1px solid #000;}
      form#form2 input,textarea{border:1px solid; border-color: #666 #ccc #ccc #666;}
    </style>
  </head>

  <body class="bg_white">
    <div class="container_12  bg_greylight">

      <!--header -->
      <div id="header" class="grid_12" >
        <h1>Logo-Header: grid_12</h1>
      </div>
      <div class="clear"></div>

      <!--navbar-->
      <div id="navbar" class="grid_12 m_bottom_10px bg_green">
        <ul>
          <li><a href="#htmlcode">Standard HTML code</a></li>
          <li>Topics</li>
          <li>About</li>
          <li>Contact</li>
        </ul>
      </div>
      <div class="clear"></div>

      <!--banner -->
      <div id="banner_left" class="grid_12 bg_grey m_bottom_10px " >
        <div id="banner_left_inner" class="bg_white ">
          <h2>Web Standard HTML basic rules</h2>
          <ul>
            <li><strong>Web Standard core</strong> - separation of Content and Presentation :1 HTML as structure of content; 2 CSS as presentation </li>
            <li>All tags must close with /&gt; or &lt;/tag&gt;, all attributes must be in quotation"" marks, tags and attribute must be lowercase &lt;html&gt;</li>
            <li><strong>HTML elements</strong> are 1 of 2 types: 1 block(div,h1,p,table,form,fieldset,ul lists) ; 2 inline(a,span,img,elements in form,strong,em)</li>
            <li><strong>Tables</strong> are not for layout but for displaying data</li>
            <li>Box Model</li>
          </ul>

          <h2>Web Standard CSS basic rules</h2>
          <ul>
            <li>
              <strong>CSS Specificity Calculation:</strong> a(#id),b(#class),c(#htmlTag); Example: #contentNav table(1,0,1) div p.tree(0,1,2)
            </li>
            <li>
              <strong>Inheritance:</strong> descendants inherit style(font,color) from ancestors, but margin,padding,border,width will not be inherited
            </li>
            <li>
              <strong>Absolute,Relative units:</strong> Relative(em,%),Absolute(px,pt)
            </li>
            <li>
              <strong>Three Style Sheets:</strong> Browser< Website < User defined (by priority)
            </li>
            <li>
              <strong>Import Multiple Style Sheets:</strong> @import url(“/css/core.css”);
            </li>
          </ul>
        </div>
      </div>

      <div class="clear"></div>

      <!--spacer -->
      <div class="grid_12 spacer"></div>
      <div class="clear"></div>

      <!--content main -->
      <div class="grid_12 content_main" >
        <a name="htmlcode"></a>

        <!--htmlcode table -->
        <table id="htmlcode">
          <caption>HTML</caption>
          <tbody>
            <tr>
              <td>HTML Document</td>
              <td>
                &lt;!DOCTYPE html PUBLIC “-//W3C//DTD XHTML 1.0 Strict//EN” “http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd”&gt;<br />
                &lt;html xmlns=”http://www.w3.org/1999/xhtml” xml:lang=”en”&gt;
              </td>
            </tr>

            <tr>
              <td>Head</td>
              <td>
                &lt;head&gt;<br />
                &lt;title&gt;Page title&lt;/title&gt;<br />
                &lt;meta http-equiv="Content-Type" content="text/html; charset=utf-8" /&gt;<br/>
                &lt;meta name=”keywords” content=”fruit, banana, orange, apple,
                kumquat, cucumber” /&gt;<br />
                &lt;meta name=”description” content=”News, reviews and opinion on all
                things fruity.” /&gt;<br />
                &lt;meta name=”author” content=”Yi Cao” /&gt;<br />
                &lt;link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" /&gt;<br />
                &lt;link rel=”stylesheet” type=”text/css” media="all" href=”styles.css” /&gt;<br />
                &lt;script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"&gt;&lt;/script&gt;<br />
                &lt;/head&gt;
              </td>
            </tr>

            <tr>
              <td>Paragraphs & Line Break</td>
              <td>
                &lt;p&gt;Greetings one and all.&lt;br /&gt;Welcome to the world of line <br />
                breaks.&lt;/p&gt;
              </td>
            </tr>
            <tr>
              <td>Display Word doc content/HTML source code in a web page</td>
              <td>
                Certain characters need conversion <a href="http://www.felgall.com/htmlt47.htm">Html code conversion helper</a>
                <form id="form" name="form" action="#">
                  <textarea id="htmlSource" name="htmlSource" rows="5" cols="40">input original words here..</textarea>
                  <br/>
                  <input type="button" id="btn_convert" name="btn_convert" value="Convert" onclick="s=form.htmlSource.value; s=s.replace(/&amp;/g,'&amp;amp;');s=s.replace(/&lt;/g,'&amp;lt;');s=s.replace(/&gt;/g,'&amp;gt;');s=s.replace(/\n/g,'&lt;br /&gt;\n');s=s.replace(/\r/g,'');form.htmloutput.value = s; return false;" />
                  <br/>
                  <textarea id="htmloutput" name="htmloutput" rows="5" cols="40">words after conversion..</textarea>
                </form>
              </td>
            </tr>

            <tr>
              <td>Jump inside a page</td>
              <td>
                &lt;a href="#C4"&gt;See also Chapter 4.&lt;/a&gt;<br />
                &lt;a name="C4"&gt;spot&lt;/a&gt;
              </td>
            </tr>

            <tr>
              <td>Form & 3 types of Form elements(input,textarea,select)</td>
              <td>
                <form id="form2" name="form2" action=”#” method=”post”>
                  <strong>Form:</strong> &lt;form id="form2" name="form2" action=”#” method=”post”&gt;<br/>
                  <strong>Fieldset-legend-label structure:</strong><br/>
                  <fieldset>
                    <legend>User Profile</legend>
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username"/>
                  </fieldset>
                  &lt;fieldset&gt;<br />
                  &lt;legend&gt;User Profile&lt;/legend&gt;<br />
                  &lt;label for="username"&gt;Username:&lt;/label&gt;<br />
                  &lt;input type="text" id="username" name="username"/&gt;<br />
                  &lt;/fieldset&gt;
                  <br/>

                  <strong>Input:</strong>
                  <ul>
                    <li>
                      <input type="text" id="txtinput1" name="txtinput1" maxlength="8" value="12"/>
                      <label for="txtinput1">&lt;input type="text" id="txtinput1" name="txtinput1" maxlength="8" value="12"/&gt;</label>
                    </li>
                    <li>
                      <input type="password" id="pwinput1" name="pwinput1" maxlength="12" value="123"/>
                      <label for="pwinput1">&lt;input type="password" id="pwinput1" name="pwinput1" maxlength="12" value="123"/&gt;</label>
                    </li>
                    <li>
                      <input type="checkbox" id="ckb1" name="ckb1" checked="checked"/>
                      <label for="ckb1">&lt;input type="checkbox" id="ckb1" name="ckb1" checked="checked"/&gt;</label>
                    </li>
                    <li>
                      <input type="radio" name="ipt_radio1" value="red"/>red
                      <br/>
                      <input type="radio" name="ipt_radio1" value="yellow"/>yellow
                      <br/>
                      <input type="radio" id="ipt_radio1" name="ipt_radio1" value="blue" checked="checked"/>blue - &lt;input type="radio" id="ipt_radio1" name="ipt_radio1" value="blue" checked="checked"/&gt;
                    </li>
                    <li>
                      <input type="submit" id="ipt_btn1" name="ipt_btn1" value="Search"/> &lt;input type="submit" id="ipt_btn1" name="ipt_btn1" value="Search"/&gt;
                    </li>
                    <li>
                      <input type="reset" id="ipt_reset" name="ipt_reset" value="Reset"/> &lt;input type="reset" id="ipt_reset" name="ipt_reset" value="Reset"/&gt;
                    </li>
                    <li>
                      <input type="hidden" name='customerid' value='sk49fjp923j9fj9393'/> &lt;input type=”hidden” name=”customerid” value=”sk49fjp923j9fj9393” /&gt;
                    </li>
                    <li>
                      <input type="image" id="ipt_img" name='ipt_img' height="30px" weight="100px" src="<?= base_url(); ?>images/twitter.png" alt="image_text"/> &lt;input type="image" id="ipt_img" name='ipt_img' height="30px" weight="100px" src="images/twitter.png" alt="image_text"/&gt;
                    </li>
                    <li>
                      <input type="file" id="uploadfile" name="uploadfile" />
                      &lt;input type="file" id="uploadfile" name="uploadfile" /&gt;<br />
                      remember when use a type="file" input elements,you need add enctype="multipart/form-data" to &lt;form&gt; tag
                    </li>
                    <li>
                      <input type="button" id="ipt_btn" name="ipt_btn" value="Login"/> &lt;input type="button" id="ipt_btn" name="ipt_btn" value="Login"/&gt;
                    </li>
                  </ul>

                  <strong>Textarea:</strong> &lt;textarea id="ta1" name="ta1" rows="5" cols="50"&gt;content... &lt;/textarea&gt;<br/>
                  <textarea id="ta1" name="ta1" rows="5" cols="50">content... </textarea> <br/>

                  <strong>Select:</strong><br/>
                  <select id="slt_book" name=”slt_book”>
                    <option selected="selected">select one from below</option>
                    <optgroup label=”Camus”>
                      <option>The Outsider</option>
                      <option>The Rebel</option>
                      <option>The Plague</option>
                    </optgroup>
                    <optgroup label=”Orwell”>
                      <option>Animal Farm</option>
                      <option>Nineteen Eighty-Four</option>
                      <option>Down and Out in Paris and London</option>
                    </optgroup>
                  </select>
                  <br/>
                  &lt;select id="slt_book" name=”slt_book”&gt;<br />
                  &lt;option selected="selected"&gt;select one from below&lt;/option&gt;<br />
                  &lt;optgroup label=”Camus”&gt;<br />
                  &lt;option&gt;The Outsider&lt;/option&gt;<br />
                  &lt;option&gt;The Rebel&lt;/option&gt;<br />
                  &lt;option&gt;The Plague&lt;/option&gt;<br />
                  &lt;/optgroup&gt;<br />
                  &lt;optgroup label=”Orwell”&gt;<br />
                  &lt;option&gt;Animal Farm&lt;/option&gt;<br />
                  &lt;option&gt;Nineteen Eighty-Four&lt;/option&gt;<br />
                  &lt;option&gt;Down and Out in Paris and London&lt;/option&gt;<br />
                  &lt;/optgroup&gt;<br />
                  &lt;/select&gt;

                </form>
              </td>
            </tr>

            <tr>
              <td>Table</td>
              <td>
                &lt;table summary=”A brief overview of animals belonging to certain taxonomic groups”&gt;<br />
                &lt;caption&gt;Animal groups&lt;/caption&gt;<br />
                &lt;tbody&gt;<br />
                &lt;tr&gt;<br />
                &lt;th colspan=”2” id=”carnivores”&gt;Carnivores&lt;/th&gt;<br />
                &lt;th id=”primates”&gt;Primates&lt;/th&gt;<br />
                &lt;/tr&gt;<br />
                &lt;tr&gt;<br />
                &lt;th id=”cats” headers=”carnivores”&gt;Cats&lt;/th&gt;<br />
                &lt;th id=”dogs” headers=”carnivores”&gt;Dogs&lt;/th&gt;<br />
                &lt;th id=”lemurs” headers=”primates”&gt;Lemurs&lt;/th&gt;<br />
                &lt;/tr&gt;<br />
                &lt;tr&gt;<br />
                &lt;td headers=”carnivores cats”&gt;Tiger&lt;/td&gt;<br />
                &lt;td headers=”carnivores dogs”&gt;Grey Wolf&lt;/td&gt;<br />
                &lt;td headers=”primates lemurs”&gt;Indri&lt;/td&gt;<br />
                &lt;/tr&gt;<br />
                &lt;/tbody&gt;<br />
                &lt;/table&gt;
              </td>
            </tr>
          </tbody>
        </table>
        <!--end htmlcode table -->

        <!--css Style table -->
        <table id="cssStyle">
          <caption>CSSstyle</caption>
          <tbody>
            <tr>
              <td>Styling Form</td>
              <td>

              </td>
            </tr>
            <tr>
              <td>Styling Table</td>
              <td>
                div.content_main table{width: 100%; border-collapse: collapse;}<br />
                div.content_main table caption{text-align: left; font-weight: bold;font-size: 18px;}<br />
                div.content_main table td{padding:0 10px 0 10px; border:1px solid #000;}
              </td>
            </tr>
          </tbody>
        </table>
        <!--end css Style table -->
      </div>      

      <!--spacer -->
      <div class="grid_12 spacer"></div>
      <div class="clear"></div>

      <!--footer -->
      <div class="grid_12">
        <p>footer: grid_4</p>
      </div>

      <div class="clear"></div>
    </div>

    <!--Back to Home page -->
    <div class="backHome">
      <a href="<?php echo base_url(); ?>playground" class="green button float">&lt;&lt; Back to Playground Page</a>
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