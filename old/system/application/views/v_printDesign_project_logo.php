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

<div class="hr grid_12 clearfix">&nbsp;</div>

<!-- Column 1 / Project Information Entry -->
<div class="grid_4">
  <?php
  $projectName = "Logo Design";
  $urlFull = "";
  $urlShort = "";
  $imgSrc = "printDesign_project_logo";
  ?>
  <a class="meta" href="<?php echo $urlFull; ?>"><?php echo $urlShort; ?></a>
  <h4 class="title"><?php echo $projectName; ?></h4>
  <div class="hr dotted clearfix">&nbsp;</div>

  <!--Project Intro -->
  <div class="projectIntro">
    <p>
      <strong>Project Intro:</strong> <br/>
      Logo Design for several clients during 2006-2007
    </p>
    <p>
      <strong>My Role:</strong> <br/>
      Print Designer – Logo Design and retouch
    </p>
    <p>
      <strong>Skills Involved:</strong><br/>
      Graphic design in Adobe Photoshop and Illustrator
    </p>
    <p><strong>Project Time:</strong> 2006 - 2007</p>
  </div>
  <!--End Project Intro -->

  <p class="clearfix">
    <a href="<?php echo base_url(); ?>portfolio" class="green button float">&lt;&lt; Back to Portfolio</a>

  </p>
</div>

<!-- Column 2 / Image Carosuel -->
<div id="folio_scroller_container" class="grid_8 cleafix">
  <ul id="folio_scroller">
    <li><span>Logo Design Ads. 1</span><a href="#"><img alt="Logo Design Ads.1" src="<?php echo base_url(); ?>images/portfolio/<?php echo $imgSrc; ?>3.jpg" /></a></li>
    <li><span>Logo Design Ads. 2</span><a href="#"><img alt="Logo Design Ads.2" src="<?php echo base_url(); ?>images/portfolio/<?php echo $imgSrc; ?>2.jpg" /></a></li>
    <li><span>Logo Design Ads. 3</span><a href="#"><img alt="Logo Design Ads.3" src="<?php echo base_url(); ?>images/portfolio/<?php echo $imgSrc; ?>1.jpg" /></a></li>
    
  </ul>
</div>
<div class="hr grid_12 clearfix">&nbsp;</div>