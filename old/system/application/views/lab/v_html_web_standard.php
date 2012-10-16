<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
  <head>
    <title><?= $html_title; ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="yi cao, hci, " />
    <meta name="description" content="Yi Cao on HCI, talking about web, mobile interaction design, usability testing and prototyping "/>
    <meta name="author" content="Yi Cao" />
    <link rel="shortcut icon" href="<?= base_url() ?>images/favicon.ico" type="image/x-icon" />    
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/960/reset.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/960/960.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/960/text.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/common.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/lab/html_web_standard_page.css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>     
  </head>

  <body class="e">
    <div id="skip_links">
      <a href="content">Skip to main content</a>
      <a href="search">Skip to search</a>
    </div>


    <div class="container_12 ">

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
          <h2>HTML history</h2>
          <ul>
            <li>
              HTML 4.01 - 1999 
            </li>
            <li>XHTML 1.0 - 2000 (follows XML coding convention: all xhtml attribute must contain "", all elements must be closed)</li>
            <li>XHTML 1.1 never really took off(attemp to take XHTML even closer to XML,restrict , even single error will not supported by web browser)</li>
            <li>HTML5 (introduced new structural elements like header,nav,article,section,footer)
              <br />Read more : <a href="http://jontangerine.com/log/2008/03/preparing-for-html5-with-semantic-class-names">Preparing for HTML 5 with Semantic Class Names </a>
            </li>
          </ul>
          
          <h2>DOCTYPE switching</h2>
          <ul>
            <li>A document type definition (DTD) declaration is to tell browser what rules (html/xml version)to follow to parsing web page
              <br/><strong>Suggest use strict version</strong> (not transitional)
              <pre><code>&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"&gt; </code></pre>
               </li>
          </ul>
          
          <h2>Validation </h2>    
          <ul>
            use W3C validator(FF web developer extension) to check valid html coding in page and track error(html,css) - for existing browser correct interpret
            <br /><strong> although validation is important, in the real world,
a degree of common sense is required.</strong> 
          </ul>

          <h2>Browser modes</h2>
          <ul>
            <li>To ensure browser backward compatibility, browser has 2 rendering modes:1 standards
mode and 2 quirks mode
<br />In standards mode, the  browser renders a page according to the
specifications, and in quirks mode pages are displayed in a looser, more backward-compatible fashion.(Quirks mode typically emulates the behavior of older browsers such as Microsoft Internet
Explorer 4 and Netscape Navigator 4 to prevent older sites from breaking.)
<strong>e.g.,</strong> IE6's false box model calculation in quick mode to compatible with IE5
<br /> <strong>You can easily tell which browser mode the current page is rendering in</strong> by seeing FF web developer Toolbar's right green tick(red tick means in quick mode- check your Doctype)
            </li>
          </ul>
          <table>
            <tr>
              <td>Standard mode</td>
              <td>
                <ul>
                  <li>HTML 4.01 document,Xhtml 1.0 document, a DOCTYPE containing a strict DTD</li>
                  <li>A DOCTYPE containing a transitional DTD and URI</li>
                </ul>
                <pre><code>@HTML 4
&lt;!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"    "http://www.w3.org/TR/html4/strict.dtd"&gt;
@XHTML 1.0 strict
&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"&gt;
@HTML5
&lt;!DOCTYPE html&gt; </code></pre>
              </td>
            </tr>
            <tr>
              <td>Quick mode</td>
              <td>
                <ul>
                  <li>A nonexistent DOCTYPE or badly formed DOCTYPE (use wrong "") </li>
                  <li>a transitional DTD without a URI  </li>
                </ul>
              </td>
            </tr>
          </table>
          
          <h2>Web Standard HTML basic rules</h2>
          <ul>
            <li><strong>Web Standard core</strong> - separation of Content and Presentation :1 HTML as structure of content; 2 CSS as presentation </li>
            <li>All tags must close with /&gt; or &lt;/tag&gt;, all attributes must be in quotation"" marks, tags and attribute must be lowercase &lt;html&gt;</li>
            <li><strong>Display of elements:</strong> are 1 of 2 types: Block and Inline. You can define a box using css "display:block/inline"
              <br/><strong>1 Block:</strong>div,h1~h6,p,table,form,fieldset,ul,ol,dl,li,pre,blockquote
              <br/>Block elements can apply more complex style: vertical margin,padding and border.
              <br/><strong>2 Inline:</strong>a,span,img,elements in form,strong,em</li>
            <li><strong>Box Model:</strong>
              MBPC(margin, border, padding, width/height of content), IE5's box model(width=content+padding+border) <br/>
              <img width="432" height="197" alt="box model" src="<?php echo base_url(); ?>images/lab/box_model.jpg" />
              <br/>
              1 Vertical Margin Collapsing(only larger margin remain)- better only apply {margin-bottom:10px} to elements need vertical margin
              <br/>
              2 Block boxes will behave as you might expect with padding, border, and margin applied;
              <br/>Inline boxes, however, will ignore vertical margins and the padding and border will spill over the line
              <p id="inline">
                this <span>inline</span> item has <span>padding:5px</span>
              </p>
            </li>
            <li>
              <strong>Content Width,Height & Overflow:</strong> when you set the width and height of a box, if the content in the box exceed the dimension of the box, you can set the overflow -decide how to deal with the exceeding part(hidden,scroll,auto)
              <br/>
              height:60px; overflow: auto;border:1px solid red;width:500px;
              <p id="height_overflow">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sit amet elit felis. Sed at diam quis ante pretium lacinia. Phasellus et quam in nulla consequat venenatis ac eget metus. Phasellus et quam in nulla consequat venenatis ac eget metus. Phasellus et quam in nulla consequat venenatis ac eget metus.
              </p>
              <p>
                <strong>hide element but accessible by screen reader:</strong> display:none & visibility:hidden both hide elements and not accessible from screen reader
                <br/>
                <a class="access_aid" href="#htmlcode" >skip Navigation</a>
                (a skip navigation is hidden here) .access_aid{position: absolute; height: 0;overflow: hidden;}
              </p>
            </li>

            <li>
              <strong>Positioning elements & Z-index(1):</strong> position: static,relative, absolute, fixed(not supported in IE6)
              <br/>
              <p style="position:relative;">
                It is a long established fact that  <span style="position:relative;left:2em; top:1em; background-color: yellow;">relative :{position:relative;left:1em; top:1em;}</span>a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum'.
                <span style="position:absolute;left:1em;top:2.5em;background-color:yellowgreen;">absolute (in relative box):{position:absolute;left:1em;top:2.5em}</span>               
              </p>
            </li>

            <li>
              <strong>Floating & Clear:</strong> float :left,right;  clear:left,right,both;
              <p>
                <img style="float:left;margin-right: 10px;" alt="float_left" width="50" height="50" src="<?php echo base_url(); ?>images/facebook.png"/><span class="bg_yellow">img:{float:left;margin-right: 10px;}</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sit amet elit felis. Sed at diam quis ante pretium lacinia. Phasellus et quam in nulla consequat venenatis ac eget metus. Phasellus et quam in nulla consequat venenatis ac eget metus. Phasellus et quam in nulla consequat venenatis ac eget metus.
                <br/><span class="bg_yellow" style="clear:both">footer:{clear:both}</span>
              </p>
            </li>

            <li>
              <strong>Layout: Fixed ,Liquid or Elastic</strong>
              <p>
                Fixed Layout: Good(easy to design); Bad(unable to accommodate to screen size)
                <br/>
                Liquid Layout: Good(accommodate to screen size); Bad(might be uncomfortable to read, hard to design)
                <br/>
                Elastic Layout: Good(increase proportion as well as text size,comfortable to read); Bad(need set largest text-size;hard to design)
              </p>

            </li>


            <li><strong>Tables</strong> are not for layout but for displaying data</li>
          </ul>

          <h2>Web Standard CSS basic rules</h2>
          <ul>
            <li><strong>CSS id,class Naming:</strong> use "ul-list" </li>
            <li>
              <strong>CSS Specificity Calculation:</strong> a(#id),b(#class),c(#htmlTag); Example: #contentNav table(1,0,1) div p.tree(0,1,2)
              <pre><code>*              {}  /* a=0 b=0 c=0 -&gt; specificity =   0 */
li             {}  /* a=0 b=0 c=1 -&gt; specificity =   1 */
ul li          {}  /* a=0 b=0 c=2 -&gt; specificity =   2 */
ul li a        {}  /* a=0 b=0 c=3 -&gt; specificity =   3 */
a:hover        {}  /* a=0 b=1 c=1 -&gt; specificity =  11 */
ul li a.red    {}  /* a=0 b=1 c=3 -&gt; specificity =  13 */
li a.red:hover {}  /* a=0 b=2 c=2 -&gt; specificity =  22 */
#candy         {}  /* a=1 b=0 c=0 -&gt; specificity = 100 */
</code></pre>
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
              <strong>Import Multiple Style Sheets:</strong> @import url(“/css/core.css");
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
        <table id="htmlcode" class="mb-10px">
          <caption>HTML</caption>
          <tbody>
            <tr>
              <td>HTML Document</td>
              <td>
                <pre><code>&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"&gt;
&lt;html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"&gt;
</code></pre>
              </td>
            </tr>

            <tr>
              <td>HTML Head</td>
              <td>
                <pre><code>&lt;head&gt;
&lt;title&gt;Page title &lt;/title&gt;   
&lt;meta http-equiv="Content-Type" content="text/html; charset=utf-8" /&gt;
&lt;meta name="keywords" content="yi cao, hci, " /&gt;
&lt;meta name="description" content="Yi Cao on HCI, talking about web, mobile interaction design, usability testing and prototyping "/&gt;
&lt;meta name="author" content="Yi Cao" /&gt;
&lt;link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" /&gt;   
&lt;link rel="stylesheet" href="css/960/reset.css" /&gt;
&lt;script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"&gt;&lt;/script&gt;
&lt;/head&gt;</code></pre>
              </td>
            </tr>

            <tr>
              <td>h1-h6</td>
              <td>use heading in order(start with h1 for page heading, then h2 for subheading, and so on)
                <h1>Chapter 1 &lt;h1&gt;</h1>
                <h2>1.1 Content &lt;h2&gt;</h2>
              </td>
            </tr>

            <tr>
              <td>Text paragraphs & Line Break & strong,em
                <br/>Lipsum Generator</td>
              <td>
                &lt;p&gt;Greetings one and all.&lt;br /&gt;Welcome to the world of line breaks.&lt;/p&gt;
                <br/>
                &lt;strong&gt; represents importance,use it for sentence that are"Warnings,Reminders,Important content"<br />
                &lt;em&gt; is "emphatic stress", use it for single word you want to stress out
                <br/>
                <a href="http://www.lipsum.com/">Lipsum Generator</a>
              </td>
            </tr>

            <tr>
              <td>
                Other text elements: Quotation(blockquote,q,cite) & Abbreviation(acronym,abbr)
              </td>
              <td>
                <blockquote style="font-style: italic;">
                  "&lt;blockquote&gt; blockquote is designed to be for large, stand-alone quotations,
                  whereas q (quote) is used for smaller inline quotes."
                </blockquote>

                Scientists at <acronym title="National Aeronautics and Space Administration">NASA</acronym> were attempting to teach Jiminy
                the locust <abbr title="HyperText Markup Language">HTML</abbr>.

                <pre><code>&lt;acronym title="National Aeronautics and Space Administration"&gt;NASA&lt;/acronym&gt;
&lt;abbr title="HyperText Markup Language"&gt;HTML&lt;/abbr&gt;
</code></pre>

              </td>
            </tr>

            <tr>
              <td>Display Word doc content/HTML source code in a web page</td>
              <td>
                Certain characters need conversion
                <form id="form" name="form" action="#">
                  <textarea id="htmlSource" name="htmlSource" rows="5" cols="84">input original words here..</textarea>
                  <br/>
                  <input type="button" id="btn_convert" name="btn_convert" value="Convert" onclick="s=form.htmlSource.value; s=s.replace(/&amp;/g,'&amp;amp;');s=s.replace(/&lt;/g,'&amp;lt;');s=s.replace(/&gt;/g,'&amp;gt;');s=s.replace(/\n/g,'&lt;br /&gt;\n');s=s.replace(/\r/g,'');form.htmloutput.value = s; return false;" />
                  <input type="button" id="btn_convert" name="btn_convert" value="Convert without <br/>" onclick="s=form.htmlSource.value; s=s.replace(/&amp;/g,'&amp;amp;');s=s.replace(/&lt;/g,'&amp;lt;');s=s.replace(/&gt;/g,'&amp;gt;');s=s.replace(/\r/g,'');form.htmloutput.value = s; return false;" />
                  <br/>
                  <textarea id="htmloutput" name="htmloutput" rows="5" cols="84">words after conversion..</textarea>
                </form>
              </td>
            </tr>

            <tr>
              <td>Page Anchor - Jump inside a page</td>
              <td>
                &lt;a href="#C4"&gt;See also Chapter 4.&lt;/a&gt;<br />
                &lt;a name="C4"&gt;spot&lt;/a&gt;
              </td>
            </tr>

            <tr>
              <td>a link</td>
              <td>
                <ul id="testinglink">
                  <li>
                    <a href="#" title="launch page" >testing link lvha</a>
                  </li>
                  <li><a href="#" title="launch page" >new article</a></li>
                </ul>
                &lt;a href="#" title="launch page" &gt;testing link lvha&lt;/a&gt; - title attribute is more info about the link
                <br/> <a href="#alinkstyle">link css and 5 link state is here</a>
              </td>
            </tr>

            <tr>
              <td>Image & Background Image</td>
              <td>
                <p>JPEG for detailed image such as photographs, GIF for image with solid blocks of color(less gradiant),PNG for alpha transparency use
                  <br/>alt="flickr logo" serves accessibility task - provide alternative text for image
                  <br/>longdesc="a.htm" explain more information for image, like data table , chart
                  <br/>use img tag's width and height attributes, reserve space for image from browser</p>
                <img width="50" height="50" src="<?= base_url(); ?>images/flickr.png" alt="flickr logo link" />
                <pre><code>&lt;img src="images/flickr.png" alt="flickr logo link" width="50" height="50"/&gt;
</code></pre>
                <p>Background Image
                </p>
                <p id="background_image">background image with padding-left</p>
                <pre><code>#background_image{padding-left:50px;
height:40px;
border: 1px solid red;
background-image:url(../../images/flickr.png);
background-position:left top;
background-repeat: no-repeat;
background-color: #fff;/*area that are not taken up by background image will be transparent,unless you set the background-color*/}

.shorthand{ background: #0084c7 url(images/sifakabg.gif) top left fixed
no-repeat; }
</code></pre>
              </td>
            </tr>

            <tr>
              <td>list - 3 types:unordered, ordered, definition list</td>
              <td>
                <p>
                <ul id="ul_list"><li>ul li1</li><li>ul li2</li></ul>
                <ol id="ol_list"><li>ol li1</li><li>ol li2</li></ol>
                <dl><dt>dt1</dt><dd>this is the explaination for dt1</dd></dl>

                <ul id="ul-horizon">
                  <li>link1</li>
                  <li>link2</li>
                  <li>link3</li>
                </ul>
                <div class="clear"></div>

                <pre><code>&lt;ul id="ul_list"&gt;&lt;li&gt;ul li1&lt;/li&gt;&lt;li&gt;ul li2&lt;/li&gt;&lt;/ul&gt;
&lt;ol id="ol_list"&gt;&lt;li&gt;ol li1&lt;/li&gt;&lt;li&gt;ol li2&lt;/li&gt;&lt;/ol&gt;
&lt;dl&gt;&lt;dt&gt;dt1&lt;/dt&gt;&lt;dd&gt;this is the explaination for dt1&lt;/dd&gt;&lt;/dl&gt;
</code></pre>
                <a href="#style_list">Style list</a>
                </p>
              </td>
            </tr>

            <tr>
              <td>Form & 3 types of Form elements(input,textarea,select)</td>
              <td>
                <form id="form2" name="form2" action="submitform.php" method="post">                  
                  <p><strong>Form structure:</strong> Fieldset-Legend-Label-Ol (FLLO) or Fieldset-H3-Label-Ol(FHLO)
                    <br/>Personally,<strong> I like use FHLO,</strong> because H3 tag is much easier to style with CSS than Legend tag(inconsistency in different browser, position limitation)
                  </p>
                  <fieldset>
                    <legend>Legend heading for form</legend>
                    <ol>
                      <li>
                        <label for="username">Username:</label><input type="text" class="required" id="username" name="username"/><span>(*required)</span>
                      </li>
                    </ol>
                  </fieldset>
                  <fieldset>
                    <h3>H3 heading for form</h3>
                    <ol>
                      <li>
                        <label for="ckbtest"><input type="checkbox" id="ckbtest" name="ckbtest" value="handtosted" />Checkbox example</label>
                      </li>
                    </ol>
                  </fieldset>
                  <pre><code>&lt;form id="form2" name="form2" action="submitform.php" method="post"&gt;
&lt;fieldset&gt;
  &lt;h3&gt;H3 heading for form&lt;/h3&gt;
  &lt;ol&gt;
    &lt;li&gt;
      &lt;label for="username"&gt;Username:&lt;/label&gt;&lt;input type="text" class="required" id="username" name="username"/&gt;&lt;span&gt;(*required)&lt;/span&gt;
    &lt;/li&gt;
  &lt;/ol&gt;
&lt;/fieldset&gt;
&lt;/form&gt;</code></pre>

                  <strong>Input:</strong>
                  <ul>
                    <li>
                      <label for="txtinput1">Textbox: Username</label>
                      <input class="required" type="text" id="txtinput1" name="txtinput1" maxlength="8" value="user1"/> <span>(*required)</span>
                      <pre><code>&lt;label for="txtinput1"&gt;Textbox: Username&lt;/label&gt;
&lt;input class="required" type="text" id="txtinput1" name="txtinput1" maxlength="8" value="user1"/&gt; &lt;span&gt;(*required)&lt;/span&gt;
</code></pre>
                    </li>
                    <li>
                      <label for="pwinput1">Textbox: Password</label>
                      <input type="password" id="pwinput1" name="pwinput1" maxlength="12" value="123"/>
                      <pre><code>&lt;label for="pwinput1"&gt;Textbox: Password&lt;/label&gt;
&lt;input type="password" id="pwinput1" name="pwinput1" maxlength="12" value="123"/&gt;
</code></pre>
                    </li>
                    <li>
                      <label for="ckb1">Checkbox: Hand Tosted</label><input type="checkbox" id="ckb1" name="ckb1" value="handtosted" />
                      <pre><code>&lt;label for="ckb1"&gt;Checkbox: Hand Tosted&lt;/label&gt;&lt;input type="checkbox" id="ckb1" name="ckb1" value="handtosted" /&gt;
</code></pre>


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
                      <input type="hidden" name='customerid' value='sk49fjp923j9fj9393'/> &lt;input type="hidden" name="customerid" value="sk49fjp923j9fj9393" /&gt;
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

                    <li>
                      <strong>Textarea:</strong> &lt;textarea id="ta1" name="ta1" rows="5" cols="50"&gt;content... &lt;/textarea&gt;<br/>
                      <textarea id="ta1" name="ta1" rows="5" cols="50">content... </textarea> <br/>
                    </li>
                    <li>
                      <strong>Select:</strong><br/>
                      <select id="slt_book" name="slt_book">
                        <option selected="selected">select one from below</option>
                        <optgroup label="Camus">
                          <option>The Outsider</option>
                          <option>The Rebel</option>
                          <option>The Plague</option>
                        </optgroup>
                        <optgroup label="Orwell">
                          <option>Animal Farm</option>
                          <option>Nineteen Eighty-Four</option>
                          <option>Down and Out in Paris and London</option>
                        </optgroup>
                      </select>
                      <pre><code>&lt;select id="slt_book" name="slt_book"&gt;
&lt;option selected="selected"&gt;select one from below&lt;/option&gt;
&lt;optgroup label="Camus"&gt;
&lt;option&gt;The Outsider&lt;/option&gt;
&lt;option&gt;The Rebel&lt;/option&gt;
&lt;option&gt;The Plague&lt;/option&gt;
&lt;/optgroup&gt;
&lt;optgroup label="Orwell"&gt;
&lt;option&gt;Animal Farm&lt;/option&gt;
&lt;option&gt;Nineteen Eighty-Four&lt;/option&gt;
&lt;option&gt;Down and Out in Paris and London&lt;/option&gt;
&lt;/optgroup&gt;
&lt;/select&gt;</code></pre>
                    </li>
                    <li>
                      <label for="slt_mult" style="width:150px">multi-select option dropdown</label>
                      <select name="slt_mult" id="slt_mult" multiple="multiple" size="3">
                        <option value="opt1">option 1</option>
                        <option value="opt2">option 2</option>
                        <option value="opt3">option 3</option>
                      </select>
                      <pre><code>&lt;label for="slt_mult" style="width:150px"&gt;multi-select option dropdown&lt;/label&gt;
&lt;select name="slt_mult" id="slt_mult" multiple="multiple" size="3"&gt;
  &lt;option value="opt1"&gt;option 1&lt;/option&gt;
  &lt;option value="opt2"&gt;option 2&lt;/option&gt;
  &lt;option value="opt3"&gt;option 3&lt;/option&gt;
&lt;/select&gt;</code></pre>
                    </li>
                  </ul>
                </form>
              </td>
            </tr>

            <tr>
              <td>Table</td>
              <td>
                <pre><code>&lt;table summary="A brief overview of animals belonging to certain taxonomic groups"&gt;
&lt;caption&gt;Animal groups&lt;/caption&gt;
&lt;tbody&gt;
&lt;tr&gt;
&lt;th colspan="2" id="carnivores"&gt;Carnivores&lt;/th&gt;
&lt;th id="primates"&gt;Primates&lt;/th&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;th id="cats" headers="carnivores"&gt;Cats&lt;/th&gt;
&lt;th id="dogs" headers="carnivores"&gt;Dogs&lt;/th&gt;
&lt;th id="lemurs" headers="primates"&gt;Lemurs&lt;/th&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td headers="carnivores cats"&gt;Tiger&lt;/td&gt;
&lt;td headers="carnivores dogs"&gt;Grey Wolf&lt;/td&gt;
&lt;td headers="primates lemurs"&gt;Indri&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;</code></pre>
                <p><a href="#styletable">Styling Table</a></p>
              </td>
            </tr>

            <tr>
              <td>Objects(Flash,video)</td>
              <td>
                <pre><code> &lt;!--[if !IE]&gt; --&gt;
  &lt;object type="application/x-shockwave-flash" data="movie.swf" width="300" height="135"&gt;
  &lt;!-- &lt;![endif]--&gt;

  &lt;!--[if IE]&gt;
  &lt;object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="300" height="135"
      codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"&gt;
      &lt;param name="movie" value="movie.swf" /&gt;
  &lt;!--&gt;&lt;!--dgx--&gt;
      &lt;param name="loop" value="true" /&gt;
      &lt;param name="menu" value="false" /&gt;

      &lt;p&gt;This is &lt;strong&gt;alternative&lt;/strong&gt; content.&lt;/p&gt;
  &lt;/object&gt;
  &lt;!-- &lt;![endif]--&gt; 
</code></pre>
                <p>or include <a href="http://www.adobe.com/devnet/flashplayer/articles/swfobject.html">SWFObject javascript</a> to help</p>
              </td>
            </tr>

            <tr>
              <td>More HTML tags</td>
              <td><p>More Html tag reference on<a href="http://htmldog.com/reference/htmltags/"> HTML Dog</a></p></td>
            </tr>
          </tbody>
        </table>
        <!--end htmlcode table -->        

        <!--css Style table -->
        <table id="cssStyle">
          <caption>CssStyle</caption>
          <tbody>
            <tr>
              <td>use Css in html </td>
              <td>
                <pre><code>/*#1 link css in order from reset,common to special style apply to current page,otherwise,css style will cover each other*/
  &lt;link rel="stylesheet" href="css/960/reset.css" /&gt;
  &lt;link rel="stylesheet" href="css/960/960.css" /&gt;
  &lt;link rel="stylesheet" href="css/specialStyle.css" /&gt;
/*#2 import css*/
  &lt;style type="text/css" media="screen"&gt;@import url(“screen.css"); &lt;/style&gt;
/*#3 css in html head*/
  &lt;style type="text/css"&gt;...&lt;/style&gt;
/*#4 css in html tag*/
  &lt;p style="font-size:12px"&gt;
</code></pre>
              </td>
            </tr>

            <tr>
              <td>Print css</td>
              <td>
                <pre><code>&lt;link rel="stylesheet" type="text/css" media="screen" href="screen.css" /&gt;
&lt;link rel="stylesheet" type="text/css" media="print" href="print.css" /&gt;
/*print css*/
body {
font: 12pt "Times New Roman", Times, serif;
color: black;
background: white;}
#navigation, form {
    display: none;}
a {
    color: black;
    text-decoration: none;}
#content {
    margin: 0;
    width: 100%;}
</code></pre>
              </td>
            </tr>

            <tr>
              <td>
                Styling Text fonts
              </td>
              <td>
                <p>
                  Font-family: font-family: ideal, alternative, common, generic; 
                  <br />Check <a href=" http://www.typetester.org/">Type tester</a> and CSS font stack effect recommendation 
                  <br />Together with the legendary Times New Roman. the fonts Arial. Lucida, Georgia and Trebuchet work best at a font size of 26 pixels and above and make for nice-looking headings in the body copy. Verdana, Georgia, Lucida and Arial are common choices for blocks of text;
                </p>
                <p>
                  Line-height:By default, browser set font size 16px =1em; line height 1.0-1.2 (varies on different browser )
So line-height = 16px or 19.2px; use number value for css line-height is better (easy to scale with relevant font size )
<br /> WCAG 2.0 suggest use line-height:1.5 to be AAA, if you set font-sie:12px, line-height:18px; and leading=6px; half-leading = 3px(apply to top and bottom of the content area)
<br />The line height of line box is determined by the tallest inline box element inside, when the line height is smaller than the content, the line poked out ;e.g. font-weight change from normal to bold can explode the line height or width
<pre><code>body{line-height:1.5;}</code></pre>
further reading <a href="http://www.maxdesign.com.au/articles/css-line-height/">Css line-height slideshare explain</a>
                </p>
                <p>Setting body in serif and heading in san serif or visa-versa looks good; and don't use Comic Sans font</p>
                
                <p style="font-family:arial,Helvetica,sans-serif;font-size:1em;color:#333;line-height:1.5;font-weight:bold;font-style:italic;text-transform:uppercase; text-indent: 2em; text-align: right;"> "test fonts on here" Another property rooted in traditional print styling that doesn’t translate quite
                  as well on a web page (because it’s not really a convention on the Web) is text-indent, the first line of text in a box by a length or percentage.
                </p>
                full{font-family:arial,Helvetica,sans-serif;font-size:1em;color:#333;line-height:1.5;font-weight:bold;font-style:italic;text-transform:uppercase;text-indent: 2em;text-align: right;}
                <br/>shorthand{font:1em/1.5 arial,Helvetica,sans-serif;}
              </td>
            </tr>

            <tr>
              <td><a name="alinkstyle"></a>
                Styling links
              </td>
              <td><strong>Link 5 states:</strong> a:link,visited,hover,focus,active (lvha); a{} apply to all link states
                <br/>
                <strong>Best practice:</strong>
                <ul>
                  <li>use a{}for general state style(make links look linkable using multi cues-bold,underline,blue,button shape);</li>
                  <li>specify a:visited - disinguish with a:link a little bit, make the visited link in a lighter color</li>
                  <li>specify a:hover - make link active, changing underline, color,background image (but change font size,weight,style is not wise choice)</li>
                </ul>
                <pre><code>#testinglink a{color:#900; font-weight: bold; text-decoration: none;}
#testinglink a:visited{color:#c00;}
#testinglink a:hover{color:#900;text-decoration: underline;}</code></pre>
              </td>
            </tr>

            <tr>
              <td>Styling image</td>
              <td>
                Image Border Annihilation - if there is a img element inside a link,browser will apply a border to image by default
                <br/>you need use img{border:0;} to annihilate the image border
              </td>
            </tr>

            <tr>
              <td>Styling List</td>
              <td>
                <p>
                  <a name="style_list"></a>
                  1 By default,browser will apply margin and padding to the list element,so set ul{margin:0;padding:0;} in reset.css is necessary
                  <br/>2 By default,list will place marker outside the content box, set {list-style-position:inside} to change it
                  <br/><img src="<?= base_url(); ?>images/lab/ul_margin.jpg" alt="ul list margin" />
                </p>
                <pre><code>#ul_list{
  list-style-type: square;
  list-style-position: inside;}
#ol_list{
  list-style-image: url(../../images/triangle.gif);
  list-style-position: inside;}
</code></pre>
                <p>3 Horizontal lists- by default, li is displayed as block element,so need to change it to inline or change it to float.
                  <br/> float method is better than inline because it still keep li as block element, thus manipulation of vertical padding,border are available; and also do not forget to add a div with {clear:both} after floating elements</p>
                <pre><code>#ul-horizon li{
float:left;
padding-left: 10px;}
</code></pre>
                <div class="mb-10px">4 Tabs list style
                  <a name="style_tab"></a>
                  <ul id="tab-list">
                    <li><a href="#style_tab">tab 1</a></li>
                    <li id="selected"><a href="#style_tab">tab 2</a></li>
                    <li><a href="#style_tab">tab 3</a></li>
                    <li><a href="#style_tab">tab 4</a></li>
                  </ul>
                  <div class="clear"></div>
                  <div id="tab-content">
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                  </div>                  
                </div>
                <pre><code>&lt;div class="mb-10px"&gt;4 Tabs list style
  &lt;a name="style_tab"&gt;&lt;/a&gt;
  &lt;ul id="tab-list"&gt;
    &lt;li&gt;&lt;a href="#style_tab"&gt;tab 1&lt;/a&gt;&lt;/li&gt;
    &lt;li id="selected"&gt;&lt;a href="#style_tab"&gt;tab 2&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#style_tab"&gt;tab 3&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#style_tab"&gt;tab 4&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
  &lt;div class="clear"&gt;&lt;/div&gt;
  &lt;div id="tab-content"&gt;
     &lt;p&gt;It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;

ul#tab-list li{
  float:left;
  border:1px solid #bbb;
  border-bottom-width: 0;/*no bottom border for li*/}
ul#tab-list a{
  display: block;/*make a block level,like a tab button,enlarge link area*/
  background-color: #eee;
  width:8em;
  text-align: center;
  text-decoration: none;}
ul#tab-list a:hover{background-color: #ddf;}
ul#tab-list li#selected{border-color:black;}
ul#tab-list li#selected a{
  position:relative;
  top:1px;/*cover bottom 1px border*/
  background-color: #fff;
  font-weight:bold;}
div#tab-content{
  border:1px solid;
  padding:10px;
  width:36em;}
</code></pre>
              </td>
            </tr>

            <tr>
              <td>Styling Form</td>
              <td>
                <ul>
                  <li><strong>Fonts:</strong> As default, textarea has a Courier font and input has a sans-serif font. The input, textarea and select elements will not inherit any font properties from ancestor.
                    <br/>
                    <input type="text" id="txtipt3" name="txtipt3" value="Sans-serif"/>
                    <input type="text" id="txtipt_font" name="txtipt_font" value="Helvetica"/>
                    input,textarea{font:1em Helvetica,sans-serif;color:#333;}
                  </li>

                  <li>
                    <strong>Border:</strong> (most browser won't apply CSS border to Select elements)
                    <br/>
                    <input type="text" id="txtipt2" name="txtipt2"/>
                    input,textarea{border:1px solid; border-color: #666 #ccc #ccc #666;}
                  </li>

                  <li>
                    <strong>Elements background:</strong> We can change the background color of text box and textarea when they are in focus to aid usability,IE6 doesn't support :focus, but we can fixed it with <a href="http://www.htmldog.com/articles/suckerfish/focus">Suckerfish Javascript</a>
                    <br/>
                    <input type="text" id="txtipt_bg" name="txtipt_bg"/>
                    input#txtipt_bg:focus, textarea#txtipt_bg:focus { background: yellow;}
                    <br/>For checkboxes and radio buttons,many browsers will ignore any background settings-leaving them white.
                  </li>

                </ul>
              </td>
            </tr>
            <tr>
              <td>Styling Table <a name="styletable"></a></td>
              <td>
                <pre><code>table{width: 100%; border-collapse: collapse;}
table caption{text-align: left; font-weight: bold;font-size: 18px;}
table th{text-align: center;vertical-align: baseline; font-weight: bold}
table td{padding:0 10px 0 10px; border:1px solid #000;vertical-align: top;}
</code></pre>
                <p>More information at <a href="http://www.w3.org/TR/CSS2/tables.html">Visual layout of table content at W3.org</a> and <a href="http://robertdenton.org/reference/css-tables-tutorial.html#">common table style</a></p>
              </td>
            </tr>

            <tr>
              <td>More CSS Property</td>
              <td><p>More CSS property on <a href="http://htmldog.com/reference/cssproperties/">HTML Dog CSS properties</a></p></td>
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
        <p>footer</p>
      </div>

      <div class="clear"></div>
    </div>

    <!--Back to Home button -->
    <?php echo $this->load->view('lab/v_backhomebtn'); ?>
    <!-- end Back to Home button-->

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