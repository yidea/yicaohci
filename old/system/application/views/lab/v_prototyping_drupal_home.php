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
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/lab/common.css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
  </head>

  <body class="bg_white">
    <div id="skip_links">
      <a href="content">Skip to main content</a>
      <a href="search">Skip to search</a>
    </div>
    
   
       <!--header -->
       <div id="header">
         <div id="header_inner" class="container_12">

           <div id="header_navlink" class="grid_12">
             <ul>
               <li><a href="#">Get Started</a></li>
               <li></li>
               <li></li>
             </ul>
           </div>
           <div class="clear"></div>
           
           <div id="header_logo" class="grid_7">
             <h1>Drupal</h1>
             <h2>Come for the software, stay for the community</h2>
             <p>Drupal is an open source content management platform powering millions of websites and applications. It’s built, used, and supported by an active and diverse community of people around the world. </p>
           </div>           

           <div id="header_search" class="grid_5">
             <h2>Search Drupal.org</h2>
           </div>
           <div class="clear"></div>
         </div>
       </div>
    

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

      <!--content main -->
      <div class="grid_6 content_main" >
        <h2>content_main: grid_6</h2>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to</p>
      </div>
      <div class="grid_6 content_main" >
        <div class="grid_3 alpha" >
          <h2>content_main: grid_3</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to</p>
        </div>
        <div class="grid_3 omega" >
          <h2>content_main: grid_3</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to</p>
        </div>
      </div>
      <div class="clear"></div>

      <!--spacer -->
      <div class="grid_12 spacer"></div>
      <div class="clear"></div>

      <!--footer -->
      <div class="grid_4">
        <p>footer: grid_4</p>
      </div>
      <div class="grid_4">
        <p>footer: grid_4</p>
      </div>
      <div class="grid_4">
        <p>footer: grid_4</p>
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