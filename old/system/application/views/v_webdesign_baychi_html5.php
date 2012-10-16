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

  <a class="meta" href="http://www.baychi.org/">BayCHI.org </a>
  <h4 class="title">BayCHI portal HTML5 Standardized and Redesign project</h4>
  <div class="hr dotted clearfix"> </div>

  <!--Project Intro -->
  <div class="projectIntro">
      <h6>The Problem:</h6>
     <p>
     Current BayCHi website is still using table tag to layout the content, users and members complained about the site's UX, Readability, Event Subscription, Accessibility, Layout&Design, SEO and Audio Podcast solution.
     Also BayCHI as a pioneer in User experience and HCI, its website should be an good example itself.
    </p>
    
      <h6>The Process & My role :</h6>
      <p>
           I worked with two volunteers from industrial, based on the feedback from users and member, I also talk to current members and observer how they use current site to get information, then we decide to utilize HTML5's power to enhance the user experience of current site.
          I'm also in charge of the HTML5 front-end coding and UI design in the process.
      </p>
      <h6>Solution:</h6>
      <ul>
          <li><b>For UX and Readability: </b>Group upcoming and past events, provide calendar data help user find the event date easier, highlight upcoming events and grey past events(still visitable), enlarge text size to 13px</li>
          <li><b>For Event Subscription:</b> Organize event data in hCalendar microformat and follow semantic xhtml design principle, thus the event data can be used or grabbed by other application</li>
          <li><b>For Accessibility & SEO:</b> Provide skip link, follow Section 508 Guideline and WCAG, and put main content in front of redundant  information </li>
          <li><b>For Audio Podcast:</b> Utilize HTML5's audio feature</li>
      </ul>
      
    <p><b>Project Time:</b> 2.2011- present</p>
  </div>
  <!--End Project Intro -->

  <p class="clearfix">
    <a href="<?php echo base_url(); ?>portfolio" class="green button float">&lt;&lt; Back to Portfolio</a>
     <a href="http://www.yicaohci.com/demo/BayCHI_html5/index.html" class="button float right">Visit Testing Site</a>
  </p>
</div>

<!-- Column 2 / Image Carosuel -->
<div id="folio_scroller_container" class="grid_8 cleafix">
  <ul id="folio_scroller">
    <li><span>BayCHI portal HTML5 & Accessibility standardized and redesign project</span><a href="http://www.yicaohci.com/demo/BayCHI_html5/index.html"><img alt="BayCHI portal HTML5 & Accessibility standardized and redesign project" src="<?php echo base_url(); ?>images/portfolio/webdesign_baychi_redesign.jpg" /></a></li>
  </ul>   
</div>
<div class="hr grid_12 clearfix"></div>