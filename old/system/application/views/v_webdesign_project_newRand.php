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
  $projectName = "NewRand Logistics Research Center";
  $urlFull = "http://www.newrand.com.cn";
  $urlShort = "www.newrand.com.cn";
  $imgSrc = "webdesign_project_newRand";
  ?>
  <a class="meta" href="<?php echo $urlFull; ?>"><?php echo $urlShort; ?></a>
  <h4 class="title"><?php echo $projectName; ?></h4>
  <div class="hr dotted clearfix">&nbsp;</div>

  <!--Project Intro -->
  <div class="projectIntro">
    <p>
      <strong>Project Intro:</strong> <br/>
      NewRand Logistics Research Center is a Chinese maritime logistics consulting firm, it provides logistics data analysis for government and private companies, training service is also available. They need a website as their information portal, present the latest news, report and training information
    </p>
    <p>
      <strong>My Role:</strong> <br/>
      Interaction Designer– In charge of the whole sites’ visual and interaction design. Collaborate with developer, and provide training on information updates for system users
    </p>
    <p>
      <strong>Skills Involved:</strong><br/>
      Prototyping in Powerpoint<br/>
      HTML/CSS in Adobe Dreamweaver<br/>
      Graphic design in Adobe Photoshop<br/>
      Flash animation<br/>
      Video training using Adobe Captivate

    </p>
    <p><strong>Project Time:</strong> 5.2008 - 9.2008</p>
  </div>
  <!--End Project Intro -->

  <p class="clearfix">
    <a href="<?php echo base_url(); ?>portfolio" class="green button float">&lt;&lt; Back to Portfolio</a>
    <a href="<?php echo $urlFull; ?>" class="button float right">Visit Site</a>
  </p>
</div>

<!-- Column 2 / Image Carosuel -->
<div id="folio_scroller_container" class="grid_8 cleafix">
  <ul id="folio_scroller">
    <li><span>Homepage NewRand</span><a href="#"><img alt="Homepage NewRand" src="<?php echo base_url(); ?>images/portfolio/<?php echo $imgSrc; ?>1.jpg" /></a></li>

  </ul>
</div>
<div class="hr grid_12 clearfix">&nbsp;</div>