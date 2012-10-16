<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title><?= $html_title;?></title>
    <link rel="shortcut icon" href="<?= base_url()?>images/favicon.ico" type="image/x-icon" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/playground/common.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/960/reset.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/960/text.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/960/960.css" />

    <!-- Scripts -->
    <script type="text/javascript" src="<?php echo base_url(); ?>/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/js/jquery.tools.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function(){
         $('ul.tabs').tabs('div.panes > div');
      });
    </script>

    <style type="text/css">
      ul.tabs{
        display: block;
        list-style: none;
        height: 20px;
        border-bottom: 1px solid grey;
        margin-bottom: 0;        
       }
       .tabs li{
         float: left;      
         margin-left:0;
         text-indent: 0;}
       .tabs a{
         padding-left: 10px;
         width:60px;
         display: block;    
         height: 20px;                  
       }
       .tabs .current, .tabs .current:hover, .tabs li.current a{
         border: 1px solid grey;
         border-bottom-color: white;
         background-color: #fff;}
       div.panes{
         clear: both;
         border-left: 1px solid grey;
         border-right: 1px solid grey;
         border-bottom: 1px solid grey;}
       div.panes h2{margin-bottom: 10px;}
       div.panes div{
         padding:0 10px;

}

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
          <li>Home</li>
          <li>Topics</li>
          <li>About</li>
          <li>Contact</li>
        </ul>
      </div>
      <div class="clear"></div>

      <!--banner -->
      <div id="tabs_effect" class="grid_12 m_bottom_10px" >
        <ul class="tabs">
          <li><a href="#">tab1</a></li>
          <li><a href="#">tab2</a></li>
          <li><a href="#">tab3</a></li>
          <li><a href="#">tab4</a></li>
        </ul>
        <div class="panes bg_white">
          <div>            
            <h2>tab1 content</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to</p>
          </div>
          <div>
            <h2>tab2 content</h2>
            <p>behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to</p>
          </div>
          <div>
            <h2>tab3 content</h2>
            <p>far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to</p>
          </div>
          <div>
            <h2>tab4 content</h2>
            <p>there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to</p>
          </div>

        </div>
      </div>

      <div class="clear"></div>

      <!--spacer -->
      <div class="grid_12 spacer"></div>
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