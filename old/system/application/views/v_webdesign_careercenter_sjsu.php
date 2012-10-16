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

  <a class="meta" href="http://www.careercenter.sjsu.edu">Career Center SJSU</a>
  <h4 class="title">Career Center website at San Jose State U.</h4>
  <div class="hr dotted clearfix"> </div>

  <!--Project Intro -->
  <div class="projectIntro">
      <h6>The Problem:</h6>
     <p>
      San Jose State University Career Center is national award-wining career site, the web pages need to confer Section 508 for Accessibility, and at the same time need add certain attracting interaction content.
    </p>
    
      <h6>The Process & My role :</h6>
      <p>       
          I worked as Interaction designer and Web Accessibility specialist at Career Center. <br />
          I gauge the accessibility and usable issues of old web content, then make suggestions to change, also research the best Accessibility practice for the
          whole team. <br />
          For new content, based on request from other group, I design, wireframe and prototype the design, then test the prototypes, based on feedback from internal and external users, the better prototype become live after I implementing it in HTML.
      </p>
      <h6>Solution:</h6>
      <ul>        
          <li><b>For Accessibility & Usability:</b>Make coding confers Section 508 Guideline and WCAG,make media content(picture, video) accessible and put main content in front of redundant information, build up Accessibility best practice document and style guide</li>
          <li><b>For Screen Reader check:</b> We test pages with JAWS 11 to make sure they are accessible for blind users </li>
          <li><b>For Aesthetic:</b> When I research and design the Aesthetic Interaction for pages, I also try to make sure the interaction is workable and accessible from old browser and modern browser. e.g. we add a flpping effect on <a href="http://www.careercenter.sjsu.edu/employers/sponsorships/employer_sponsors/employer_sponsors.html" target="_blank">Career Center sponsor page</a>  </li>
      </ul>
      
    <p><b>Project Time:</b> 12.2010- present</p>
  </div>
  <!--End Project Intro -->

  <p class="clearfix">
    <a href="<?php echo base_url(); ?>portfolio" class="green button float">&lt;&lt; Back to Portfolio</a>
     <a href="http://www.careercenter.sjsu.edu/index.html"  target="_blank" class="button float right">Visit Site</a>
  </p>
</div>

<!-- Column 2 / Image Carosuel -->
<div id="folio_scroller_container" class="grid_8 cleafix">
  <ul id="folio_scroller">
    <li><span>Career Center SJSU homepage</span><a href="http://www.careercenter.sjsu.edu/index.html"  target="_blank"><img alt="Career Center SJSU homepage" src="<?php echo base_url(); ?>images/portfolio/webdesign_careercenter_sjsu1.jpg" /></a></li>
    <li><span>Career Center SJSU subpage</span><a href="http://www.careercenter.sjsu.edu/index.html"  target="_blank"><img alt="Career Center SJSU subpage" src="<?php echo base_url(); ?>images/portfolio/webdesign_careercenter_sjsu3.jpg" /></a></li>
    <li><span>Career Center SJSU sponsor page</span><a href="http://www.careercenter.sjsu.edu/employers/sponsorships/employer_sponsors/employer_sponsors.html" target="_blank"><img alt="Career Center SJSU sponsor page" src="<?php echo base_url(); ?>images/portfolio/webdesign_careercenter_sjsu2.jpg" /></a></li>
    
  </ul>

    <div style="width:477px" class="portfolio_media_content" id="__ss_7409656"><strong style="display:block;margin:12px 0 4px"><a href="http://www.slideshare.net/shanzai12/career-center-accessibility-and-usability-testing-report" title="Career center accessibility and usability testing report ">Career center accessibility and usability testing report </a></strong><object id="__sse7409656" width="477" height="510"><param name="movie" value="http://static.slidesharecdn.com/swf/doc_player.swf?doc=careercenteraccessibilityandusabilitytestingreport-110327215402-phpapp02&stripped_title=career-center-accessibility-and-usability-testing-report&userName=shanzai12" /><param name="allowFullScreen" value="true"/><param name="allowScriptAccess" value="always"/><embed name="__sse7409656" src="http://static.slidesharecdn.com/swf/doc_player.swf?doc=careercenteraccessibilityandusabilitytestingreport-110327215402-phpapp02&stripped_title=career-center-accessibility-and-usability-testing-report&userName=shanzai12" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="477" height="510"></embed></object><div style="padding:5px 0 12px">View more <a href="http://www.slideshare.net/">documents</a> from <a href="http://www.slideshare.net/shanzai12">shanzai12</a>.</div></div>
    
</div>
<div class="hr grid_12 clearfix"></div>