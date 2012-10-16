<!-- Catch Line and Link -->
<h2 class="grid_12 caption clearfix"><?php echo $portfolioTitle; ?></h2>

<div class="hr grid_12 clearfix"></div>

<!-- Column 1 / Project Information Entry -->
<div class="grid_4">

  <a class="meta" href="#">SJSU </a>
  <h4 class="title"> SJSU mobile site project</h4>
  <div class="hr dotted clearfix"> </div>

  <!--Project Intro -->
  <div class="projectIntro">
      <h6>Introduction:</h6>
       <p>
           San Jose State University mobile project
       </p>
       <h6>In Process..</h6>
           <p>
               Mobile first principle practice, and use jQuery mobile as framework.
           </p>
      
    <p><b>Project Time:</b> 8.2011</p>
  </div>
  <!--End Project Intro -->

  <p class="clearfix">
    <a href="<?php echo base_url(); ?>portfolio" class="green button float">&lt;&lt; Back to Portfolio</a>
  
  </p>
</div>

<!-- Column 2 / Image Carosuel -->
<div id="folio_scroller_container" class="grid_8 cleafix">
  <ul id="folio_scroller">
    <li><span> San Jose State University mobile site project</span><a href="#"><img alt="San Jose State University mobile site project" src="<?php echo base_url(); ?>images/portfolio/sjsu_mobilesite.jpg" /></a></li>
    
  </ul>
    
</div>
<div class="hr grid_12 clearfix"></div>

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