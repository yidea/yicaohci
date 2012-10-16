<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
  <head>
    <title><?= $html_title;?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="yi cao, hci, interaction design, user experience, prototyping, UI design,HTML/CSS/Javascript/Jquery" />
    <meta name="description" content="Yi Cao on HCI, talking about web, mobile interaction design, usability testing and prototyping "/>
    <meta name="author" content="Yi Cao" />
    <link rel="shortcut icon" href="<?= base_url()?>images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/960/reset.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/960/960.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/common.css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
  </head>

  <body class="bg_white">
    <div id="skip_links">
      <a href="#content">Skip to main content</a>
      <a href="#search">Skip to search</a>
    </div>


    <div class="container_12  bg_greylight">

      <!--header -->
      <div id="header" class="grid_12" >
        <h1>Logo-Header: grid_12</h1>
      </div>
      <div class="clear"></div>

      <!--navbar-->
      <div id="navbar" class="grid_12 m_bottom_10px bg_green">
       
      </div>
      <div class="clear"></div>

      <!--banner -->    

      <!--spacer -->
      <div class="grid_12 spacer"></div>
      <div class="clear"></div>

      <!--content -->
      <div id="content" class="grid_12" >
        <h2>Zen coding for Netbeans 6.9</h2>
        <p>
          shortcut - "TAB" for single tag such as "img"
          <br/>"Ctrl+Alt+N" for complex such as "ul>li*3"
          <br/>
          <a href="http://code.google.com/p/zen-coding/">zen coding for netbeans download(download the zend html file + plugin)</a>
          <br/>
          <a href="http://www.downloadsquad.com/2010/04/30/if-you-code-html-zen-coding-will-change-your-life/">Zen coding tutorial video</a>
        </p>


        <h2>General Abbreviation</h2>
<pre><code>* E
Element name (div, p);
* E#id
Element with identifier (div#content, p#intro, span#error);
* E.class
Element with classes (div.header, p.error.critial). You can combine classes and IDs, too: div#content.column.width;
* E>N
Child element (div>p, div#footer>p>span);
* E+N
Sibling element (h1+p, div#header+div#content+div#footer);
* E*N
Element multiplication (ul#nav>li*5>a);
* E$*N
Item numbering (ul#nav>li.item-$*5);
</code></pre>

        <h2>Example</h2>
<pre><code>Example#1: div#container&gt;div#header+div#content+div#footer
&lt;div id="container"&gt;
  &lt;div id="header"&gt;&lt;/div&gt;
  &lt;div id="content"&gt;&lt;/div&gt;
  &lt;div id="footer"&gt;&lt;/div&gt;
&lt;/div&gt;

Example#2: div#nav&gt;ul#header_nav&gt;li.item$*3&gt;a
&lt;div id="nav"&gt;
  &lt;ul id="header_nav"&gt;
    &lt;li class="item1"&gt;&lt;a href=""&gt;&lt;/a&gt;&lt;/li&gt;
    &lt;li class="item2"&gt;&lt;a href=""&gt;&lt;/a&gt;&lt;/li&gt;
    &lt;li class="item3"&gt;&lt;a href=""&gt;&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;
</code></pre>

        <h2>Zen coding cheatsheet optimized version</h2>
        <embed src="http://embedit.in/XjdwiLlDmE.swf" height="392" width="499" type="application/x-shockwave-flash" allowFullScreen="true">

          <h2>Zen coding cheatsheet full version</h2>
          <embed src="http://embedit.in/KtmtvHOFoH.swf" height="400" width="499" type="application/x-shockwave-flash" allowFullScreen="true">
      </div>
      <div class="clear"></div>

      <div class="grid_12 spacer"></div>
      <div class="clear"></div>

      <!--footer -->
      <div class="grid_12">
        <p>footer: grid_12</p>
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