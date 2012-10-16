<!-- Catch Line and Link -->
<h2 class="grid_12 caption clearfix"><?php echo $portfolioTitle; ?></h2>

<div class="hr grid_12 clearfix"></div>

<!-- Column 1 / Project Information Entry -->
<div class="grid_4">

  <a class="meta" href="http://www.netapp.com">NetApp Inc. </a>
  <h4 class="title">NetApp UX/UI design projects</h4>
  <div class="hr dotted clearfix"> </div>

  <!--Project Intro -->
  <div class="projectIntro">
      <h6>The Problem:</h6>
     <p>
     From the survey and feedback,we see NetApp's public sites and intranet needs improvement in its user experience, information architecture and performance. 
    </p>
    
      <h6>My role :</h6>
      <p>
         I worked as UX/UI Design Inter. Conduct Design Research,design and engineer in Customer Support, Search, Web Portal and Mobile sites, gauging design via Usability Testing, Web Analytics and Web Performance
      </p>
      
      <h6>Solution:</h6>
      <ul>
          <li> Apply Lean User Experience methods in redesigning Customer Support, Web Portal and search site, conduct Design Research(Heuristic Analysis, Competitor Analysis )</li>
          <li>Practice Design Principle and Usability guidelines in Visual and UI design </li>
          <li>Practice Design Principle and Usability guidelines in Visual and UI design </li>
          <li>Validating Design by conducting Usability Testing and using Web Analytics(heatmap) and A/B test data to optimize design</li>
          <li>Document Style Guide and Best Practice, conduct Web Page Performance Analysis</li>
          <li>Mobile site strategy research(HTML5)</li>
          
      </ul>
           
    <p><b>Project Time:</b> 5.2011- 8.2011</p>
  </div>
  <!--End Project Intro -->

  <p class="clearfix">
    <a href="<?php echo base_url(); ?>portfolio" class="green button float">&lt;&lt; Back to Portfolio</a>
     <a href="http://www.netapp.com" class="button float right">Visit Site</a>
  </p>
</div>

<!-- Column 2 / Image Carosuel -->
<div id="folio_scroller_container" class="grid_8 cleafix">
  <ul id="folio_scroller">
     
    <li><span>netapp_support_persona</span><a href="#"><img alt="netapp_support_persona" src="<?php echo base_url(); ?>images/portfolio/netapp_support_persona.jpg" /></a></li>
<!--    <li><span>Netapp_main</span><a href="#"><img alt="Netapp main" src="<?php //echo base_url(); ?>images/portfolio/netapp_ux.jpg" /></a></li>-->
    
  <li><span>netapp_web_performance</span><a href="#"><img alt="netapp_web_performance" src="<?php echo base_url(); ?>images/portfolio/netapp_web_performance.jpg" /></a></li>
<!--   <li><span>netapp_mobile</span><a href="#"><img alt="netapp_mobile" src="<?php// echo base_url(); ?>images/portfolio/netapp_mobile.jpg" /></a></li>-->
  
  <li><span>netapp_usability_analysis</span><a href="#"><img alt="netapp_usability_analysis" src="<?php echo base_url(); ?>images/portfolio/netapp_usability_analysis.jpg" /></a></li>
  
<!--  <li><span>netapp_user_testing</span><a href="#"><img alt="netapp_user_testing" src="<?php //echo base_url(); ?>images/portfolio/netapp_user_testing.jpg" /></a></li>-->
  
  <li><span>netapp_search_usability_evaluation</span><a href="#"><img alt="netapp_search_usability_evaluation" src="<?php echo base_url(); ?>images/portfolio/netapp_search_usability_evaluation.jpg" /></a></li>
    
<!--     <li><span>netapp_style_guide</span><a href="#"><img alt="netapp_style_guide" src="<?php// echo base_url(); ?>images/portfolio/netapp_style_guide.jpg" /></a></li>-->
     
    <li><span>netapp_support2</span><a href="#"><img alt="netapp_support0" src="<?php echo base_url(); ?>images/portfolio/netapp_support2.jpg" /></a></li>
    <li><span>netapp_support1</span><a href="#"><img alt="netapp_support0" src="<?php echo base_url(); ?>images/portfolio/netapp_support1.jpg" /></a></li>
     <li><span>netapp_support</span><a href="#"><img alt="netapp_support0" src="<?php echo base_url(); ?>images/portfolio/netapp_support0.jpg" /></a></li>
    
    
    
  </ul>   
</div>
<div class="hr grid_12 clearfix"></div>

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