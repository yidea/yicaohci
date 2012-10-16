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

  <a class="meta" href="#">Sketch Collection</a>
  <h4 class="title">Paper Prototyping</h4>
  <div class="hr dotted clearfix"> </div>

  <!--Project Intro -->
  <div class="projectIntro">
      <h6>The Process:</h6>
      <p>I value paper prototyping because it is efficient and open for critique, because it is low fidelity and sketchy, so people can join more in discussion and tend to give real thoughts on it.</p>
     <p>
         This is a collection of paper prototyping sketches during previous projects and practice, I tried different method to figure out which style work efficient for me, and I believe in <a href="http://www.amazon.com/Systems-Graphic-Systeme-Visuele-Gestaltung/dp/3721201450" target="_blank">Grid Design</a> and the idea "Less is more",
         I tried to reflect these two concept in my paper prototyping.
     </p>
  
  </div>
  <!--End Project Intro -->

  <p class="clearfix">
    <a href="<?php echo base_url(); ?>portfolio" class="green button float">&lt;&lt; Back to Portfolio</a>
     
  </p>
</div>

<!-- Column 2 / Image Carosuel -->
<div id="folio_scroller_container" class="grid_8 cleafix">
  <ul id="folio_scroller">
     <li><span>Paper Prototyping hands on project</span><a href="#"><img alt="Paper Prototyping hands on project" src="<?php echo base_url(); ?>images/portfolio/prototyping_paper5.jpg" /></a></li>
    <li><span>Home page Paper Prototyping for a website using grid</span><a href="#"><img alt="Home page Paper Prototyping for a website using grid" src="<?php echo base_url(); ?>images/portfolio/prototyping_paper1.jpg" /></a></li>
    <li><span>Paper Prototyping for a website using grid</span><a href="#"><img alt="Paper Prototyping for a website using grid" src="<?php echo base_url(); ?>images/portfolio/prototyping_paper2.jpg" /></a></li>
    <li><span>Paper Prototyping for work flow</span><a href="#"><img alt="Paper Prototyping for work flow" src="<?php echo base_url(); ?>images/portfolio/prototyping_paper3.jpg" /></a></li>
    <li><span>Paper Prototyping for different sub structure</span><a href="#"><img alt="Paper Prototyping for different sub structure" src="<?php echo base_url(); ?>images/portfolio/prototyping_paper4.jpg" /></a></li>
       
  </ul>
</div>
<div class="hr grid_12 clearfix"></div>