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

  <a class="meta" href="#">HCI 217,SJSU HFE program</a>
  <h4 class="title">HCI 217 Domino Pizza ordering systetm HCI redesign project</h4>
  <div class="hr dotted clearfix"> </div>

  <!--Project Intro -->
  <div class="projectIntro">
      <h6>The Problem:</h6>
     <p>
      From talking to friends and personal experience, we choose Domino.com as our project to practice HCI(Human Computer Interaction) principles. Current Domino Pizza portal violate server HCI principles, it made the whole order pizza online and create your own pizza process complicated and difficult. Our group tried to apply HCI principles to in the redesign.
    </p>
    
      <h6>The Process&My Role:</h6>
     <p>We did interview and research on current users and competitors(PizzaHut, Pepper Jones) users, we also did a quick check on current site using HCI principles we learned in class (Information foraging,Hick-Hyman Law, Feedback and simplify process). Based on the finding and user scenarios , we redesigned the homepage and create your own pizza section, rapid prototyping and user testing, I did the final HTML/jQuery Interactive Prototyping to present in class.
     </p>

      <h6>What I learned:</h6>
      <ul>
          <li><b>Design with HCI principle in mind </b>practice HCI theory from perception, cognition, memory, Interface design, Interaction design </li>
          <li><b>Prototyping, testing, prototyping, tesing.. :</b>Practice on wireframing, rapid Prototyping with low and high fidelity, and use HTML/jQuery for final interactive prototyping </li>
          

      </ul>
    <p><b>Project Time:</b> 9.2010 - 12.2010</p>
  </div>
  <!--End Project Intro -->

  <p class="clearfix">
    <a href="<?php echo base_url(); ?>portfolio" class="green button float">&lt;&lt; Back to Portfolio</a>
    <a href="http://www.yicaohci.com/demo/hci_DominoPizza/home.htm"  target="_blank" class="button float right">Visit HTML Prototype</a>
     
  </p>
</div>

<!-- Column 2 / Image Carosuel -->
<div id="folio_scroller_container" class="grid_8 cleafix">
  <ul id="folio_scroller">    
 
        <li><span>Domino Pizza homepage</span><a href="#"><img alt="TV Guide Wireframe 2 " src="<?php echo base_url(); ?>images/portfolio/web_dominopizza1.jpg" /></a></li>       
    <li><span>Domino Pizza - checkout and payment</span><a href="#"><img alt="TV Guide Wireframe 3 " src="<?php echo base_url(); ?>images/portfolio/web_dominopizza4.jpg" /></a></li>
    <li><span>Domino Pizza - add topping to your pizza </span><a href="#"><img alt="TV Guide Wireframe 4 " src="<?php echo base_url(); ?>images/portfolio/web_dominopizza3.jpg" /></a></li>
    <li><span>Domino Pizza - create your own pizza</span><a href="#"><img alt="TV Guide Wireframe 1 " src="<?php echo base_url(); ?>images/portfolio/web_dominopizza2.jpg" /></a></li>
  </ul>
</div>
<div class="hr grid_12 clearfix"></div>