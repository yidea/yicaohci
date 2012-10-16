<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>960 Grid CSS - Yi Cao on HCI</title>
    <link rel="shortcut icon" href="<?= base_url()?>images/favicon.ico" type="image/x-icon" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- Stylesheets -->    
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/playground/common.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/960/reset.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/960/text.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/960/960.css" />

    <style type="text/css">      
      .bg_white{background-color: #fff}
      .bg_greylight{background-color: #eef;}
      .bg_grey{background-color: #ddd;}
      .bg_greydark{background-color: #ccc;}
      .bg_green{background-color:#8FC73E;}
      .m_bottom_10px{margin-bottom: 10px;}
      div.spacer{height: 1em;background-color: #8FC73E;}

      .height_equal{height:200px;}

      div#header{}
      div#navbar{}
      div#navbar ul{padding:10px 0;list-style: none;display: block;}
      div#navbar ul li{float: left;}

      div#banner_left{}
      div#banner_left_inner{padding:0 10px ;border:solid 10px #ddd;}
      div#banner_right{}
      div#banner_right_inner{padding:0; border:solid 10px #ddd;}
      div.content_main{}      
    </style>

    <!-- Scripts -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
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