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
<h2 class="grid_12 caption clearfix"><?php echo $category; ?></h2>

<div class="hr grid_12 clearfix">&nbsp;</div>

<!-- Column 1 / Project Information Entry -->
<div class="grid_4">
  <h4 class="title"><?php echo $content_title;?></h4>
  <div class="hr dotted clearfix">&nbsp;</div>

  <!--Project Intro -->
  <div class="projectIntro">
    <p>
      <strong>Visual Design Reasoning:</strong> <br/>
      <strong>For Polaroid effect:</strong> the polaroid frame effects will add an elegant and real feeling by using whitespace and similar visual effect of the real life frame. Choose a handwriting font will also help.

    </p>
  </div>
  <!--End Project Intro -->

  <!--Back to Home button -->
   <?php echo $this->load->view('lab/v_backhomebtn'); ?>
   <!-- end Back to Home button-->
</div>

<!-- Column 2 / Image Carosuel -->
<div id="folio_scroller_container" class="grid_8 cleafix">
  <ul id="folio_scroller">
    <li><span>Polaroid effect 1</span><a href="#"><img alt="Polaroid effect 1" src="<?php echo base_url(); ?>images/lab/Polaroid_effect1.jpg" /></a></li>
    <li><span>Polaroid effect 2</span><a href="#"><img alt="Polaroid effect 2" src="<?php echo base_url(); ?>images/lab/Polaroid_effect2.jpg" /></a></li>
    <li><span>Polaroid effect 3</span><a href="#"><img alt="Polaroid effect 3" src="<?php echo base_url(); ?>images/lab/Polaroid_effect3.jpg" /></a></li>


  </ul>
</div>
<div class="hr grid_12 clearfix">&nbsp;</div>