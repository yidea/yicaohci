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
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/960/text.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/common.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/form.css" />    

    <!--[if lt IE 8]>
    <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE8.js"></script>
    <![endif]-->
    <!--The script only fixes images named: *-trans.png -->
    <script type="text/javascript" src="<?php echo base_url();?>js/jquery.js"></script>  
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
        <h2>IE6 bug collection</h2>
        <table>
          <tr>
            <td>Text zoom</td>
            <td>Internet Explorer 6 does not allow users to scale text set in pixels 
up or down, em or percentage values are recommended.</td>
          </tr>
          <tr>
            <td>Inline image missing top half-leading</td>
            <td>IE6 incorrectly removes top half-leading when an inline image is present, so need to add margin to the inline image to fix this problem
              <br /> <img src="<?echo base_url();?>images/lab/ie6/ie6_inline_image.jpg" alt="ie6_inline_image"/>
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