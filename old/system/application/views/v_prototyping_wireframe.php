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

  <a class="meta" href="#">Wireframe Collection</a>
  <h4 class="title">Wireframe </h4>
  <div class="hr dotted clearfix"> </div>

  <!--Project Intro -->
  <div class="projectIntro">
      <h6>The Process:</h6>
      <p>
          Once the design direction and guideline is well understood after brainstorm and low fidelity paper prototyping process, I often create wireframe to structure the skeleton of the design.
     </p>
     <h6>What I learned:</h6>
     <p>
         It's not about the wireframing tools, it's all about the method -  how I can best present my understanding of the layout and structure after user research. And how can I let visual designer and programmer get the idea behind it.
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
    <li><span>Wireframe of Yi Cao's own portfolio website</span><a href="#"><img alt="Wireframe of Yi Cao's own portfolio website" src="<?php echo base_url(); ?>images/portfolio/wireframe1.jpg" /></a></li>
    <li><span>Wireframe of EHSS.org website</span><a href="#"><img alt="Wireframe of EHSS.org website" src="<?php echo base_url(); ?>images/portfolio/wireframe2.jpg" /></a></li>

    <li><span>Wireframe of a branding website</span><a href="#"><img alt="Wireframe of a branding website" src="<?php echo base_url(); ?>images/portfolio/wireframe3.jpg" /></a></li>
    <li><span>Wireframe of a Chinese e-commerce website</span><a href="#"><img alt="Wireframe of a Chinese e-commerce website" src="<?php echo base_url(); ?>images/portfolio/wireframe4.jpg" /></a></li>
    <li><span>Wireframe of a content website</span><a href="#"><img alt="Wireframe of a content website" src="<?php echo base_url(); ?>images/portfolio/wireframe5.jpg" /></a></li>
    
    <li><span>TV Guide UI Wireframe 1 </span><a href="#"><img alt="TV Guide Wireframe 2 " src="<?php echo base_url(); ?>images/portfolio/DSID131_wireframe4.png" /></a></li>
    <li><span>TV Guide UI Wireframe 2 </span><a href="#"><img alt="TV Guide Wireframe 1 " src="<?php echo base_url(); ?>images/portfolio/DSID131_wireframe3.png" /></a></li>
    <li><span>TV Guide UI Wireframe 4 </span><a href="#"><img alt="TV Guide Wireframe 4 " src="<?php echo base_url(); ?>images/portfolio/DSID131_wireframe2.png" /></a></li>
    <li><span>TV Guide UI Wireframe 3 </span><a href="#"><img alt="TV Guide Wireframe 3 " src="<?php echo base_url(); ?>images/portfolio/DSID131_wireframe1.png" /></a></li>
    
    <li><span>SiteMap of EHSS.org redesign project</span><a href="#"><img alt="SiteMap of EHSS.org redesign project" src="<?php echo base_url(); ?>images/portfolio/webdesign_project_ehss_sitemap.jpg" /></a></li>
  
    
  </ul>
</div>
<div class="hr grid_12 clearfix"></div>