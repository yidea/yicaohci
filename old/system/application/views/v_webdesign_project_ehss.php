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

    <a class="meta" href="http://www.ehss.org/testing/" target="_blank">www.EHSS.org</a>
  <h4 class="title">EHSS.org Redesign Project</h4>
  <div class="hr dotted clearfix"> </div>

  <!--Project Intro -->
  <div class="projectIntro">
      <h6>The Problem:</h6>
     <p>
Enterprise for High School Students (EHSS) is a Bay area school-to-work/youth development Non Profit Organization.
The problems with current site are: the site is hard to navigate for visitor and they usually lost after clicks, the whole color and layout isn’t elegant and attractive, the sites user experience needs improvement.
    </p>
    
      <h6>The Process and My Role:</h6>
    <p>
        There are 6 poeple in the team, my role is interaction design and front-end template implement and support another front-end developer on documents.
        <br />
        We first met with EHSS board to understand to their ideas and strategy, and then identify old design problem
        then we setup 12 interviews with target user(students and employers) to understand how they interact with the sites, what’s the pain point when they use it and their expectation. We also did market competitor analysis to find the proper strategy for EHSS.
    <br />
        We did the persona and task analysis and design guideline, we are aware that the target users are students and employer, they want the site in a way of elegant and full of passion, the information should be accessible and easy to find without many clicks.
We did a usability testing on current site and try to use the web usability best practice in the new design.
We did the card sorting to find the information structure, then we prototype, present and reflect on the feedback iteratively around one month, we used PAPER, PDF and HTML as prototyping method. We are currently testing the final version at <a href="http://www.ehss.org/testing/" target="_blank">EHSS.org/testing</a>
    </p>
      
    <p><b>Project Time:</b> 10.2010 - present</p>
  </div>
  <!--End Project Intro -->

  <p class="clearfix">
    <a href="<?php echo base_url(); ?>portfolio" class="green button float">&lt;&lt; Back to Portfolio</a>
    <a href="http://www.ehss.org" target="_blank" class="button float right">Visit Site</a>
  </p>
</div>

<!-- Column 2 / Image Carosuel -->
<div id="folio_scroller_container" class="grid_8 cleafix">
  <ul id="folio_scroller">
    <li><span>EHSS.org Home page</span><a href="#"><img alt="EHSS.org Home page" src="<?php echo base_url(); ?>images/portfolio/webdesign_project_ehss1.jpg" /></a></li>    
    
    <li><span>EHSS.org Employers page</span><a href="#"><img alt="EHSS.org Employers page" src="<?php echo base_url(); ?>images/portfolio/webdesign_project_ehss3.jpg" /></a></li>   
    <li><span>EHSS.org Contact Us</span><a href="#"><img alt="EHSS.org Contact Us" src="<?php echo base_url(); ?>images/portfolio/webdesign_project_ehss4.jpg" /></a></li>
    <li><span>EHSS.org Program page</span><a href="#"><img alt="EHSS.org Program page" src="<?php echo base_url(); ?>images/portfolio/webdesign_project_ehss2.jpg" /></a></li>
    <li><span>EHSS.org Site map</span><a href="#"><img alt="EHSS.org sitemap" src="<?php echo base_url(); ?>images/portfolio/webdesign_project_ehss_sitemap.jpg" /></a></li>
  
     
  </ul>
</div>
<div class="hr grid_12 clearfix"></div>