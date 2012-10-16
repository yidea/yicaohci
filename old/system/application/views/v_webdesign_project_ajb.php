<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.roundabout-1.0.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.roundabout-shapes-1.1.js"></script>
<script type="text/javascript">
  $(document).ready(function() { //Start up our Project Preview Carosuel
    $('ul#folio_scroller').roundabout({
      easing: 'easeOutInCirc',
      shape: 'waterWheel',
      duration: 500
    });
  });
</script>

<!-- Catch Line and Link -->
<h2 class="grid_12 caption clearfix"><?php echo $portfolioTitle; ?></h2>

<div class="hr grid_12 clearfix"></div>

<!-- Column 1 / Project Information Entry -->
<div class="grid_4">

  <a class="meta" href="http://ajewishbeginning.com">www.ajewishbeginning.com</a>
  <h4 class="title">A Jewish Beginning Inc.</h4>
  <div class="hr dotted clearfix"></div>

  <!--Project Intro -->
  <div class="projectIntro">
    <p>
      <strong>Project Intro:</strong> <br/>
      The Bris Milah serves as the first of many milestones and happy occasions to be celebrated throughout your child's life and A Jewish Beginning helps you honor and remember this most joyous of events with "The Bris Kit".
    </p>
    <p>
      <strong>My Role:</strong> <br/>
      Interaction Designer and PHP coder – Design and implement the site’s visual experience. Fully implement the form validating and tax calculation based on states ,shopping cart, credit card payment and automatic email function . Use Google Web analytics for business analysis.
    </p>
    <p>
      <strong>Skills Involved:</strong><br/>
      Prototyping in Powerpoint and Flash<br/>
      Graphic design in Adobe Photoshop<br/>
      HTML/CSS/PHP coding in Netbeans<br/>
      Use PHP Codeigniter Framework with MySQL<br/>
      Paypal Web Pro account intergration in website
    </p>
    <p><strong>Project Time:</strong> 6.2009 -10.2009</p>
  </div>
  <!--End Project Intro -->

  <p class="clearfix">
    <a href="<?php echo base_url(); ?>portfolio" class="green button float">&lt;&lt; Back to Portfolio</a>
    <a href="http://ajewishbeginning.com" class="button float right" target="_blank">Visit Site</a>
  </p>
</div>

<!-- Column 2 / Image Carosuel -->
<div id="folio_scroller_container" class="grid_8 cleafix">
  <ul id="folio_scroller">
    <li><span>Homepage</span><a href="#"><img alt="Homepage" src="<?php echo base_url(); ?>images/portfolio/webdesign_project_ajb1.jpg" /></a></li>
    <li><span>Shopping</span><a href="#"><img alt="Shopping" src="<?php echo base_url(); ?>images/portfolio/webdesign_project_ajb2.jpg" /></a></li>
    <li><span>Order Form</span><a href="#"><img alt="Order Form" src="<?php echo base_url(); ?>images/portfolio/webdesign_project_ajb3.jpg" /></a></li>
    <li><span>Find a Mohel</span><a href="#"><img alt="Find a Mohel" src="<?php echo base_url(); ?>images/portfolio/webdesign_project_ajb4.jpg" /></a></li>
    <li><span>The Bris Kit</span><a href="#"><img alt="The Bris Kit" src="<?php echo base_url(); ?>images/portfolio/webdesign_project_ajb5.jpg" /></a></li>
  </ul>
</div>
<div class="hr grid_12 clearfix">&nbsp;</div>