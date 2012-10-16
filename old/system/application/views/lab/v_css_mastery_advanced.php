<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
  <head>
    <title><?= $html_title; ?></title>    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="yi cao, hci, interaction design, user experience, prototyping, UI design,HTML/CSS/Javascript/Jquery" />
    <meta name="description" content="Yi Cao on HCI, talking about web, mobile interaction design, usability testing and prototyping "/>
    <meta name="author" content="Yi Cao" />
    <link rel="shortcut icon" href="<?= base_url() ?>images/favicon.ico" type="image/x-icon" />

    <link rel="stylesheet" href="<?php echo base_url(); ?>css/960/reset.css" />    
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/960/960.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/960/text.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/common.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/form.css" />    

    <!--[if lt IE 8]>
    <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE8.js"></script>
    <![endif]-->
    <!--The script only fixes images named: *-trans.png -->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.js"></script>  
  </head>

  <body class="bg_white">
    <div id="skip_links">
      <a href="#content">Skip to main content</a>
      <a href="#search">Skip to search</a>
    </div>

    <div class="container_12  bg_greylight">

      <!--header -->
      <div id="header" class="grid_12" >
        <!--Back to Home button -->
        <?php echo $this->load->view('lab/v_backhomebtn'); ?>
        <!-- end Back to Home button-->
      </div>
      <div class="clear"></div>

      <!--navbar-->
      <div id="navbar" class="grid_12 m_bottom_10px bg_green">
        <ul>
          <li>Home</li>
          <li>Topics</li>
          <li>About</li>
          <li>Contact</li>
        </ul>
      </div>
      <div class="clear"></div>

      <!--banner -->
      <div id="banner_left" class="grid_7 bg_grey m_bottom_10px " >
        <div id="banner_left_inner" class="bg_white height_equal">
          <h2>Banner_left: grid_7</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to</p>
        </div>
      </div>
      <div id="banner_right" class="grid_5 bg_grey m_bottom_10px " >
        <div id="banner_right_inner" class="bg_white height_equal">
          <img alt="image" width="360px" height="200px" src="<?php echo base_url(); ?>images/img_placeholder2.png"/>
        </div>
      </div>
      <div class="clear"></div>

      <!--spacer -->
      <div class="grid_12 spacer"></div>
      <div class="clear"></div>

      <!--content -->
      <div id="content" class="grid_12" >
        <table>        
          <tr>
            <td>CSS history</td>
            <td>
              <ul>
                <li>CSS 1 - 1996</li>
                <li>CSS 2 - 1998 (add float, positioning,)</li>
                <li>CSS 2.1 - 2002 (fix errors)</li>
                <li>CSS 3 - 2011 (advanced layout module, new background properties,new selector )</li>
              </ul>
            </td>
          </tr>

          <tr>
            <td>Apply CSS to HTML document</td>
            <td>
              <strong>link to only one single,well-structured CSS file can help improve download speeds considerably :</strong>
              First off, multiple files
              will result in more packets being sent from the server, and <strong>it’s the number</strong>, rather than the
              contents, of these packets that affects download time. Furthermore, browsers are only able to
              download a limited number of concurrent files from the same domain at any one time.<strong>For older
                browsers, this limit used to be a paltry 2 files</strong>, although modern browsers have upped this to
              8. So in an older browser, if you have 3 style sheets, you would have to wait for the first
              2 files to download before it starts downloading the third.
            </td>
          </tr>

          <tr>
            <td>CSS code Structure</td>
            <td>
              <pre>General styles 
•  Body styles 
•  Resets 
•  Links 
•  Headings 
•  Other elements 
Helper styles 
•  Forms 
•  Notifications and errors 
•  Consistent items 
Page structure 
•  Headers, footers, and navigation 
•  Layout 
•  Other page furniture 
Page components 
•  Individual pages 
Overrides

/* @group general styles
–––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––*/

/* @group helper styles
–––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––*/

/* @group page structure
–––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––*/

/* @group page components
–––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––*/

/* @group overrides
–––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––*/
              </pre>              
            </td>
          </tr>

          <tr>
            <td>Style Guide</td>
            <td>For big site where there are more than 1 person working on them, Style Guide is useful(for maintaining or hand over)
              <p>style guide is a document, web page, or microsite that explains how the code and visual design
of a site is pieced together
<br /> search "pattern portfolio" for more information
              </p>
            </td>
          </tr>

          <tr>
            <td>CSS optimizing and remove comments when release </td>
            <td>
              When developing and testing, keep the comment and multiple CSS link is OK;
              But when release online, you need to integrate multiple CSS file as one and remove comments and optimizing space and size; syn your developing version code with release version code
              <br />
              use CSS optimizer at <a href="http://www.cssoptimiser.com">www.cssoptimiser.com</a>
              <p>
                If you are using an Apache server, talk to your hosts about installing mod_gzip or mod_deflate. All modern
                browsers can handle files compressed with GZIP, and decompress them on the fly.<br />
                Server-side compression can reduce your HTML and CSS files by around
80%, reducing your bandwidth and making your pages much faster to download
              </p>
              <p>Further reading: <a href="http://tinyurl.com/8w9rp">CSS compress tutorial</a> </p>              
            </td>
          </tr>
          <tr>
            <td>Commenting</td>
            <td>/* @group typography */ <br />
              /* :@todo Remember to remove this rule before the site goes live */ </td>
          </tr>

          <tr>
            <td>CSS Naming 
            </td>
            <td>use "main_content" pattern for css naming, use "totalPrice" pattern for programming(jQuery,PHP) ;keep css naming as "unpresentational"
              <br /> <strong>bad names</strong>(red,left_column,top_nav,first_p); <br />
              <strong>good names</strong>(error, secondary_content,main_nav, intro)

              <h3>HTML5 like Semantic CSS naming</h3>
              <p>
                <br />Read more : <a href="http://jontangerine.com/log/2008/03/preparing-for-html5-with-semantic-class-names">Preparing for HTML 5 with Semantic Class Names </a>
                <pre><code>

</code></pre>
                <div class="nav"></div>
              </p>
            </td>
          </tr>

          <tr>
            <td>ID & Class</td>
            <td>
              Before making decision, ask yourself,<strong>is there similar style element on this page(module,news,block)</strong>, if so, use class. For other unique element - only one in the page, and for easy located and selection by jQuery for changes, you will need ID(nav,header,footer,subnav) 
              <br /><strong>use less id,class</strong> by naming only the outer wrapper, and element inside(h2,p,a) don't need extra class to identify
              <pre><code>&lt;div class="news"&gt;
  &lt;h2&gt;headingIron man is on&lt;/h2&gt;
  &lt;p&gt;paragraph ... &lt;a href="link"&gt;link&lt;/a&gt;&lt;/p&gt;
&lt;/div&gt;</code></pre>
              <strong>Best practice-margin :</strong>Using a class for the type of page and an ID for the specific page gives you a huge amount of
              control over the design and layout of your site.
              <pre><code>&lt;body id="archive" class="news"&gt;
  &lt;p&gt;My, what a lovely body you have.&lt;/p&gt;
&lt;/body&gt; </code></pre>
            </td>            
          </tr>

          <tr>
            <td>Div & Span</td>
            <td>
              <strong>Div stands for "division"</strong> - dividing a document into block-level meaningful area(nav,header,footer,news) 
              use too many div will lead to poorly structured page, only use it for division(or inner division), then inside it use native ul,h2,p,span,a,img to do their job , not div          
              <br />
              <strong>Span is for identify inline-level elements </strong> (date, author, price)
              <pre><code>&lt;p&gt;Published on &lt;span class="date"&gt;February 22nd, 2009&lt;/span&gt; by &lt;span class="author"&gt;Harry Knowles&lt;/span&gt;&lt;/p&gt;</code></pre>
            </td>                        
          </tr>

          <tr>
            <td>Microformat</td>
            <td>
              standardized naming conventions and markup patterns to represent people, places, or dates(event, card), e.g. hCalendar for calendar and events, google map use hCard format for address information on map search results
              <pre><code>&lt;div class="vcard"&gt; 
  &lt;p&gt;&lt;a class="url fn" href="http://andybudd.com/"&gt;Andy Budd&lt;/a&gt; &lt;span class="org"&gt;Clearleft Ltd&lt;/span&gt; &lt;a class="email" href="mailto:info@andybudd.com"&gt;info@andybudd.com&lt;/a&gt;«  
  &lt;/p&gt; 
  &lt;p class="adr"&gt; 
    &lt;span class="locality"&gt;Brighton&lt;/span&gt;,    &lt;span class="country-name"&gt;England&lt;/span&gt; 
  &lt;/p&gt; 
&lt;/div&gt; </code></pre>
            </td>
          </tr>

          <tr>
            <td>CSS Specificity</td>
            <td>
              <p>If you ever come across a CSS rule that just doesn’t seem to be working, you could be suffering
                from a specificity clash. Try making your selectors more specific by adding the ID of one of its
                parents</p>
              <img src="<? echo base_url(); ?>images/lab/specificity_css.jpg" width="518" height="296" alt="specificity_css"/>
            </td>
          </tr>

          <tr>
            <td>Inheritance</td>
            <td>The idea of inheritance is to reduce css code
              <br />
              Certain CSS properties, such as <strong>color, font size</strong> are inherited by the descendants of the elements
              those styles are applied to.
              <br /> <strong>heading</strong> does not inherit text size from body css, because heading font size are overwrite by default browser css
            </td>
          </tr>

          <tr>
            <td>3 most important CSS concepts(Box model, positioning,floating)</td>
            <td>
              <ul>
                <li>
                  <h2>1 Box model (MBPBC: margin,border,padding,background,content)</h2>
                   <img src="../images/lab/box_model.jpg"  alt="box_model"/>
                  <h3>Margin</h3>
                  <p><strong>Margin</strong> are transparent and can not be seen, they are used to control spacing between elements.
                    <br /> <strong>Margin collapsing:</strong> when 2 or more vertical margins meet(does not apply to horizontal), they will collapse to form a single margin(the larger one)
                    <table>
                      <tr>
                        <td>1 when two elements are about one another . e.g., we should have a margin of 20px between these 2 div, but we only have a collapsing 10px here </td>
                        <td><div style="margin-top:10px;margin-bottom:10px;border:1px solid black; height: 20px;width: 300px;" >div margin-top:10px;margin-bottom:10px</div>
                          <div style="margin-top:10px;margin-bottom:10px;border:1px solid black; height: 20px; width:300px;">div margin-top:10px;margin-bottom:10px</div>
                        </td>
                      </tr>
                      <tr>
                        <td>2 When one element is contained within another element. e.g., we should have a 20px top distance between the outer div and the inner div, but we only have a collapsing 10px</td>
                        <td>
                          <div style="margin-top:10px;margin-bottom:10px;border:1px solid black; height: 70px;width: 350px;">
                            
                             <div style=" margin-left: auto;margin-right: auto;margin-top:10px;margin-bottom:10px;border:1px solid black; height: 20px;width: 300px;">
                               div margin-top:10px;margin-bottom:10px
                              </div>
                            div margin-top:10px;margin-bottom:10px
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>3 when you have an empty element with margin an no border or padding, margins can even collapse on themselves</td>
                        <td>
                        </td>
                      </tr>
                    </table>
                    <span class="highlight_marker">Best Practice:</span> each Block-level element, only apply maring-bottom: to vertical spacing , no margin-top setting;
                  </p>
                  <h3>Border</h3>
                  <p>
                    border applies a line to the outer of padding
         
                  </p>
                  <h3>Background</h3>
                  <p>background will be applied to area formed by content+padding</p>

                </li>
                <li>
                  <h2>2 Position (normal flow, relative, absolute)</h2>
                  <h3>Display: block & inline element</h3>
                  <p><strong>Block-level</strong> box will appear vertically one after another (vertical spacing between boxes is calculated by boxes vertical margins)
                    <br /><strong>Inline-level</strong> box are laid out in a line horizontally (horizontal spacing can be adjusted using margin,border,padding,<strong>but vertical margin,border,padding have no effect on the height of a inline box</strong>)
                    <br />you can change element display from block to inline , visa versa</p>

                </li>
              </ul>
            </td>
          </tr>

          <tr>
            <td>Styling Links</td>
            <td>
              
            </td>
          </tr>

        </table>


      </div>      
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