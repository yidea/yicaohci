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

  <a class="meta" href="#">Interaction Design 131, SJSU</a>
  <h4 class="title">Design for Future TV</h4>
  <div class="hr dotted clearfix"> </div>

  <!--Project Intro -->
  <div class="projectIntro">
      <h6>The Problem:</h6>
     <p>
      Internet has changed media consumer's habit during the last 4-5 years.  In this Future TV project, we want to create a TV interface experience that align with a more wired and dynamic world.
    </p>
    
      <h6>The Process&My Role:</h6>
      <ul>
          <li>In User research, I worked on moderator script and user interview, we observed users' behavior by giving them 2 tasks and we tried to understand how they interact with TV and internet. (I take the audio records under their permission to do review)</li>
          <li>We sketch, present and critique iteratively during the brain storm process. I presented the design principle presentation in front of 20 people.</li>       
      </ul>

      <h6>What I learned:</h6>
      <ul>
          <li><b>Team Friendly :</b> If I want to make user friendly products,we need to be team friendly firstly and provide a way people can put equal voice in the decision making process.</li>
          <li><b>Talk to representative user : </b>Let user be my teacher, I listen to their stories and try to understand them.</li>
          <li><b>Employ UCD process :</b>  I tried employ different approaches to get the data from user, market and client.  I become more aware of the User centered design approach and “design for user’s benefit, not the features ” concept. </li>
          <li><b>Prototyping, testing, prototyping, tesing.. :</b> We did iterative prototype, presentation and testing to help us success in the design. It’s like let your baby and athlete practice many times before sending them to the real world and  playing field. </li>
          <li><b>Design trend : </b>From physical button to touch screen, from physical input to voice control, new technology brought people the opportunity to go back to the nature and only use traditional five senses. We should try to follow this trend, and make the product intuitive. </li>
      </ul>
    <p><b>Project Time:</b> 2.2011 - present</p>
  </div>
  <!--End Project Intro -->

  <p class="clearfix">
    <a href="<?php echo base_url(); ?>portfolio" class="green button float">&lt;&lt; Back to Portfolio</a>
     
  </p>
</div>

<!-- Column 2 / Image Carosuel -->
<div id="folio_scroller_container" class="grid_8 cleafix">
  <ul id="folio_scroller">
    <li><span>Design for Future TV project</span><a href="#"><img alt="Design for Future TV project" src="<?php echo base_url(); ?>images/portfolio/futureTV_cover.jpg" /></a></li>
 
        <li><span>TV Guide UI Wireframe 1 </span><a href="#"><img alt="TV Guide Wireframe 2 " src="<?php echo base_url(); ?>images/portfolio/DSID131_wireframe4.png" /></a></li>
    <li><span>TV Guide UI Wireframe 2 </span><a href="#"><img alt="TV Guide Wireframe 1 " src="<?php echo base_url(); ?>images/portfolio/DSID131_wireframe3.png" /></a></li>
    <li><span>TV Guide UI Wireframe 4 </span><a href="#"><img alt="TV Guide Wireframe 4 " src="<?php echo base_url(); ?>images/portfolio/DSID131_wireframe2.png" /></a></li>
    <li><span>TV Guide UI Wireframe 3 </span><a href="#"><img alt="TV Guide Wireframe 3 " src="<?php echo base_url(); ?>images/portfolio/DSID131_wireframe1.png" /></a></li>
    <li><span>Storyboard </span><a href="#"><img alt="Storyboard " src="<?php echo base_url(); ?>images/portfolio/futureTV_storyboard3.jpg" /></a></li>
    <li><span>Storyboard 1</span><a href="#"><img alt="Storyboard 1" src="<?php echo base_url(); ?>images/portfolio/futureTV_storyboard1.jpg" /></a></li>
    <li><span>Storyboard 2</span><a href="#"><img alt="Storyboard 2" src="<?php echo base_url(); ?>images/portfolio/futureTV_storyboard2.jpg" /></a></li>    
    <li><span>Persona creating</span><a href="#"><img alt="Persona creating" src="<?php echo base_url(); ?>images/portfolio/futureTV_persona.jpg" /></a></li>
    <li><span>Competitive analysis</span><a href="#"><img alt="Competitive analysis" src="<?php echo base_url(); ?>images/portfolio/futureTV_competitveAna.jpg" /></a></li>    
    <li><span>Brainstorming and summarize finding</span><a href="#"><img alt="Brainstorming and summarize finding" src="<?php echo base_url(); ?>images/portfolio/futureTV_brainstorming.jpg" /></a></li>
    <li><span>User Interview</span><a href="#"><img alt="User Interview" src="<?php echo base_url(); ?>images/portfolio/futureTV_userinterview.jpg" /></a></li>
    <li><span>Remote and keyboard of Google TV in User Interview </span><a href="#"><img alt="Remote and keyboard of Google TV in User Interview " src="<?php echo base_url(); ?>images/portfolio/futureTV_remote.jpg" /></a></li>     
  </ul>
</div>
<div class="hr grid_12 clearfix"></div>