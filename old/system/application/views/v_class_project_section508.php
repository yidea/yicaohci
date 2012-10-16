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

  <a class="meta" href="#">Usability Seminar (HFE 292)</a>
  <h4 class="title">Web Accessibility and Section 508 Guideline</h4>
  <div class="hr dotted clearfix"> </div>

  <!--Project Intro -->
  <div class="projectIntro">
      <h6>The Problem:</h6>
     <p>
54 million Americans has a disability, that’s 10% of the population (2000 U.S. Census). Among them, around 10 million Americans are Vision impaired; 20 million Americans are Hearing impaired.
    </p>
    
      <h6>The Process:</h6>
      <p>
          Present in front of 60 people. Firstly, by looking into the demography of disabled user in U.S. and understand the different type of disability. I focus on the Disability types that might hinder user from using Internet, then illustrate examples of problems
          that disabled users might encounter , then explain the Section 508 Guideline and interpret several Section 508 items to help audience related it to the Web. In the end, show a video to express we as
         designer should design with Accessibility in mind.
      </p>
      
    <p><b>Project Time:</b> 10.2010</p>
  </div>
  <!--End Project Intro -->

  <p class="clearfix">
    <a href="<?php echo base_url(); ?>portfolio" class="green button float">&lt;&lt; Back to Portfolio</a>
     
  </p>
</div>

<!-- Column 2 / Image Carosuel -->
<div id="folio_scroller_container" class="grid_8 cleafix">
  <ul id="folio_scroller">
    <li><span>Web Accessibility and Section 508 guideline</span><a href="#"><img alt="Web Accessibility and Section 508 guideline" src="<?php echo base_url(); ?>images/portfolio/class_project_section508_1.jpg" /></a></li>

  </ul>
    <div style="width:425px"  class="portfolio_media_content" id="__ss_7406862"><strong style="display:block;margin:12px 0 4px"><a href="http://www.slideshare.net/shanzai12/web-accessibility-for-section-508-7406862" title="Web accessibility for section 508">Web accessibility for section 508</a></strong><object id="__sse7406862" width="425" height="355"><param name="movie" value="http://static.slidesharecdn.com/swf/ssplayer2.swf?doc=webaccessibilityforsection508-110327140626-phpapp02&stripped_title=web-accessibility-for-section-508-7406862&userName=shanzai12" /><param name="allowFullScreen" value="true"/><param name="allowScriptAccess" value="always"/><embed name="__sse7406862" src="http://static.slidesharecdn.com/swf/ssplayer2.swf?doc=webaccessibilityforsection508-110327140626-phpapp02&stripped_title=web-accessibility-for-section-508-7406862&userName=shanzai12" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="425" height="355"></embed></object><div style="padding:5px 0 12px">View more <a href="http://www.slideshare.net/">presentations</a> from <a href="http://www.slideshare.net/shanzai12">shanzai12</a>.</div></div>
 
</div>
<div class="hr grid_12 clearfix"></div>