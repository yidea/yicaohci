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

  <a class="meta" href="#">Freelancing flash project</a>
  <h4 class="title">The Chicken Prince </h4>
  <div class="hr dotted clearfix"> </div>

  <!--Project Intro -->
  <div class="projectIntro">
      <h6>Project Intro:</h6>
     <p>
       The Chicken Prince is a short flash animation, I did the coloring and animation freelancing work for it.
    </p>
    
      <h6>My Role:</h6>
      <ul>
          <li>Flash coloring, animation</li>
          <li>work closely with the lead and combine multiple scenes </li>
      </ul>

      <h6>What I learned:</h6>
      <ul>
          <li>Flash coloring and animation skills</li>
          <li>The process and essential of animation</li>
      </ul>
    <p><b>Project Time:</b> 1.2009 - 3.2009</p>
  </div>
  <!--End Project Intro -->



  <p class="clearfix">
    <a href="<?php echo base_url(); ?>portfolio" class="green button float">&lt;&lt; Back to Portfolio</a>
     
  </p>
</div>

<!-- Column 2 / Image Carosuel -->
<div id="folio_scroller_container" class="grid_8 cleafix">
  <ul id="folio_scroller">
    <li><span>The Chicken Prince scene 1 </span><a href="#"><img alt="The Chicken Prince scene 1" src="<?php echo base_url(); ?>images/portfolio/flash_chickenPrince2.jpg" /></a></li>
    <li><span>The Chicken Prince scene 2</span><a href="#"><img alt="The Chicken Prince scene 2" src="<?php echo base_url(); ?>images/portfolio/flash_chickenPrince1.jpg" /></a></li>
    <li><span>The Chicken Prince scene 3</span><a href="#"><img alt="The Chicken Prince scene 3" src="<?php echo base_url(); ?>images/portfolio/flash_chickenPrince3.jpg" /></a></li>
    
    <li><span>The Chicken Prince scene 4</span><a href="#"><img alt="The Chicken Prince scene 4" src="<?php echo base_url(); ?>images/portfolio/flash_chickenPrince4.jpg" /></a></li>
    <li><span>The Chicken Prince scene 5</span><a href="#"><img alt="The Chicken Prince scene 5" src="<?php echo base_url(); ?>images/portfolio/flash_chickenPrince5.jpg" /></a></li>        
  </ul>
     <div class="portfolio_media_content" >
  <iframe title="YouTube video player" width="480" height="390" src="http://www.youtube.com/embed/CnCyi3C2SYI" frameborder="0" allowfullscreen></iframe>
</div>
</div>

<div class="hr grid_12 clearfix"></div>