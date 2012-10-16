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

  <a class="meta" href="#">Hacker Dojo </a>
  <h4 class="title"> jQuery Mobile training and workshop</h4>
  <div class="hr dotted clearfix"> </div>

  <!--Project Intro -->
  <div class="projectIntro">
      <h6>Introduction:</h6>
       <p>
           jQuery Mobile training and workshop at Hacker Dojo by Adobe
       </p>
       <h6>Process:</h6>
           <p>
               I used YQL and Google Map api with jQuery Mobile to create 2 basic features: 1 show current locations  Google map on mobile ; 2 YQL fetch RSS feed
           </p>
      
    <p><b>Project Time:</b> 3.2011</p>
  </div>
  <!--End Project Intro -->

  <p class="clearfix">
    <a href="<?php echo base_url(); ?>portfolio" class="green button float">&lt;&lt; Back to Portfolio</a>
 <a href="<?php echo base_url(); ?>lab/jquery_mobile_demo1" class="button float right" target="_blank">Visit Demo</a>
  </p>
</div>

<!-- Column 2 / Image Carosuel -->
<div id="folio_scroller_container" class="grid_8 cleafix">
  <ul id="folio_scroller">
    <li><span> jQuery Mobile training and workshop</span><a href="<?php echo base_url(); ?>lab/jquery_mobile_demo1"><img alt=" jQuery Mobile training and workshop" src="<?php echo base_url(); ?>images/portfolio/mobile_jquerymobile_workshop.jpg" /></a></li>
    
  </ul>
    
</div>
<div class="hr grid_12 clearfix"></div>