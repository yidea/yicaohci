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

  <a class="meta" href="#">Human Factor Society Activity (HFES 2010) </a>
  <h4 class="title">Daily Ergonomics Knowledge Presentation</h4>
  <div class="hr dotted clearfix"> </div>

  <!--Project Intro -->
  <div class="projectIntro">
      <h6>The Problem:</h6>
     <p>
     We did a survey, 2 out of 10 people knows or heard about Ergonomics, and in daily life we tend to blame ourselves for the fault instead of questioning the ergonomics attributes of the product.
    </p>
    
      <h6>The Process:</h6>
      <p>
           In HFES 2010 contest, We try to call the attention of people,  tell the importance of caring ergonomics attributes of the product, especially daily used, and the bad result might happen to use if we do not. I'm in charge of the presentation style and strategy.
           Two of us did the Body Character one by one.
           The result turns out to be pretty good. We won the most informative award.
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
    <li><span>Daily Ergonomics Knowledge Presentation cover</span><a href="#"><img alt="Daily Ergonomics Knowledge Presentation cover" src="<?php echo base_url(); ?>images/portfolio/class_project_ergonomics1.jpg" /></a></li>
    <li><span>Daily Ergonomics Knowledge Presentation end</span><a href="#"><img alt=" Daily Ergonomics Knowledge Presentation end" src="<?php echo base_url(); ?>images/portfolio/class_project_ergonomics2.jpg" /></a></li>
    <li><span>Daily Ergonomics Knowledge Presentation content</span><a href="#"><img alt="Daily Ergonomics Knowledge Presentation content" src="<?php echo base_url(); ?>images/portfolio/class_project_ergonomics3.jpg" /></a></li>    
  </ul>
    <div style="width:425px" class="portfolio_media_content" id="__ss_7210162"><strong style="display:block;margin:12px 0 4px"><a href="http://www.slideshare.net/shanzai12/ergonomics-introduction" title="Ergonomics Introduction ">Ergonomics Introduction </a></strong><object id="__sse7210162" width="425" height="355"><param name="movie" value="http://static.slidesharecdn.com/swf/ssplayer2.swf?doc=ergonomics-hfe2010sjsuhuayuyicao-110309165516-phpapp02&stripped_title=ergonomics-introduction&userName=shanzai12" /><param name="allowFullScreen" value="true"/><param name="allowScriptAccess" value="always"/><embed name="__sse7210162" src="http://static.slidesharecdn.com/swf/ssplayer2.swf?doc=ergonomics-hfe2010sjsuhuayuyicao-110309165516-phpapp02&stripped_title=ergonomics-introduction&userName=shanzai12" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="425" height="355"></embed></object><div style="padding:5px 0 12px">View more <a href="http://www.slideshare.net/">presentations</a> from <a href="http://www.slideshare.net/shanzai12">shanzai12</a>.</div></div>
</div>
<div class="hr grid_12 clearfix"></div>